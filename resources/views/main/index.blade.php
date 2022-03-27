@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" style="margin-bottom: 75px;">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ url('storage/' . $post->image_preview) }}" alt="{{ $post->title }}">
                            </div>
                            <p class="blog-post-category">{{ $post->category->title }}</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mb-5">
                    <div class="m-auto">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ url('storage/' . $post->image_preview) }}" alt="{{ $post->title }}">
                                    </div>
                                    <p class="blog-post-category">{{ $post->category->title }}</p>
                                    <a href="#!" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Random Posts</h5>
                        <div class="post-carousel">
                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselId" data-slide-to="1"></li>
                                    <li data-target="#carouselId" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    @foreach($lastUpdatedPosts as $lastUpdatedPost)
                                        <figure class="carousel-item {{ ($loop->iteration === 1) ? 'active' : '' }} ">
                                            <img src="{{ url('storage/' . $lastUpdatedPost->image_preview) }}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="#!">{{ $lastUpdatedPost->title }}</a>
                                            </figcaption>
                                        </figure>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Popular Posts</h5>
                        <ul class="post-list">
                            @foreach($likedPosts as $post)
                                <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ url('storage/' . $post->image_preview) }}" alt="{{ $post->title }}">
                                    <div class="media-body">
                                        <h6 class="post-title">{{ $post->title }}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
