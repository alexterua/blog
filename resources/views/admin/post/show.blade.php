@extends('admin.layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $post->title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">AdminPanel</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Posts</a></li>
                    <li class="breadcrumb-item active">Current Post</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
                <img src="{{ url('storage/' . $post->image_main) }}" class="card-img-top" alt="Main image">
            <div class="card-body">
                <p class="card-text">{{ Str::of($post->content)->toHtmlString()}}</p>
            </div>
        </div>

        <a href="{{ route('admin.post.index') }}" class="btn btn-light">Back</a>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection

