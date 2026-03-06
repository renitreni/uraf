<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\UrafRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UrafRequestController extends Controller
{
    /**
     * List URAF requests with optional filters.
     */
    public function index(Request $request): JsonResponse
    {
        $query = UrafRequest::query()->orderByDesc('created_at');

        if ($request->filled('search')) {
            $term = $request->input('search');
            $query->where(function ($q) use ($term) {
                $q->where('first_name', 'like', "%{$term}%")
                    ->orWhere('last_name', 'like', "%{$term}%")
                    ->orWhere('middle_name', 'like', "%{$term}%")
                    ->orWhere('e_mail_or_facebook_name', 'like', "%{$term}%")
                    ->orWhere('phone_no', 'like', "%{$term}%")
                    ->orWhere('passport_no', 'like', "%{$term}%")
                    ->orWhere('complaint', 'like', "%{$term}%");
            });
        }

        if ($request->filled('first_name')) {
            $query->where('first_name', 'like', '%' . $request->input('first_name') . '%');
        }
        if ($request->filled('last_name')) {
            $query->where('last_name', 'like', '%' . $request->input('last_name') . '%');
        }
        if ($request->filled('email')) {
            $query->where('e_mail_or_facebook_name', 'like', '%' . $request->input('email') . '%');
        }
        if ($request->filled('phone')) {
            $query->where('phone_no', 'like', '%' . $request->input('phone') . '%');
        }
        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->input('from_date'));
        }
        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->input('to_date'));
        }

        $perPage = max(1, min(100, (int) $request->input('per_page', 15)));
        $items = $query->paginate($perPage);

        $data = $items->getCollection()->map(function (UrafRequest $item) {
            return $this->appendFileUrls($item);
        });
        $items->setCollection($data);

        return response()->json($items);
    }

    /**
     * Show a single URAF request with file URLs.
     */
    public function show(int $id): JsonResponse
    {
        $request = UrafRequest::find($id);

        if (! $request) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json($this->appendFileUrls($request));
    }

    private function appendFileUrls(UrafRequest $model): UrafRequest
    {
        $model->setAttribute('upload_1_url', $this->fileUrl($model->upload_1));
        $model->setAttribute('upload_2_url', $this->fileUrl($model->upload_2));
        $model->setAttribute('upload_3_url', $this->fileUrl($model->upload_3));

        return $model;
    }

    private function fileUrl(?string $path): ?string
    {
        if (! $path || ! Storage::disk('public')->exists($path)) {
            return null;
        }

        return asset('storage/' . $path);
    }
}
