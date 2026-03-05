<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Unified Request for Assistance Form (URAF) – {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --uraf-primary: #0d6efd;
            --uraf-border: #dee2e6;
            --uraf-label: #374151;
        }
        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            padding: 1rem 0 2rem;
        }
        .uraf-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0,0,0,.08);
        }
        .uraf-header {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: #fff;
            border-radius: 1rem 1rem 0 0;
            padding: 1.5rem 1.5rem 1.25rem;
        }
        .uraf-header h1 {
            font-size: clamp(1.25rem, 4vw, 1.5rem);
            font-weight: 700;
            margin: 0;
        }
        .uraf-header p {
            margin: 0.35rem 0 0;
            opacity: .95;
            font-size: 0.95rem;
        }
        .form-section-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--uraf-label);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--uraf-border);
        }
        .form-label {
            font-weight: 500;
            color: var(--uraf-label);
        }
        .form-control, .form-select {
            border-radius: 0.5rem;
            border: 1px solid var(--uraf-border);
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--uraf-primary);
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.2);
        }
        .btn-submit {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
        }
        .btn-submit:hover {
            background: linear-gradient(135deg, #0a58ca 0%, #084298 100%);
            color: #fff;
        }
        .location-badge {
            font-size: 0.8rem;
            padding: 0.35rem 0.6rem;
        }
        .invalid-feedback { display: block; }
        .text-muted small { font-size: 0.8rem; }
        @media (max-width: 576px) {
            .container { padding-left: 0.75rem; padding-right: 0.75rem; }
            .uraf-header { padding: 1.25rem 1rem; }
        }
    </style>
</head>
<body>
    <div class="container col-12 col-lg-10 col-xl-8">
        <div class="card uraf-card overflow-hidden">
            <div class="uraf-header">
                <h1>Unified Request for Assistance Form (URAF)</h1>
                <p>Please fill out the form below. Fields marked with * are required. Your information will be kept confidential.</p>
            </div>
            <div class="card-body p-3 p-md-4">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                        <strong>Please fix the following:</strong>
                        <ul class="mb-0 mt-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('uraf.store') }}" method="post" enctype="multipart/form-data" id="uraf-form">
                    @csrf

                    {{-- Personal information --}}
                    <div class="mb-4">
                        <h2 class="form-section-title">Personal information</h2>
                        <div class="row g-3">
                            <div class="col-12 col-md-4">
                                <label for="first_name" class="form-label form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required maxlength="255" autocomplete="given-name">
                                @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="middle_name" class="form-label">Middle name</label>
                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" maxlength="255" autocomplete="additional-name">
                                @error('middle_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="last_name" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required maxlength="255" autocomplete="family-name">
                                @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                                    <option value="">— Select —</option>
                                    <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>Other</option>
                                    <option value="prefer_not_to_say" {{ old('gender') === 'prefer_not_to_say' ? 'selected' : '' }}>Prefer not to say</option>
                                </select>
                                @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <label for="passport_no" class="form-label">Passport number</label>
                                <input type="text" class="form-control @error('passport_no') is-invalid @enderror" id="passport_no" name="passport_no" value="{{ old('passport_no') }}" maxlength="255">
                                @error('passport_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="other_id_no" class="form-label">Other ID number</label>
                                <input type="text" class="form-control @error('other_id_no') is-invalid @enderror" id="other_id_no" name="other_id_no" value="{{ old('other_id_no') }}" maxlength="255" placeholder="e.g. Iqama, Saudi residence ID">
                                @error('other_id_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    {{-- Contact --}}
                    <div class="mb-4">
                        <h2 class="form-section-title">Contact</h2>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="e_mail_or_facebook_name" class="form-label">E-mail or Facebook name</label>
                                <input type="text" class="form-control @error('e_mail_or_facebook_name') is-invalid @enderror" id="e_mail_or_facebook_name" name="e_mail_or_facebook_name" value="{{ old('e_mail_or_facebook_name') }}" maxlength="255" placeholder="Email address or Facebook profile name">
                                @error('e_mail_or_facebook_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <label for="phone_no" class="form-label">Phone number</label>
                                <input type="text" class="form-control @error('phone_no') is-invalid @enderror" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" maxlength="50" placeholder="+country code number">
                                @error('phone_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control @error('occupation') is-invalid @enderror" id="occupation" name="occupation" value="{{ old('occupation') }}" maxlength="255">
                                @error('occupation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <label for="location_abroad" class="form-label">Location abroad</label>
                                <input type="text" class="form-control @error('location_abroad') is-invalid @enderror" id="location_abroad" name="location_abroad" value="{{ old('location_abroad') }}" maxlength="500" placeholder="City, country">
                                @error('location_abroad')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    {{-- Employer & recruitment --}}
                    <div class="mb-4">
                        <h2 class="form-section-title">Employer & recruitment</h2>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="employer_name" class="form-label">Employer name</label>
                                <input type="text" class="form-control @error('employer_name') is-invalid @enderror" id="employer_name" name="employer_name" value="{{ old('employer_name') }}" maxlength="255">
                                @error('employer_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="employer_phone_no" class="form-label">Employer phone number</label>
                                <input type="text" class="form-control @error('employer_phone_no') is-invalid @enderror" id="employer_phone_no" name="employer_phone_no" value="{{ old('employer_phone_no') }}" maxlength="50">
                                @error('employer_phone_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="recruitment_agency_name_abroad" class="form-label">Recruitment agency name (abroad)</label>
                                <input type="text" class="form-control @error('recruitment_agency_name_abroad') is-invalid @enderror" id="recruitment_agency_name_abroad" name="recruitment_agency_name_abroad" value="{{ old('recruitment_agency_name_abroad') }}" maxlength="255">
                                @error('recruitment_agency_name_abroad')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="recruitment_agency_name_local" class="form-label">Recruitment agency name (local)</label>
                                <input type="text" class="form-control @error('recruitment_agency_name_local') is-invalid @enderror" id="recruitment_agency_name_local" name="recruitment_agency_name_local" value="{{ old('recruitment_agency_name_local') }}" maxlength="255">
                                @error('recruitment_agency_name_local')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    {{-- Complaint --}}
                    <div class="mb-4">
                        <h2 class="form-section-title">Complaint / details</h2>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="complaint" class="form-label">Please describe your complaint or request (paragraph)</label>
                                <textarea class="form-control @error('complaint') is-invalid @enderror" id="complaint" name="complaint" rows="5" maxlength="10000" placeholder="Describe your situation in detail...">{{ old('complaint') }}</textarea>
                                <div class="text-muted"><small>You may provide as much detail as you are comfortable sharing.</small></div>
                                @error('complaint')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    {{-- Location (from browser) --}}
                    <div class="mb-4">
                        <h2 class="form-section-title">Location</h2>
                        <p class="text-muted small mb-2">We may use your approximate location to better assist you. You can allow or skip this step.</p>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <span id="location-status" class="location-badge badge bg-secondary">Click to get location</span>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="btn-get-location">Get my location</button>
                        </div>
                        <input type="hidden" name="location_lat" id="location_lat" value="{{ old('location_lat') }}">
                        <input type="hidden" name="location_lng" id="location_lng" value="{{ old('location_lng') }}">
                    </div>

                    {{-- Uploads (max 3) --}}
                    <div class="mb-4">
                        <h2 class="form-section-title">Attachments (optional)</h2>
                        <p class="text-muted small mb-3">You may attach up to 3 files (e.g. documents, photos). Max 10 MB each. Allowed: PDF, JPG, PNG, GIF, DOC, DOCX.</p>
                        <div class="row g-3">
                            @foreach (['upload_1', 'upload_2', 'upload_3'] as $name)
                                <div class="col-12 col-md-4">
                                    <label for="{{ $name }}" class="form-label">File {{ substr($name, -1) }}</label>
                                    <input type="file" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" accept=".pdf,.jpg,.jpeg,.png,.gif,.doc,.docx">
                                    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row gap-2 justify-content-between align-items-sm-center pt-2">
                        <p class="text-muted small mb-0">By submitting, you confirm the information provided is accurate to the best of your knowledge.</p>
                        <button type="submit" class="btn btn-primary btn-submit">Submit request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            var form = document.getElementById('uraf-form');
            var latInput = document.getElementById('location_lat');
            var lngInput = document.getElementById('location_lng');
            var statusEl = document.getElementById('location-status');
            var btnLocation = document.getElementById('btn-get-location');

            function setLocationStatus(text, success) {
                statusEl.textContent = text;
                statusEl.className = 'location-badge badge ' + (success ? 'bg-success' : 'bg-secondary');
            }

            btnLocation.addEventListener('click', function () {
                if (!navigator.geolocation) {
                    setLocationStatus('Geolocation not supported', false);
                    return;
                }
                setLocationStatus('Getting location…', false);
                btnLocation.disabled = true;
                navigator.geolocation.getCurrentPosition(
                    function (pos) {
                        latInput.value = pos.coords.latitude;
                        lngInput.value = pos.coords.longitude;
                        setLocationStatus('Location captured', true);
                        btnLocation.disabled = false;
                    },
                    function () {
                        setLocationStatus('Location denied or unavailable', false);
                        btnLocation.disabled = false;
                    },
                    { enableHighAccuracy: true, timeout: 10000, maximumAge: 60000 }
                );
            });

            if (latInput.value && lngInput.value) {
                setLocationStatus('Location previously captured', true);
            }
        })();
    </script>
</body>
</html>
