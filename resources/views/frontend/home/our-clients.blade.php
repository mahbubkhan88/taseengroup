<hr class="solid my-4" />
<div class="row text-center pt-4">
    <div class="col">
        <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Our Happy Clients
            </strong></h2>
    </div>
</div>
<div class="row text-center mt-5 mb-80">
    <div class="owl-carousel owl-theme carousel-center-active-item"
        data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">

        @foreach($clientData as $data)
        <div>
            <img class="img-our-client"
                src="{{ (!empty('uploads/client_images/'.$data->logo)) ? url('uploads/client_images/'.$data->logo) : url('uploads/no_image.jpg') }}"
                alt="{{ $data->name }}" />
        </div>
        @endforeach

    </div>
</div>