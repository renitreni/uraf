@extends('layouts.main')

@section('content')

    <main id="main">

        <!-- ======= Consular Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title uraf-form-title">
                    <h2>Philippine Embassy Riyadh</h2>
                    <p>Follow Up Form</p>
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
                        <form class="row" method="POST" action="{{ route('home.followup.send') }}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-4">
                                <label>First Name<br>
                                    <i>Pangalan</i></label>
                                <input class="form-control" name="first_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Last Name<br>
                                    <i>Apelyido</i></label>
                                <input class="form-control" name="first_name">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Passport Number<br>
                                    <i>Numero ng Pasaporte</i></label>
                                <input class="form-control" name="passport">
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <button id="cb-btn" type="submit" class="btn btn-success btn-block">
                                    Submit<br><i>Ipadala</i>
                                </button>
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
    <script>
        $(document).ready(function () {
        });
    </script>
@endsection

