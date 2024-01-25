@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Add Portfolio
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Add To Portfolio</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Add To Portfolio</li>
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
                <form id='portfolio' action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name_ar">Name (Arabic)</label>
                        <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ old('name_ar') }}">
                        @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" form="portfolio" rows="4">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description_ar">Description (Arabic)</label>
                        <textarea id="description_ar" class="form-control" name="description_ar" form="portfolio" rows="4">{{ old('description_ar') }}</textarea>
                        @error('description_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
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
