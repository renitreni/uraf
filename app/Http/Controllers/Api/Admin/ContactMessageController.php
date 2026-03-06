<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * List contact messages with optional filters.
     */
    public function index(Request $request): JsonResponse
    {
        $query = ContactMessage::query()->orderByDesc('created_at');

        if ($request->filled('search')) {
            $term = $request->input('search');
            $query->where(function ($q) use ($term) {
                $q->where('name', 'like', "%{$term}%")
                    ->orWhere('email', 'like', "%{$term}%")
                    ->orWhere('subject', 'like', "%{$term}%")
                    ->orWhere('message', 'like', "%{$term}%");
            });
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }
        if ($request->filled('subject')) {
            $query->where('subject', 'like', '%' . $request->input('subject') . '%');
        }
        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->input('from_date'));
        }
        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->input('to_date'));
        }

        $perPage = max(1, min(100, (int) $request->input('per_page', 15)));
        $messages = $query->paginate($perPage);

        return response()->json($messages);
    }

    /**
     * Show a single contact message.
     */
    public function show(int $id): JsonResponse
    {
        $message = ContactMessage::find($id);

        if (! $message) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json($message);
    }
}
