@extends('profile.layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Comment</h1>
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
        <form action="{{ route('profile.comment.update', $comment->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3 w-75">
                <label for="summernote" class="form-label">Message</label>
                <textarea type="text" name="message" class="form-control" id="summernote" placeholder="Message">{{ $comment->message }}</textarea>
                @error('message')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('profile.comment.index') }}" class="btn btn-light float-right">Back</a>
        </form>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection

