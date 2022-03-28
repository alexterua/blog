@extends('layouts.main')

@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up" style="padding-top: 50px;">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $dateUpdated->format('M d, Y • h:i a') }} • {{ $post->category->title }} • {{ $post->comments->count() }} Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->image_main) }}" alt="{{ $post->title }}" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content  !!}
                    </div>
                </div>
                @auth()
                    <h3 class="text-center mb-3">Comments</h3>
                    @foreach($post->comments as $comment)
                        <div class="row">
                            <blockquote data-aos="fade-up">
                                <p>{{ $comment->message }}</p>
                                <footer class="blockquote-footer">{{ $comment->user->name }} | {{ $comment->getDateAsCarbon()->diffForHumans() }}</footer>
                            </blockquote>
                        </div>
                    @endforeach
                @endauth
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4 text-center" data-aos="fade-up">Related Posts</h2>
                            <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $relatedPost->image_preview) }}" alt="{{ $post->title }}" class="post-thumbnail" style="max-height: 200px">
                                    <p class="post-category">{{ $relatedPost->category->title }}</p>
                                    <a href="{{ route('post.show', $relatedPost->id) }}"><h5 class="post-title">{{ $relatedPost->title }}</h5></a>
                                </div>
                            @endforeach
                            </div>
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5 text-center" data-aos="fade-up">Leave a Comment</h2>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control" placeholder="Comment" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Send Comment" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
