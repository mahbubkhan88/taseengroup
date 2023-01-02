<section class="section bg-color-white-scale-1 section-height-3 border-0 m-0 testimonial-area">
    <div class="container pb-2">
        <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-12">
                <div class="recent-posts mb-5">
                    <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Client
                            Feedback</strong>
                    </h2>

                    <div class="owl-carousel owl-theme dots-title mb-0"
                        data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
                        <div class="row">
                            @foreach($clientFeedback as $data)
                            <div class="col-lg-4">
                                <div class="testimonial testimonial-primary min-height blockquote">
                                    <p class="mb-0 testimonial-font">{!! $data->comment !!}</p>
                                    <hr />
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="{{ (!empty('uploads/client_feedback_images/'.$data->image)) ? url('uploads/client_feedback_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                                                class="rounded-circle" alt="{{ $data->client_name }}" />
                                        </div>
                                        <p><strong> {{ $data->client_name }} </strong><span> {{ $data->designation }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>