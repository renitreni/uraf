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
                        {{--                        <form class="row" method="POST" action="{{ route('home.uraf-form.send') }}"--}}
                        {{--                              enctype="multipart/form-data">--}}
                        <form class="row">
                            <div class="form-group col-md-12">
                                <h2>General Information</h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-4">
                                <label>First Name<br>
                                    <i>Pangalan</i></label>
                                <input class="form-control" name="first_name" :value="first_name" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Middle Name<br>
                                    <i>Panggitnang Apelyido</i></label>
                                <input class="form-control" name="middle_name" v-model="middle_name" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Last Name<br>
                                    <i>Apelyido</i></label>
                                <input class="form-control" name="last_name" v-model="last_name" readonly>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Gender<br>
                                    <i>Kasarian</i></label>
                                <select name="gender" class="form-control" v-model="gender" readonly>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Passport Number<br>
                                    <i>Numero ng Pasaporte</i></label>
                                <input class="form-control" name="passport" v-model="passport" readonly>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Saudi residence ID (IQAMA) (If Available)<br>
                                    <i>Numero ng tirahan sa Saudi o IQAMA (Kung Meron)</i></label>
                                <input class="form-control" name="iqama" v-model="iqama" readonly>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Occupation <i>Okupasyon</i></h2>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation"
                                           value="Household Service Workers" v-model="occupation" readonly>
                                    <label class="form-check-label">
                                        House Service Workers (e.g. Domestic Worker, Driver, Gardener etc.)
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation"
                                           value="Highly Skilled"  v-model="occupation" readonly>
                                    <label class="form-check-label">
                                        Highly Skilled (e.g. Wielder, Plumber, Beautician, Office Worker, Assistant
                                        Nurse,
                                        Computer Technician etc.)
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation" value="Low Skilled"
                                           v-model="occupation" readonly>
                                    <label class="form-check-label">
                                        Low Skilled (e.g. Construction Worker, Laborers, Cook and Waiter etc.)
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation" value="Nurse"
                                           v-model="occupation" readonly>
                                    <label class="form-check-label">
                                        Nurse
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="occupation"
                                           value="Skilled Professional" v-model="occupation" readonly>
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
                                <input class="form-control" name="email_address" v-model="email_address" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Primary Contact Number (If Any)<br>
                                    <i>Personal na Telepono (Kung Meron)</i></label>
                                <input class="form-control" name="contact_number" v-model="contact_number" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Other Contact Number (If Any)<br>
                                    <i>Ibang pang Telepono (Kung Meron)</i></label>
                                <input class="form-control" name="contact_number2" v-model="contact_number2" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Location KSA<br><i>Lokasyon sa Saudi</i></label>
                                <input class="form-control" name="location_ksa" v-model="location_ksa" readonly>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Employer Information <i>Impormasyon ng Amo</i></h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-8">
                                <label>Employer Name<br>
                                    <i>Pangalan ng Amo</i></label>
                                <input class="form-control" name="employer_name" v-model="employer_name" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Employer Contact Number (If Known)<br>
                                    <i>Telepono ng Amo (Kung Alam)</i></label>
                                <input class="form-control" name="employer_contact"  v-model="employer_contact" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Recruitment Agency in Saudi (If Known)<br>
                                    <i>Ahensya sa Saudi (Kung Alam)</i></label>
                                <input class="form-control" name="saudi_agency" v-model="saudi_agency" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Recruitment Agency in Philippines (If Known)<br>
                                    <i>Ahensya sa Pilipinas (Kung Alam)</i>
                                </label>
                                <input class="form-control" name="agency" v-model="agency" readonly>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <h2>Complaint <i>Reklamo</i></h2>
                                <hr>
                            </div>
                            <div class="form-group col-md-12 mt-2">
                                <label>Please provide us your concerns below. (Please allow "Know your location" in the
                                    browser)</label>
                                <textarea class="form-control" name="complain" rows="6" v-model="complain" readonly
                                          style="resize: none;"></textarea>
                            </div>

                            <div class="form-group col-md-12 mt-2">
                                <h3>Evidences</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-4" v-if="image1">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <a target="_blank" :href="'complains-images/' + image1" class="btn btn-link">
                                        View Link
                                    </a>
                                </div>
                            </div>
                            <div class="form-group col-md-4" v-if="image2">
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <a target="_blank" :href="'complains-images/' + image2" class="btn btn-link">
                                        View Link
                                    </a>
                                </div>
                            </div>
                            <div class="form-group col-md-4" v-if="image3">
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <a target="_blank" :href="'complains-images/' + image3" class="btn btn-link">
                                        View Link
                                    </a>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" name="actual_langitude" hidden>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" name="actual_longitude" hidden>
                            </div>
                            {{--                            <div class="form-group col-md-12 mt-3">--}}
                            {{--                                <button id="cb-btn" type="submit" class="btn btn-success btn-block" disabled>--}}
                            {{--                                    Submit<br><i>Ipadala</i>--}}
                            {{--                                </button>--}}
                            {{--                            </div>--}}
                            <div class="form-group col-md-12 mt-3">
                                <a href="{{ route('home') }}" class="btn btn-light btn-block" disabled>
                                    Return to Homepage<br><i>Nais kong bumalik sa unang pahina.</i>
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
    <script src='{{ asset('js/app.js') }}'></script>
    <script>
        new Vue({
            el: '#main',
            data: {!! collect($result) !!},
        });
        $(document).ready(function () {
            mapboxgl.accessToken = 'pk.eyJ1IjoicmVuaWVyLXRyZW51ZWxhIiwiYSI6ImNrZHhya2l3aTE3OG0ycnBpOWxlYjV3czUifQ.4hVvT7_fiVshoSa9P3uAew';

            $('[name="actual_langitude"]').val({{ $result->actual_langitude }});
            $('[name="actual_longitude"]').val({{ $result->actual_longitude }});

            $('#cb-btn').removeAttr('disabled');

            $('.loading').attr('hidden', 'hidden');

            var map = new mapboxgl.Map({
                container: 'map',
                center: [{{ $result->actual_longitude }}, {{ $result->actual_langitude }}],
                zoom: 15,
                style: 'mapbox://styles/mapbox/satellite-streets-v10'
            });

            var marker = new mapboxgl.Marker()
                .setLngLat([{{ $result->actual_longitude }}, {{ $result->actual_langitude }}])
                .addTo(map);
        });
    </script>
@endsection

