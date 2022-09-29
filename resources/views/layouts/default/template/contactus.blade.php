@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Contact Us</h3>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Contact Us
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>





<section class="contact_information sec-padd">
    <div class="container">
        <div class="tabs-outer style-two">
            <!--Tabs Box-->
            <div class="tabs-box tabs-style-one">
            
                <!--Tab Buttons-->
                <div class="center">
                 @foreach($city as $row)
                    <ul class="tab-buttons clearfix">
                        <li data-tab="{{ '#'.str_replace(' ','',$row->city) }}" class="tab-btn">{{ $row->city }}</li>
                        {{-- <li data-tab="#Angeles" class="tab-btn active-btn">Los Angeles</li>
                        <li data-tab="#Fransisco" class="tab-btn">San Fransisco</li>
                        <li data-tab="#Chicago" class="tab-btn">Chicago</li>
                        <li data-tab="#Jose" class="tab-btn">San Jose</li> --}}
                    </ul>
                    @endforeach
                </div>
                    
            
                <!--Tabs Content-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    @foreach($city as $row)
                        <div class="tab @if($loop->iteration == 1) active-tab @else tab @endif" id="{{ str_replace(' ','',$row->city) }}" style="@if($loop->iteration == 1) display: block; @else display: none; @endif ">
                            <div class="row">
                                @php
                                $data = DB::table('contactus')->where('status', 1)->where('city', $row->city)->first();
                                @endphp
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        {!! $data->office_description !!}
                                        <span class="icon icon-location"></span>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        {!! $data->contact_description !!}
                                        <span class="icon icon-technology"></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        {!! $data->working_description !!}
                                        <span class="icon icon-square"></span>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="border-bottom"></div>
</div>

<section class="contact_us sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3>Send Your Message Us</h3>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/universal/inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="section-title">
                    <h3>Your Contact</h3>
                </div>
                <div class="author-details">
                    <div class="item">
                        <h5>Human Resource:</h5>
                        <div class="img-box">
                            <img src="images/service/thumb4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5>Charles Mecky</h5>
                            <p><i class="fa fa-phone"></i>+123 456 789</p>
                            <p><i class="fa fa-envelope"></i>example@gmail.com</p>
                        </div>
                    </div>
                    <div class="item">
                        <h5>Sales Department:</h5>
                        <div class="img-box">
                            <img src="images/service/thumb5.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5>Robert Fertly</h5>
                            <p><i class="fa fa-phone"></i>+123 456 789</p>
                            <p><i class="fa fa-envelope"></i>example@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<section class="home-google-map">

    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="40.713603" 
        data-map-lng="-74.083533" 
        data-icon-path="images/logo/map-marker.png"
        data-map-title="Chester"
        data-map-zoom="11" >

    </div>

</section>

@include('layouts.default.footer')
