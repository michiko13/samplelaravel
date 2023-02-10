@extends('layouts.master')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{ Auth::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">My Dashboard</li>
                        </ul>
                        <p>{{ $todayDate }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection