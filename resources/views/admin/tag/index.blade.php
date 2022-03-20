@extends('admin.layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tags</h1>
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
        <p><a href="{{ route('admin.tag.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i> Add</a></p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $tag->title }}</td>
                    <td>
                        <a href="{{ route('admin.tag.show', $tag->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.tag.edit', $tag->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.tag.destroy', $tag->id) }}" method="post" style="display: inline-block;">
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
