@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- If user is admin, show link to admin panel --}}
                    @if (auth()->user()->role === 0)
                        <a href="{{ route('admin.main.index') }}" class="btn btn-dark">Go to Admin Panel</a>
                    @endif
                        <a href="{{ route('main.index') }}" class="btn btn-primary">Go to Site</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
