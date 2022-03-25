@extends('profile.layouts.main')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($likedPosts as $likedPost)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $likedPost->title }}</td>
                    <td>
                        <a href="{{ route('admin.post.show', $likedPost->id) }}" class="btn btn-info"><i class="fas fa-thumbs-up"></i></a>
                        <form action="{{ route('admin.post.destroy', $likedPost->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-thumbs-down"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
