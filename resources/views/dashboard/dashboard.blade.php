@extends('dashboard.layouts.app')

@section('css')
<link href="{{ URL::asset('assets/dashboard/assets/css/pages/index_page.css') }}" rel="stylesheet">
@endsection

@section('title')
Dashboard
@endsection

@section('page-header')
@endsection

@section('content')
<!-- row -->
<div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics">
                <div class="card-body">
                    <h1 class="welcome-message">Welcome To Your Dashboard</h1>
                </div>
            </div>
        </div>
</div>
<!-- row closed -->
@endsection

@section('js')

@endsection
