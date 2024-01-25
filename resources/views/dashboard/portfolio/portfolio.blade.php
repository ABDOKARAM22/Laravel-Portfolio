@extends('dashboard.layouts.app')

@section('css')

@endsection

@section('title')
Portfolio
@endsection

@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">View Portfolio List</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Dashboard</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
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
                
                <h5 class="card-title">Portfolio List</h5>
                
                <div class="portfolio-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Edit / Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td><img height="70" width="70" src="{{asset('assets/img/portfolio/'.$portfolio->image)}}" alt="Faild To opene"></td>
                                <td> {{$portfolio->getTranslation('name','en')}}</td>
                                <td> {{$portfolio->getTranslation('description','en')}}</td>
                                <td>
                                    <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id]) }}" class="edit" title="Edit" data-toggle="tooltip">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    /
                                    <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display: inline;">
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
<!-- row closed-->
@endsection

@section('js')

@endsection
