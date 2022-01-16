@extends('home_layout')
@section('content')
<main class="main">

    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Tin Tức</a></li>

            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            {{-- <nav class="blog-nav">
                <ul class="menu-cat entry-filter justify-content-center">
                    <li class="active"><a href="#" data-filter="*">All Blog Posts<span>9</span></a></li>
                    <li><a href="#" data-filter=".lifestyle">Lifestyle<span>3</span></a></li>
                    <li><a href="#" data-filter=".shopping">Shopping<span>1</span></a></li>
                    <li><a href="#" data-filter=".fashion">Fashion<span>2</span></a></li>
                    <li><a href="#" data-filter=".travel">Travel<span>4</span></a></li>
                    <li><a href="#" data-filter=".hobbies">Hobbies<span>2</span></a></li>
                </ul><!-- End .blog-menu -->
            </nav><!-- End .blog-nav --> --}}
            <div class="entry-container" data-layout="fitRows">
                @foreach ($blog as $bl)
                <div class="entry-item shopping col-sm-6 col-lg-4">`
                    <article class="entry entry-mask">
                        <figure class="entry-media">
                            <a href="{{URL::to('/show-detail-blog/'.$bl->blog_id)}}">
                                <img style="width: 100%;height: 400px;" src="public/upload/product/{{ $bl->blog_thumnail }}">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">{{$bl->date_public}}</a>

                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="{{URL::to('/show-detail-blog/'.$bl->blog_id)}}">{{ $bl->blog_title }}.</a>
                            </h2><!-- End .entry-title -->


                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .entry-item -->
                @endforeach
            </div>


            <div class="mb-3"></div><!-- End .mb-3 -->

            <nav aria-label="Page navigation">
                {{$blog->links()}}
            </nav>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main>
@endsection
