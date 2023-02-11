@extends('app')

@section('index')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0 pt-1">
                <x-menu-list />
            </div>
            <div class="col-lg-10">
                <div class="main-box mb-2 p-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endsection
