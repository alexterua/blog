@extends('admin.layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User Profile</h1>
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

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">User Name: {{ $user->name }}</h5>
                <br>
                <h6 class="card-title">Email: {{ $user->email }}</h6>
                <br>
                @foreach($roles as $id => $role)
                    @if($id == $user->role)
                        <h6 class="card-title">Role: {{ $role }}</h6>
                    @endif
                @endforeach
            </div>
        </div>

        <a href="{{ route('admin.user.index') }}" class="btn btn-light">Back</a>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
