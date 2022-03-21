@extends('admin.layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 w-25">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title' ?: '') }}">
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-75">
                <label for="summernote" class="form-label">Content</label>
                <textarea type="text" name="content" class="form-control" id="summernote" placeholder="Content">{{ old('content' ?: '') }}</textarea>
                @error('content')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 w-50">
                <div class="form-group">
                    <label for="image_preview">Image Preview</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image_preview" class="custom-file-input" id="image_preview">
                            <label class="custom-file-label" for="image_preview">Choose image Preview</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    @error('image_preview')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 w-50">
                <div class="form-group">
                    <label for="image_main">Image Main</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image_main" class="custom-file-input" id="image_main">
                            <label class="custom-file-label" for="image_main">Choose image Main</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    @error('image_main')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
