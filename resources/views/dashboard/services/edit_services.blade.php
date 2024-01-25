@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Edit Services
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Modifying The Service</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Services</li>
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
                <form id='Services' action="{{route('services.update',['service'=>$services->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Service Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $services->getTranslation('name', 'en') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name_ar">Service Name (Arabic)</label>
                            <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ $services->getTranslation('name', 'ar') }}">
                            @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    

                    <div class="form-group">
                        <label for="icone">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon" value="{{ $services->icon }}">
                        @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
            

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" form="Services" rows="4">{{ $services->getTranslation('description', 'en') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description_ar">Description (Arabic)</label>
                        <textarea id="description_ar" class="form-control" name="description_ar" form="Services" rows="4">{{ $services->getTranslation('description', 'ar') }}</textarea>
                        @error('description_ar')
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
<!-- row closed -->
@endsection

@section('js')

@endsection
