@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Contact us
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Contact Us Page Settings</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Contact us</li>
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

                <h5 class="card-title">Contact Us Information</h5>
                <form id='Contact' action="{{route('contact.update',['contact'=>'1'])}}" method="POST">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="email" id="Email" value="{{$contact->email}}">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{$contact->getTranslation('location','en')}}">
                            @error('location')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror    
                        </div>
                        <div class="form-group">
                            <label for="location_ar">Location (Arabic)</label>
                            <input type="text" class="form-control" id="location_ar" name="location_ar" value="{{$contact->getTranslation('location','ar')}}">
                            @error('location_ar')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror    
                        </div>
                        
                        <div class="form-group">
                            <label for="behance">Behance Link</label>
                            <input type="text" class="form-control" id="behance" name="behance" value="{{$contact->behance}}">
                            @error('behance')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror    
                        </div>
                        
                        <div class="form-group">
                            <label for="facebook">Facebook Link</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="{{$contact->facebook}}">
                            @error('facebook')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror    
                        </div>
                        
                        <div class="form-group">
                            <label for="instegram">Instegram Link</label>
                            <input type="text" class="form-control" id="instegram" name="instegram" value="{{$contact->instegram}}">
                            @error('instegram')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror    
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter Link</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" value="{{$contact->twitter}}">
                            @error('twitter')
                            <div class="alert alert-danger">{{$message}}</div>
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
