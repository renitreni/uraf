@extends('layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>Philippine Embassy Riyadh (URAF)</h1>
            <h2>Welcome To Our Official Website</h2>
            <a href="#" id="uraf-btn" class="btn-get-started">
                Unified Request For Assistance Form
            </a>
        </div>
    </section><!-- #hero -->

    <main id="main">

        <!-- ======= Consular Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Consular Section</h2>
                    <p>Consular assistance is help and advice provided by the diplomatic agents of a country to
                        citizens of that country who are living or traveling overseas.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-compass-alt"></i></div>
                        <h4 class="title"><a href="">Passport Assistance</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-court-hammer"></i></div>
                        <h4 class="title"><a href="">Special Power Of Attorney</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-police"></i></div>
                        <h4 class="title"><a href="">Police Clearance</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-address-book"></i></div>
                        <h4 class="title"><a href="">Civil Registry Visa</a></h4>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Assistance To Nationals Section</h2>
                    <p>The Assistance to Nationals (ATN) section coordinates consular efforts in responding to urgent
                        requests for assistance made by Filipino individuals or groups, mainly involving the police,
                        immigration and judicial authorities. Requests of such nature are handled on a case-by-case
                        basis.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-tracking"></i></div>
                        <h4 class="title"><a href="">Tracking in Persons</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-box"></i></div>
                        <h4 class="title"><a href="">Shipment of Remains</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-medical-sign"></i></div>
                        <h4 class="title"><a href="">Medical Repatriation</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-diamond"></i></div>
                        <h4 class="title"><a href="">End of Service Benefit</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-ban"></i></div>
                        <h4 class="title"><a href="">Detention Cases</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-warning-alt"></i></div>
                        <h4 class="title"><a href="">Physical Abuse</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-eye"></i></div>
                        <h4 class="title"><a href="">Maltreatment</a></h4>
                    </div>
                    <div class="col-lg-3 col-md-6 icon-box">
                        <div class="icon"><i class="icofont-police-car"></i></div>
                        <h4 class="title"><a href="">Rape and other Police Cases</a></h4>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-about">
                            <h4>Assistance to Nationals Section</h4>
                            <p>011-480-1918 <br>
                                assistance@riyadhpe.com <br>
                                ATN Hotline - 056-989-3301 <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-about">
                            <h4>Consular Section</h4>
                            <p>011-482-3816 <br>
                                consular@philembassy-riyadh.org <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-about">
                            <h4>Labor Related Concerns</h4>
                            <p>011-482-3559 <br>
                                DSWD - 055-799-1428 <br>
                                PAG-IBIG - 053-798-0452 <br>
                                SSS - 055-478-2440 <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-about">
                            <h4>Philippine Overseas Labor Office</h4>
                            <p>
                                POLO Riyadh - 050-285-0944 <br>
                                poloriyadh2010@yahoo.com <br>
                                POLO Al-Khobar - 054-566-4964 <br>
                                polo_alkhobar@yahoo.com <br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->
@endsection

@section('scripts')
    <style>
        .swal-button-container {
            display: grid !important;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#uraf-btn').click(function () {
                swal("What do you want to do? (Ano ang gusto mong gawin?)", {
                    html:true,
                    buttons: {
                        onlineForm: {
                            text: "I would like to fill up the URAF form " +
                                "(Gusto kong punan ang form ng URAF)",
                            value: "onlineForm",
                        },
                        followUp: {
                            text: 'I would like to follow up my request ' +
                                '(Gusto kong makikipag-ugnayan sa aking tugon)',
                            value: "followUp",
                        },
                        cancel: "Cancel",
                    },
                })
                    .then((value) => {
                        switch (value) {
                            case "onlineForm":
                                window.location = "{{ route('home.uraf-form') }}";
                                break;
                            case "followUp":
                                window.location = "{{ route('home.followup.form') }}";
                                break;
                        }
                    });
            });
        });
    </script>
@endsection
