@extends('layouts.main')

@section('content')

    <main id="main">

        <!-- ======= Consular Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title uraf-form-title">
                    <h2>Philippine Embassy Riyadh</h2>
                    <p>Unified Request For Assistance Form (URAF)</p>
                </div>
                <div class="row justify-content-center">
                    @if ($errors->any())
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <form class="row" method="POST" action="{{ route('home.uraf-form.send') }}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-12">
                                <h2>General Information</h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-4">
                                <label>First Name</label>
                                <input class="form-control" name="first_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Middle Name</label>
                                <input class="form-control" name="middle_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Last Name</label>
                                <input class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Occupation</label>
                                <input class="form-control" name="occupation">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Passport Number</label>
                                <input class="form-control" name="passport">
                            </div>
                            <div class="form-group col-md-2">
                                <label>IQAMA</label>
                                <input class="form-control" name="iqama">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Contact Information</h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-4">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email_address">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Primary Contact Number</label>
                                <input class="form-control" name="contact_number">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Other Contact Number</label>
                                <input class="form-control" name="contact_number2">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Location KSA</label>
                                <input class="form-control" name="location_ksa">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Employer Information</h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-8">
                                <label>Employer Name</label>
                                <input class="form-control" name="employer_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Employer Contact Number</label>
                                <input class="form-control" name="employer_contact">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Saudi Agency</label>
                                <input class="form-control" name="saudi_agency">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Agency</label>
                                <input class="form-control" name="agency">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Complaint Section</h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <label>Please provide us your concerns below</label>
                                <textarea class="form-control" name="complain" rows="6"
                                          style="resize: none;"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <input type="file" name="image1" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input type="file" name="image2" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input type="file" name="image3" class="form-control-file">
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Current Location</label>
                                <input class="form-control" name="actual_langitude" readonly>
                            </div>
                            <div class="form-group col-md-2 mt-2">
                                <label></label>
                                <input class="form-control" name="actual_longitude" readonly>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <button id="cb-btn" type="submit" class="btn btn-success btn-block" disabled>
                                    Confirm and Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->
    </main><!-- End #main -->
@endsection

@section('scripts')
    {{--    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>--}}
    <script>
        $(document).ready(function () {
            // $('[name="actual_langitude"]').val(geoplugin_latitude());
            // $('[name="actual_longitude"]').val(geoplugin_longitude());

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }

            function showPosition(position) {
                $('[name="actual_langitude"]').val(position.coords.latitude);
                $('[name="actual_longitude"]').val(position.coords.longitude);
                $('#cb-btn').removeAttr('disabled');
            }
        });
    </script>
@endsection

