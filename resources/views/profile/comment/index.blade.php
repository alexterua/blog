@extends('profile.layouts.main')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Message</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $comment->message }}</td>
                    <td>
                        <a href="{{ route('profile.comment.edit', $comment->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('profile.comment.destroy', $comment->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
