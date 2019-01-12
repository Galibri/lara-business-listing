@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">All Listings</div>

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
                                <td><a href="{{route('listings.show', $listing->id)}}" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No Listings Found</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
