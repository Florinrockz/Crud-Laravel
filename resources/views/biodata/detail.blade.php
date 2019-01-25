@extends('layouts.app')

@section('content')

    <div class="containe">
        <div class="row">
            <div class="col-md-12">
                <h3>Details</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>First Name: </strong>{{$biodata->first_name}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Last Name: </strong>{{$biodata->last_name}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Email: </strong>{{$biodata->email}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Phone: </strong>{{$biodata->phone}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Address: </strong>{{$biodata->address}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>City: </strong>{{$biodata->city}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Country: </strong>{{$biodata->country}}
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('biodata.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

@endsection