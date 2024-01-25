@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Add Team
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Add a Member To The Team</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Add team</li>
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

                <h5 class="card-title"></h5>
                <form id='team' action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                            @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name_ar">First Name (Arabic)</label>
                            <input type="text" class="form-control" id="first_name_ar" name="first_name_ar" value="{{ old('first_name_ar') }}">
                            @error('first_name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name_ar">Last Name (Arabic)</label>
                            <input type="text" class="form-control" id="last_name_ar" name="last_name_ar" value="{{ old('last_name_ar') }}">
                            @error('last_name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title') }}">
                        @error('job_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="job_title_ar">Job Title (Arabic)</label>
                        <input type="text" class="form-control" id="job_title_ar" name="job_title_ar" value="{{ old('job_title_ar') }}">
                        @error('job_title_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Personal Picture</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
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
                    <input type="submit" value="Add" name="add" class="form-control btn-secondary">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection

@section('js')

@endsection
