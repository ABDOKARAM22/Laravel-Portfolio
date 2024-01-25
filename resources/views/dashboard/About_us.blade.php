@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
About Us
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">About Us Page Settings</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">About us</li>
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
                <form id='about' action="{{ route('about.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($abouts as $about)
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $about->getTranslation('title', 'en') }}">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="title_ar">Title (Arabic)</label>
                            <input type="text" class="form-control" id="title_ar" name="title_ar" value="{{ $about->getTranslation('title', 'ar') }}">
                            @error('title_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description" form="about" rows="8">{{ $about->getTranslation('description', 'en') }}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="description_ar">Description (Arabic) </label>
                            <textarea id="description_ar" class="form-control" name="description_ar" form="about" rows="8">{{ $about->getTranslation('description', 'ar') }}</textarea>
                            @error('description_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ $about->image }}"> 
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
                    @endforeach
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection

@section('js')

@endsection

