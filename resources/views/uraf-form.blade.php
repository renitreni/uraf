@extends('layouts.main')

@section('content')
    <main id="main">
        <div class="loading">Loading&#8230;</div>

        <!-- ======= Consular Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title uraf-form-title">
                    <h2>Philippine Embassy Riyadh (URAF)</h2>
                    <p>Unified Request For Assistance Form</p>
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
                                <label>First Name<br>
                                    <i>Pangalan</i></label>
                                <input class="form-control" name="first_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Middle Name<br>
                                    <i>Panggitnang Apelyido</i></label>
                                <input class="form-control" name="middle_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Last Name<br>
                                    <i>Apelyido</i></label>
                                <input class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Gender<br>
                                    <i>Kasarian</i></label>
                                <select name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Passport Number<br>
                                    <i>Numero ng Pasaporte</i></label>
                                <input class="form-control" name="passport">
                            </div>
                            <div class="form-group col-md-5">
                                <label>Saudi residence ID (IQAMA) (If Available)<br>
                                    <i>Numero ng tirahan sa Saudi o IQAMA (Kung Meron)</i></label>
                                <input class="form-control" name="iqama">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Occupation <i>Okupasyon</i></h2>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation"
                                           value="Household Service Workers" checked>
                                    <label class="form-check-label">
                                        House Service Workers (e.g. Domestic Worker, Driver, Gardener etc.)
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation"
                                           value="Highly Skilled">
                                    <label class="form-check-label">
                                        Highly Skilled (e.g. Wielder, Plumber, Beautician, Office Worker, Assistant
                                        Nurse,
                                        Computer Technician etc.)
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation" value="Low Skilled">
                                    <label class="form-check-label">
                                        Low Skilled (e.g. Construction Worker, Laborers, Cook and Waiter etc.)
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation" value="Nurse">
                                    <label class="form-check-label">
                                        Nurse
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation"
                                           value="Skilled Professional">
                                    <label class="form-check-label">
                                        Skilled Professional (e.g. Engineer, Doctor, Dentist, Architects, Accountants
                                        etc.)
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Contact Information <i>Impormasyon ng Pakikipag-ugnay</i></h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-4">
                                <label>E-mail or Facebook Name<br>
                                    <i>E-mail o Pangalan sa Facebook</i></label>
                                <input class="form-control" name="email_address">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Primary Contact Number (If Any)<br>
                                    <i>Personal na Telepono (Kung Meron)</i></label>
                                <input class="form-control" name="contact_number">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Other Contact Number (If Any)<br>
                                    <i>Ibang pang Telepono (Kung Meron)</i></label>
                                <input class="form-control" name="contact_number2">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Location KSA<br><i>Lokasyon sa Saudi</i></label>
                                <input class="form-control" name="location_ksa">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Employer Information <i>Impormasyon ng Amo</i></h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-8">
                                <label>Employer Name<br>
                                    <i>Pangalan ng Amo</i></label>
                                <input class="form-control" name="employer_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Employer Contact Number (If Known)<br>
                                    <i>Telepono ng Amo (Kung Alam)</i></label>
                                <input class="form-control" name="employer_contact">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Recruitment Agency in Saudi (If Known)<br>
                                    <i>Ahensya sa Saudi (Kung Alam)</i></label>
                                <input class="form-control" name="saudi_agency">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Recruitment Agency in Philippines (If Known)<br>
                                    <i>Ahensya sa Pilipinas (Kung Alam)</i>
                                </label>
                                <input class="form-control" name="agency">
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Complaint <i>Reklamo</i></h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <label>Please provide us your concerns below. (Please allow "Know your location" in the
                                    browser)</label>
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
                                <input class="form-control" name="actual_langitude" hidden>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" name="actual_longitude" hidden>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <button id="cb-btn" type="submit" class="btn btn-success btn-block" disabled>
                                    Submit<br><i>Ipadala</i>
                                </button>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <a href="{{ route('home') }}" class="btn btn-light btn-block" disabled>
                                    Cancel my complaint<br><i>Kanselahin ang reklamo</i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Map Section ======= -->
        <section class="map">
            <div id='map' style='width: 100%; height: 300px;'></div>
        </section><!-- End Map Section -->

    </main><!-- End #main -->
@endsection

@section('scripts')
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            mapboxgl.accessToken = 'pk.eyJ1IjoicmVuaWVyLXRyZW51ZWxhIiwiYSI6ImNrZHhya2l3aTE3OG0ycnBpOWxlYjV3czUifQ.4hVvT7_fiVshoSa9P3uAew';

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            }

            $('#cb-btn').on('click', function () {
                $('.loading').removeAttr('hidden','hidden');
            });

            function showPosition(position) {
                $('[name="actual_langitude"]').val(position.coords.latitude);
                $('[name="actual_longitude"]').val(position.coords.longitude);

                $('#cb-btn').removeAttr('disabled');

                $('.loading').attr('hidden','hidden');

                var map = new mapboxgl.Map({
                    container: 'map',
                    center: [position.coords.longitude, position.coords.latitude],
                    zoom: 15,
                    style: 'mapbox://styles/mapbox/satellite-streets-v10'
                });

                var marker = new mapboxgl.Marker()
                    .setLngLat([position.coords.longitude, position.coords.latitude])
                    .addTo(map);
            }

            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        swal.fire({
                            title: 'GPS Required (GPS ay kailangan)',
                            icon: 'info',
                            html:
                                'Please enable the GPS locator to continue<br>' +
                                '<i>Maari lamang buksan ang GPS upang magpatuloy</i>',
                            focusConfirm: false,
                            confirmButtonText:
                                'GPS has been enabled!<br><i>Bukas na ang GPS!</i>',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                window.location = "{{ route('home.uraf-form') }}"
                            }
                        });
                        break;
                    case error.POSITION_UNAVAILABLE:
                        alert("Location information is unavailable.");
                        break;
                    case error.TIMEOUT:
                        alert("The request to get user location timed out.");
                        break;
                    case error.UNKNOWN_ERROR:
                        alert("An unknown error occurred.");
                        break;
                }
            }
        });
    </script>
@endsection

