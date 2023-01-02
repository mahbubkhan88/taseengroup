@php
$footerData = App\Models\SettingModel::find(1);
@endphp

<footer id="footer">
    <div class="container">
        <div class="footer-ribbon"> <span>Get in Touch</span> </div>
        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-3 mb-3">About Taseen Group</h5>

                <p class="pr-1">
                    {!! $footerData->description !!}
                </p>

                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">

                    <li class="social-icons-facebook facebook-icon">
                        <a href="{{ $footerData->facebook_link }}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li class="social-icons-linkedin linkedin-icon">
                        <a href="{{ $footerData->linkedin_link }}" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>

                    <li class="social-icons-youtube youtube-icon">
                        <a href="{{ $footerData->youtube_link }}" target="_blank" title="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>

                    <li class="social-icons-instagram instagram-icon">
                        <a href="{{ $footerData->instagram_link }}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-md-6 col-lg-3">
                <h5 class="text-3 mb-3">Latest Links</h5>

                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                    <a class="nav-link" href="contact-us.html">
                        <i class="fas fa-angle-right"></i>
                        Maisarah Events
                    </a>
                </li>

                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                    <a class="nav-link" href="contact-us.html">
                        <i class="fas fa-angle-right"></i>
                        Mumtahina Catering</a>
                </li>

                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                    <a class="nav-link" href="contact-us.html">
                        <i class="fas fa-angle-right"></i>
                        Taseen Engineering
                    </a>
                </li>

                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                    <a class="nav-link" href="contact-us.html">
                        <i class="fas fa-angle-right"></i>
                        Safety Need BD
                    </a>
                </li>

                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                    <a class="nav-link" href="contact-us.html">
                        <i class="fas fa-angle-right"></i>
                        TSN Field Services Inc
                    </a>
                </li>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">Get In Tuch</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1">
                            <i class="fab  fas fa-phone text-color-primary"></i>
                            <p class="m-0">
                                <a href="tel:06909889911">
                                    Tel: {{ $footerData->telephone }},
                                    Fax: {{ $footerData->fax }}
                                </a>
                            </p>
                            <p class="m-0">
                                Cell: {{ $footerData->phone_two }},
                                {{ $footerData->phone_one }} (Hotline)
                            </p>
                        </li>

                        <li class="mb-1">
                            <i class="far fas fa-envelope text-color-primary"></i>
                            <p class="m-0">
                                {{ $footerData->email_address }}
                            </p>
                        </li>

                        <li class="mb-1">
                            <i class="far fas fa-dot-circle text-color-primary"></i>
                            <p class="m-0">
                                <strong>Corporate Office:</strong>
                                {{ $footerData->corporate_office }}
                            </p>
                        </li>

                        <li class="mb-1">
                            <i class="far fas fa-dot-circle text-color-primary"></i>
                            <p class="m-0"> <strong>Registered Office:</strong>
                                {{ $footerData->registered_office }}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">Location Map</h5>
                    <div id="googlemaps" class="google-map.small m-0 google-map-footer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14603.47599836642!2d90.4004934!3d23.7876788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf957d950e30337!2sTaseen%20Group!5e0!3m2!1sen!2sbd!4v1609837170661!5m2!1sen!2sbd"
                            width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0" nonce="O2LEqsiK">
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p style="color: #fff"> {{ $footerData->footer_copyright }} </p>
                </div>
            </div>
        </div>
    </div>
</footer>