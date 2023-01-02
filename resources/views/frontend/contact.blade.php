@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/contact-us.jpg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">Contact Us</h1>
                    <span class="sub-title">Feel free to contact with us</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row py-4">
            <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">
                <div class="offset-anchor" id="contact-sent"></div>

                <form action="{{ route('EmailSend') }}" method="POST" id="contactFormAdvanced"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="overflow-hidden mb-1">
                        <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp"
                            data-appear-animation-delay="200">
                            <strong>Get in Touch</strong>
                        </h4>
                        <span>Please feel free to contact us with any inquiry</span>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark text-2">
                                Full Name
                            </label>
                            <input type="text" name="name" id="name" maxlength="100" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark text-2">
                                Email Address
                            </label>
                            <input type="email" name="email" id="email" maxlength="100" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark text-2">
                                Subject
                            </label>
                            <input type="text" name="subject" id="subject" maxlength="100" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark text-2">
                                Phone
                            </label>
                            <input type="number" name="phone" id="phone" maxlength="100" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12 mb-4">
                            <label class="font-weight-bold text-dark text-2">
                                Message
                            </label>
                            <textarea name="msg" id="msg" maxlength="5000" rows="6" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12 mb-5">
                            <input type="submit" id="contactFormSubmit" value="Send Message"
                                class="btn btn-sm btn-danger btn-modern pull-right" data-loading-text="Loading...">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-5">

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">

                    <h4 class="text-primary"><strong>Corporate Office</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li>
                            <i class="fas fa-map-marker-alt top-6"></i>
                            <strong>Address:</strong>
                            {{ $contactData->corporate_office }}
                        </li>

                        <li>
                            <i class="fas fa-phone top-6"></i>
                            <strong>Telephont:</strong>
                            {{ $contactData->telephone }}
                        </li>

                        <li>
                            <i class="fas fa-fax top-6"></i>
                            <strong>Fax:</strong>
                            {{ $contactData->fax }}
                        </li>

                        <li>
                            <i class="fas fa fa-mobile top-6"></i>
                            <strong>Cell:</strong>
                            {{ $contactData->phone_two }} || {{ $contactData->phone_one }} (Hotline)
                        </li>

                        <li>
                            <i class="fas fa-envelope top-6"></i>
                            <strong>Email:</strong>
                            <span class="__cf_email__">
                                {{ $contactData->email_address }}
                            </span>
                        </li>
                    </ul>

                    <h4 class="text-primary mt-top-20"><strong>Registered Office</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li>
                            <i class="fas fa-map-marker-alt top-6"></i>
                            <strong>Address:</strong>
                            {{ $contactData->registered_office }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="googlemaps" class="google-map m-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14603.47599836642!2d90.4004934!3d23.7876788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf957d950e30337!2sTaseen%20Group!5e0!3m2!1sen!2sbd!4v1609837170661!5m2!1sen!2sbd"
            width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</div>

@endsection