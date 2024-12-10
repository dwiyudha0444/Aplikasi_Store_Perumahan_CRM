@extends('landingpage.pelanggan.index')
@section('content2')
    <section class="section section-l bg-white section-about" id="about">
        <div class="container">
            <div class="section-content">
                <div class="row g-gs justify-content-between">
                    <div class="col-lg-7">
                        <div class="text-block">
                            <h5 class="subtitle">About the disease</h5>
                            <h2 class="title">Coronavirus <br class="d-sm-none">(COVID-19)</h2>
                            <p class="lead"><strong>COVID-19 is a new illness that can affect your lungs and
                                    airways.</strong> It's caused by a virus called coronavirus. It was
                                discovered in December 2019 in Wuhan, Hubei, China. </p>
                            <p>Common signs of infection include respiratory symptoms, fever, cough, shortness
                                of breath and breathing difficulties. In more severe cases, infection can cause
                                pneumonia, severe acute respiratory syndrome, kidney failure and even death.</p>
                            <p>Standard recommendations to prevent infection spread include regular hand
                                washing, covering mouth and nose when coughing and sneezing, thoroughly cooking
                                meat and eggs. Avoid close contact with anyone showing symptoms of respiratory
                                illness such as coughing and sneezing.</p>
                        </div><!-- .text-block -->
                    </div><!-- .col -->
                    <div class="col-lg-5 col-xl-4">
                        <div class="wgs wgs-card mt-sm-2 mt-md-4 mt-lg-0 ml-lg-4 ml-xl-0">
                            <div class="wgs-head">
                                <h4>What you need to know</h4>
                            </div>
                            <ul class="wgs-list">
                                <li><a class="scrollto" href="#spread">How coronavirus is spread</a></li>
                                <li><a class="scrollto" href="#symptoms">Symptoms of coronavirus</a></li>
                                <li><a class="scrollto" href="#protect">How to protect yourself</a></li>
                                <li><a class="scrollto" href="#treatment">Treatment for coronavirus</a></li>
                                <li><a class="scrollto" href="#faq">Myth-Busters of coronavirus</a></li>
                                <li><a class="scrollto" href="#faq">Questions & answers</a></li>
                            </ul>
                        </div><!-- .wgs -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .section-content -->
        </div><!-- .container -->
    </section><!-- .section -->

    <section class="section section-l bg-light section-spread" id="spread">
        <div class="container">
            <div class="section-head text-center wide-md">
                <h5 class="subtitle">How coronavirus is spread</h5>
                <h2 class="title">Transmission of <br class="d-sm-none"> COVID-19</h2>
                <p>Because it's a new illness, we do not know exactly how coronavirus spreads from person to
                    person. Similar viruses are spread in cough droplets.</p>
            </div><!-- .section-head -->
            <div class="section-content">
                <div class="row g-gs justify-content-center">
                    @foreach ($pelanggans as $use)
                        <div class="col-sm-10 col-md-8 col-lg-4">
                            <div class="box">
                                <div class="box-gfx">
                                    <img src="{{ asset('landingpage/images/gfx/spread-a.png') }}" alt="">
                                </div>
                                <div class="box-content">
                                    <h4 class="title"> {{ $use->nama }}
                                    </h4>
                                    <p> {{ $use->deskripsi }}</p>
                                </div>
                            </div><!-- .box -->
                        </div><!-- .col -->
                    @endforeach

                </div><!-- .row -->
                <ul class="section-actions">
                    <li><a href="{{ route('denah') }}" class="btn scrollto"><em class="icon ni ni-question"></em>Pilih
                            Bangunan</span></a></li>
                </ul><!-- .section-actions -->
            </div><!-- .section-content -->
        </div><!-- .container -->
    </section><!-- .section -->

    <section class="section section-l bg-white section-symptom" id="symptoms">
        <div class="container">
            <div class="section-head text-center wide-lg">
                <h5 class="subtitle">What are the symptoms of COVID-19?</h5>
                <h2 class="title">Symptoms of Coronavirus</h2>
                <p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may
                    have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms
                    are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.
                </p>
            </div><!-- .section-head -->
            <div class="section-content">
                <div class="row g-gs justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-4">
                        <div class="box2">
                            <div class="box2-gfx">
                                <img src="images/gfx/symptom-a.png" alt="">
                            </div>
                            <div class="box2-content">
                                <h5 class="title">Fever</h5>
                                <p><strong>High Fever</strong> – this means you feel hot to touch on your chest
                                    or back (you do not need to measure your temperature). It is a common sign
                                    and also may appear in 2-10 days if you affected.</p>
                            </div>
                        </div><!-- .box2 -->
                    </div><!-- .col -->
                    <div class="col-sm-10 col-md-8 col-lg-4">
                        <div class="box2">
                            <div class="box2-gfx">
                                <img src="images/gfx/symptom-b.png" alt="">
                            </div>
                            <div class="box2-content">
                                <h5 class="title">Cough</h5>
                                <p><strong>Continuous cough</strong> – this means coughing a lot for more than
                                    an hour, or 3 or more coughing episodes in 24 hours (if you usually have a
                                    cough, it may be worse than usual).</p>
                            </div>
                        </div><!-- .box2 -->
                    </div><!-- .col -->
                    <div class="col-sm-10 col-md-8 col-lg-4">
                        <div class="box2">
                            <div class="box2-gfx">
                                <img src="images/gfx/symptom-c.png" alt="">
                            </div>
                            <div class="box2-content">
                                <h5 class="title">Shortness of breath</h5>
                                <p><strong>Difficulty breathing</strong> – Around 1 out of every 6 people who
                                    gets COVID-19 becomes seriously ill and develops difficulty breathing or
                                    shortness of breath.</p>
                            </div>
                        </div><!-- .box2 -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="section-cta">
                    <div class="row g-gs justify-content-center">
                        <div class="col-sm-10 col-md-8 col-lg-7 col-xl-8">
                            <div class="notes">
                                <em class="icon ni ni-alert-fill-c"></em>
                                <p><strong>Stay at home and call your doctor:</strong> If you think you have
                                    been exposed to COVID-19 and develop a fever and any symptoms, such as cough
                                    or difficulty breathing, call your healthcare provider as soon as possible
                                    for medical advice.</p>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4">
                            <div class="d-flex justify-content-lg-end ml-sm-5 ml-4 pl-3 ml-lg-0 pl-lg-0">
                                <a href="#faq" class="btn scrollto"><em class="icon ni ni-question"></em><span>Have
                                        question? Find
                                        answer.</span></a>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div><!-- .section-content -->
        </div><!-- .container -->
    </section><!-- .section -->



    <section class="section section-l bg-light section-steps pb-4" id="steps">
        <div class="container">
            <div class="section-content section-content-boxed">
                <div class="row g-gs justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="list-block pr-lg-4">
                            <h4 class="title">Take steps to protect others</h4>
                            <ul class="list-check">
                                <li><strong>Stay home if you’re sick</strong> – Stay home if you are sick,
                                    except to get medical care.</li>
                                <li><strong>Cover your mouth and nose</strong> – with a tissue when you cough or
                                    sneeze (throw used tissues in the trash) or use the inside of your elbow.
                                </li>
                                <li><strong>Wear a facemask if you are sick</strong> – You should wear a
                                    facemask when you are around other people (e.g., sharing a room or vehicle)
                                    and before you enter a healthcare provider’s </li>
                                <li><strong>Clean AND disinfect frequently touched surfaces daily</strong> –
                                    This includes phones, tables, light switches, doorknobs, countertops,
                                    handles, desks, toilets, faucets, and sinks.</li>
                                <li><strong>Clean the dirty surfaces</strong> – Use detergent or soap and water
                                    prior to disinfection.</li>
                                <li><strong>Stay informed about the local COVID-19 situation</strong> – Get
                                    up-to-date information about local COVID-19 activity from <a href="#">public
                                        health officials.</a></li>
                                <li><strong>Dedicated, lined trash can</strong> – If possible, dedicate a lined
                                    trash can for the ill person. Use gloves when removing garbage bags, and
                                    handling & disposing of trash.</li>
                            </ul>
                        </div><!-- .list-block -->
                    </div><!-- .col -->
                    <div class=" col-sm-10 col-md-8 col-lg-4">
                        <img src="images/gfx/steps.png" class="mb-2 mb-sm-0" alt="">
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .section-content -->
        </div><!-- .container -->
    </section><!-- .section -->
@endsection
