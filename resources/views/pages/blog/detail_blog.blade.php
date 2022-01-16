@extends('home_layout')
@section('content')
<main class="main">

    <div class="page-content container">

        <div class="container">
           <!-- End .entry -->
           {!!$blog->blog_desc!!}
           <!-- End .pager-nav -->

            <div class="related-posts mt-3">
                <h3 class="title">Bài viết liên quan</h3><!-- End .title -->

                <div class="owl-carousel owl-simple" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":1
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    @foreach ($related_blog as $key =>$re)


                    <article class="entry entry-grid">
                        <figure class="entry-media">
                            <a href="{{URL::to('/show-detail-blog/'.$re->blog_id)}}">
                                <img src="{{asset('public/upload/product/'.$re->blog_thumnail)}}">
                            </a>
                        </figure><!-- End .entry-media -->
                        <div class="entry-body">

                            <div class="entry-meta">
                                <a href="#">{{$re->date_public}}</a>

                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="">{{$re->blog_title}}</a>
                            </h2><!-- End .entry-title -->

                            <!-- End .entry-cats -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                    @endforeach
                  <!-- End .entry -->
                </div><!-- End .owl-carousel -->
            </div><!-- End .related-posts -->

          <!-- End .comments -->
           <!-- End .reply -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main>
@endsection
