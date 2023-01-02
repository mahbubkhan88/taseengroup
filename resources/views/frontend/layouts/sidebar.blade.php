<aside class="sidebar">
    <form action="#" method="get">
        <div class="input-group mb-3 pb-1"> <input class="form-control text-1" placeholder="Search..." name="s" id="s"
                type="text"> <span class="input-group-append"> <button type="submit" class="btn btn-dark text-1 p-2"><i
                        class="fas fa-search m-2"></i></button> </span>
        </div>
    </form>
    <h5 class="font-weight-bold pt-4">Categories</h5>
    <ul class="nav nav-list flex-column mb-5">
        @foreach($blogCategory as $category)
        <li class="nav-item"><a class="nav-link"
                href="{{ route('NewsEventsCategoryPage', $category->slug) }}">{{ $category->name}}</a>
        </li>
        @endforeach
    </ul>
    <div class="tabs tabs-dark mb-4 pb-2">
        <h5 class="font-weight-bold pt-4">Recent Posts</h5>
        <div class="tab-pane" id="recentPosts">
            <ul class="simple-post-list">
                @foreach($recentBlog as $blog)
                <li>
                    <div class="post-image">
                        <div class="img-thumbnail img-thumbnail-no-borders d-block"> <a
                                href="{{ route('NewsEventsDetailsPage', $blog->slug) }}">
                                <img class="details-blog-img"
                                    src="{{ (!empty('uploads/blog_images/'.$blog->image)) ? url('uploads/blog_images/'.$blog->image) : url('uploads/no_image.jpg') }}"
                                    alt="{{ $blog->title }}"></a>
                        </div>
                    </div>
                    <div class="post-info">
                        <a href="{{ route('NewsEventsDetailsPage', $blog->slug) }}">{{ $blog->title }}</a>
                        <div class="post-meta"> {{ $blog->created_at->diffForHumans() }}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <h5 class="font-weight-bold pt-4 mb-2">Tags</h5>
    <div class="mb-3 pb-1">

        @foreach($blogTag as $tag)
        <a href="{{ route('NewsEventsTagPage', [$tag->slug]) }}">
            <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1 mr-1">
                {{ $tag->name }} ({{ $tag->posts->count() }})
            </span>
        </a>
        @endforeach

    </div>
</aside>