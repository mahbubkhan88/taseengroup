<div class="container pt-5">
    <div class="row py-4 mb-2">
        <div class="col-md-7 order-2">
            <div class="overflow-hidden">
                <h2 class="font-weight-normal text-7">
                    <strong class="font-weight-extra-bold">Corporate Profile of Taseen Group</strong>
                </h2>
            </div>

            <p class="text-justify">
                {!! $profileData->home_description !!}
            </p>
            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="900" />
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1000">
                <div class="col-lg-6">
                    <a href="{{ route('CompanyProfilePage') }}" class="btn btn-modern btn-primary mt-3">READ MORE</a>
                </div>
            </div>
        </div>
        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">

            <iframe width="100%" height="315" src="{{ $profileData->video_link }}" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>

        </div>
    </div>
</div>