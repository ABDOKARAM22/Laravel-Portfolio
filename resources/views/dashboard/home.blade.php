@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Home settings
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Home page settings</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                
                <h5 class="card-title">Edit The Home Page Cover</h5>
                <div class="Home-form">
            <form id='home' action="{{ route('home.save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image" >Image</label>
                    <input type="file" class="form-control" id="image" name="image"> 
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <div class="form-group">
                        <input type="submit" value="Edit" name="Edit" class="form-control btn-secondary">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
</div>

<!-- row closed -->
@endsection

@section('js')

@endsection
