<?php

namespace App\Http\Controllers;

use App\Models\UrafRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UrafController extends Controller
{
    /**
     * Show the URAF form.
     */
    public function index(): View
    {
        return view('uraf.form-theme');
    }

    /**
     * Store a new URAF request.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:20', Rule::in(['male', 'female', 'other', 'prefer_not_to_say'])],
            'passport_no' => ['nullable', 'string', 'max:255'],
            'other_id_no' => ['nullable', 'string', 'max:255'],
            'e_mail_or_facebook_name' => ['nullable', 'string', 'max:255'],
            'occupation' => ['nullable', 'string', 'max:255'],
            'phone_no' => ['nullable', 'string', 'max:50'],
            'location_abroad' => ['nullable', 'string', 'max:500'],
            'employer_name' => ['nullable', 'string', 'max:255'],
            'employer_phone_no' => ['nullable', 'string', 'max:50'],
            'recruitment_agency_name_abroad' => ['nullable', 'string', 'max:255'],
            'recruitment_agency_name_local' => ['nullable', 'string', 'max:255'],
            'complaint' => ['nullable', 'string'],
            'location_lat' => ['nullable', 'numeric', 'between:-90,90'],
            'location_lng' => ['nullable', 'numeric', 'between:-180,180'],
            'upload_1' => ['nullable', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,gif,doc,docx'],
            'upload_2' => ['nullable', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,gif,doc,docx'],
            'upload_3' => ['nullable', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,gif,doc,docx'],
        ], [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
        ]);

        $uploadPaths = [];
        foreach (['upload_1', 'upload_2', 'upload_3'] as $key) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $path = $file->store('uraf-uploads', 'public');
                $uploadPaths[$key] = $path;
            } else {
                $uploadPaths[$key] = null;
            }
            unset($validated[$key]);
        }

        $urafRequest = UrafRequest::create(array_merge($validated, $uploadPaths));

        return redirect()->route('uraf.success', ['id' => $urafRequest->id])
            ->with('success', 'Your request has been submitted successfully. We will get back to you as soon as possible.');
    }

    /**
     * Show success page after form submission.
     */
    public function success(int $id): View|RedirectResponse
    {
        $urafRequest = UrafRequest::find($id);

        if (! $urafRequest) {
            return redirect()->route('uraf.form')->with('error', 'Request not found.');
        }

        return view('uraf.success-theme', ['urafRequest' => $urafRequest]);
    }
}
