@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>List Biodata</h3>

            </div>
            <div class="col-sm-2">
                <a href="{{ route('biodata.create') }}" class="btn btn-sm btn-success">Create</a>
            </div>
        </div>

        @if($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-hover table-sm">
            <tr>
                <th width="20"><b>ID</b></th>
                <th width="150"><b>First Name</b></th>
                <th width="150"><b>Last Name</b></th>
                <th width="150"><b>Email</b></th>
                <th width="150"><b>Phone</b></th>
                <th width="200"><b>Address</b></th>
                <th width="150"><b>City</b></th>
                <th width="150"><b>Country</b></th>
                <th width="150"><b>Actions</b></th>
            </tr>
            @foreach($biodatas as $biodata)
                <tr>
                    <td>{{$biodata->id}}</td>
                    <td>{{$biodata->first_name}}</td>
                    <td>{{$biodata->last_name}}</td>
                    <td>{{$biodata->email}}</td>
                    <td>{{$biodata->phone}}</td>
                    <td>{{$biodata->address}}</td>
                    <td>{{$biodata->city}}</td>
                    <td>{{$biodata->country}}</td>
                    <td align="center">
                        <form action="{{ route('biodata.destroy',$biodata->id) }}"  method="post">
                            <a class="btn btn-sm btn-success" href="{{route('biodata.show',$biodata->id)}}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{route('biodata.edit',$biodata->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $biodatas->links() !!}
    </div>

@endsection