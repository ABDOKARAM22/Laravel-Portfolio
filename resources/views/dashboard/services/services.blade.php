@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Services
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">View All Services</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Services</li>
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
                
                <h5 class="card-title">Services List</h5>
                
                <div class="services-table">
                <table class="table">
                    <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Services Name</th>
                                <th>Description</th>
                                <th>Edit / Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                
                                <td> 
                                    <div class="icon"><i class='{{$service->icon}}'></i></div>
                                </td>
                                <td> {{$service->gettranslation('name','en')}}</td>
                                <td> {{$service->gettranslation('description','en')}}</td>
                                <td>
                                    <a href="{{ route('services.edit', ['service' => $service->id]) }}" class="edit" title="Edit" data-toggle="tooltip">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    /
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this service?')">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection

@section('js')

@endsection
