@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Your Listings <span class="float-right"><a href="{{route('listings.create')}}" class="btn btn-info btn-sm">Add Listing</a></span></div>

                <div class="card-body">
                @if(count($listings))
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td>{{$listing->email}}</td>
                                <td>{{$listing->phone}}</td>
                                <td><a href="{{route('listings.edit', $listing->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <span class="d-inline-block">
                                    <form action="{{route('listings.destroy', $listing->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure to delete?')">Delete</button>
                                    </form>
                                </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
