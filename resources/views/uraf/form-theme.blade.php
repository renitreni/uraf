@extends('layouts.app')

@section('title', 'Request Assistance & Repatriation')

@section('content')
@php $t = asset('theme'); @endphp
@include('partials.page-header', ['title' => 'Request Assistance & Repatriation', 'breadcrumb' => [['label' => 'Request Assistance', 'url' => route('uraf.form')]]])

<!-- URAF Form Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5 donate-form bg-primary py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 p-5">
                    <p class="section-title text-dark text-start text-primary pe-3 mb-3">Unified Request for Assistance</p>
                    <h1 class="display-6 mb-4 text-dark">We're Here to Help</h1>
                    <p class="fs-5 mb-4 text-dark">The Department of Migrant Workers (DMW) and Migrant Workers Office (MWO) are committed to providing assistance and repatriation support to overseas Filipino workers. Fill out the form and our team will respond as soon as possible.</p>
                    <p class="text-dark mb-0"><i class="fa fa-check text-secondary me-2"></i>Confidential handling of your information</p>
                    <p class="text-dark mb-0"><i class="fa fa-check text-secondary me-2"></i>Assistance and repatriation support</p>
                    <p class="text-dark"><i class="fa fa-check text-secondary me-2"></i>Dedicated MWO team for your case</p>
                </div>
            </div>
            <div class="col-lg-7 bg-light py-5 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100 p-4 p-lg-5">
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

                        <h2 class="h5 text-primary mb-3">Personal information</h2>
                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required maxlength="255" placeholder="First name">
                                    <label for="first_name">First name <span class="text-danger">*</span></label>
                                </div>
                                @error('first_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" maxlength="255" placeholder="Middle name">
                                    <label for="middle_name">Middle name</label>
                                </div>
                                @error('middle_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required maxlength="255" placeholder="Last name">
                                    <label for="last_name">Last name <span class="text-danger">*</span></label>
                                </div>
                                @error('last_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                                        <option value="">— Select —</option>
                                        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>Other</option>
                                        <option value="prefer_not_to_say" {{ old('gender') === 'prefer_not_to_say' ? 'selected' : '' }}>Prefer not to say</option>
                                    </select>
                                    <label for="gender">Gender</label>
                                </div>
                                @error('gender')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('passport_no') is-invalid @enderror" id="passport_no" name="passport_no" value="{{ old('passport_no') }}" maxlength="255" placeholder="Passport number">
                                    <label for="passport_no">Passport number</label>
                                </div>
                                @error('passport_no')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('other_id_no') is-invalid @enderror" id="other_id_no" name="other_id_no" value="{{ old('other_id_no') }}" maxlength="255" placeholder="Other ID (e.g. Iqama)">
                                    <label for="other_id_no">Other ID number</label>
                                </div>
                                @error('other_id_no')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <h2 class="h5 text-primary mb-3">Contact</h2>
                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('e_mail_or_facebook_name') is-invalid @enderror" id="e_mail_or_facebook_name" name="e_mail_or_facebook_name" value="{{ old('e_mail_or_facebook_name') }}" maxlength="255" placeholder="Email or Facebook">
                                    <label for="e_mail_or_facebook_name">E-mail or Facebook name</label>
                                </div>
                                @error('e_mail_or_facebook_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('phone_no') is-invalid @enderror" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" maxlength="50" placeholder="+country code">
                                    <label for="phone_no">Phone number</label>
                                </div>
                                @error('phone_no')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('occupation') is-invalid @enderror" id="occupation" name="occupation" value="{{ old('occupation') }}" maxlength="255" placeholder="Occupation">
                                    <label for="occupation">Occupation</label>
                                </div>
                                @error('occupation')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('location_abroad') is-invalid @enderror" id="location_abroad" name="location_abroad" value="{{ old('location_abroad') }}" maxlength="500" placeholder="City, country">
                                    <label for="location_abroad">Location abroad</label>
                                </div>
                                @error('location_abroad')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <h2 class="h5 text-primary mb-3">Employer & recruitment</h2>
                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('employer_name') is-invalid @enderror" id="employer_name" name="employer_name" value="{{ old('employer_name') }}" maxlength="255" placeholder="Employer name">
                                    <label for="employer_name">Employer name</label>
                                </div>
                                @error('employer_name')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('employer_phone_no') is-invalid @enderror" id="employer_phone_no" name="employer_phone_no" value="{{ old('employer_phone_no') }}" maxlength="50" placeholder="Employer phone">
                                    <label for="employer_phone_no">Employer phone number</label>
                                </div>
                                @error('employer_phone_no')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('recruitment_agency_name_abroad') is-invalid @enderror" id="recruitment_agency_name_abroad" name="recruitment_agency_name_abroad" value="{{ old('recruitment_agency_name_abroad') }}" maxlength="255" placeholder="Agency (abroad)">
                                    <label for="recruitment_agency_name_abroad">Recruitment agency (abroad)</label>
                                </div>
                                @error('recruitment_agency_name_abroad')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('recruitment_agency_name_local') is-invalid @enderror" id="recruitment_agency_name_local" name="recruitment_agency_name_local" value="{{ old('recruitment_agency_name_local') }}" maxlength="255" placeholder="Agency (local)">
                                    <label for="recruitment_agency_name_local">Recruitment agency (local)</label>
                                </div>
                                @error('recruitment_agency_name_local')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <h2 class="h5 text-primary mb-3">Complaint / request details</h2>
                        <div class="mb-4">
                            <div class="form-floating">
                                <textarea class="form-control @error('complaint') is-invalid @enderror" id="complaint" name="complaint" rows="5" maxlength="10000" placeholder="Describe your situation...">{{ old('complaint') }}</textarea>
                                <label for="complaint">Describe your complaint or request for assistance</label>
                            </div>
                            <small class="text-muted">Provide as much detail as you are comfortable sharing.</small>
                            @error('complaint')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                        </div>

                        <h2 class="h5 text-primary mb-3">Location</h2>
                        <p class="text-muted small mb-2">Optional: We may use your approximate location to better assist you.</p>
                        <div class="d-flex align-items-center gap-2 flex-wrap mb-4">
                            <span id="location-status" class="badge bg-secondary">Click to get location</span>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="btn-get-location">Get my location</button>
                        </div>
                        <input type="hidden" name="location_lat" id="location_lat" value="{{ old('location_lat') }}">
                        <input type="hidden" name="location_lng" id="location_lng" value="{{ old('location_lng') }}">

                        <h2 class="h5 text-primary mb-3">Attachments (optional)</h2>
                        <p class="text-muted small mb-3">Up to 3 files, max 10 MB each. Allowed: PDF, JPG, PNG, GIF, DOC, DOCX.</p>
                        <div class="row g-3 mb-4">
                            @foreach (['upload_1', 'upload_2', 'upload_3'] as $name)
                                <div class="col-12 col-md-4">
                                    <label for="{{ $name }}" class="form-label">File {{ substr($name, -1) }}</label>
                                    <input type="file" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" accept=".pdf,.jpg,.jpeg,.png,.gif,.doc,.docx">
                                    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                </div>
                            @endforeach
                        </div>

                        <p class="text-muted small mb-3">By submitting, you confirm the information provided is accurate to the best of your knowledge.</p>
                        <button type="submit" class="btn btn-primary py-3 px-4">Submit request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- URAF Form End -->
@endsection

@push('scripts')
<script>
(function () {
    var form = document.getElementById('uraf-form');
    var latInput = document.getElementById('location_lat');
    var lngInput = document.getElementById('location_lng');
    var statusEl = document.getElementById('location-status');
    var btnLocation = document.getElementById('btn-get-location');

    function setLocationStatus(text, success) {
        statusEl.textContent = text;
        statusEl.className = 'badge ' + (success ? 'bg-success' : 'bg-secondary');
    }

    if (btnLocation) btnLocation.addEventListener('click', function () {
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

    if (latInput && lngInput && latInput.value && lngInput.value) {
        setLocationStatus('Location previously captured', true);
    }
})();
</script>
@endpush