@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Biodata</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                Something went wrong!<br>
                <ul>
                    @foreach($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('biodata.update',$biodata->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="{{$biodata->first_name}}" id="first_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="{{$biodata->last_name}}" id="last_name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" value="{{$biodata->email}}" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" name="phone" value="{{$biodata->phone}}" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" value="{{$biodata->address}}" id="address">
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city" value="{{$biodata->city}}" id="city">
                    </div>
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" class="form-control" name="country" value="{{$biodata->country}}" id="country">
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-sm btn-success" type="submit">Update</button>
                    <a href="{{route('biodata.index')}}" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
        </form>

    </div>
@endsection