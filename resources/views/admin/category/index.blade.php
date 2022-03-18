@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h2 class="text-center">Categories</h2>
        <p><a href="{{ route('admin.category.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i> Add</a></p>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
