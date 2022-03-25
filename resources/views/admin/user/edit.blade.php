@extends('admin.layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">AdminPanel</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Users</a></li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('admin.user.update', $user->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $user->email }}">
                @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>
            <div class="mb-3 w-50">
                <!-- select -->
                <div class="form-group">
                    <label>Select Role</label>
                    <select name="role" class="form-control">
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}"
                                {{ $user->role == $id ? 'selected' : '' }}
                            >{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.user.index') }}" class="btn btn-light float-right">Back</a>
        </form>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
