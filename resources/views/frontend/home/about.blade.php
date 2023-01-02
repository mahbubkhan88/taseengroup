<div class="container mb-5 pb-4">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2"><strong class="font-weight-extra-bold">Who We
                        Are</strong></h2>

                <p class="lead"> {{ $aboutData->sub_title }} </p>

                <p class="text-justify">

                    {!! substr($aboutData->description, 0, 501) !!}...

                    <a href="{{ route('CompanyProfilePage') }}"
                        class="btn btn-outline btn-primary btn-xs mb-2 text-1">Read
                        More</a>
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4" style="top: 1.7rem;">
                <!-- Image -->
                <img src="{{ (!empty('uploads/about_images/'.$aboutData->image)) ? url('uploads/about_images/'.$aboutData->image) : url('uploads/no_image.jpg') }}"
                    class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn"
                    data-appear-animation-delay="600" alt="About Image" />
                <!-- Image -->
            </div>
        </div>
    </div>
</div>