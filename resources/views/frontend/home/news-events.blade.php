<div class="container py-4">
    <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">News & Events</strong></h2>
    <div class="row">
        <div class="col">
            <div class="blog-posts">
                <div class="row">

                    @foreach($blogData as $data)
                    <div class="col-md-4 col-lg-3">
                        <article class="post post-medium border-0 pb-0 mb-5">
                            <div class="post-image">
                                <a href="{{ route('NewsEventsDetailsPage', $data->slug) }}">
                                    <img src="{{ (!empty('uploads/blog_images/'.$data->image)) ? url('uploads/blog_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                                        class="blog-imgs img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                        alt="{{ $data->title }}" />
                                </a>
                            </div>
                            <div class="post-content">
                                <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                        href="{{ route('NewsEventsDetailsPage', $data->slug) }}"> {{ $data->title }}
                                    </a>
                                </h2>
                                <p>{!! substr($data->description, 0, 120) !!}.</p>
                                <div class="post-meta">
                                    <span class="d-block mt-2"><a
                                            href="{{ route('NewsEventsDetailsPage', $data->slug) }}"
                                            class="btn btn-xs btn-success text-uppercase">Read More</a></span>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>