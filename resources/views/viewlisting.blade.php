@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Company Info <span class="float-right"><a href="/" class="btn btn-success btn-sm">Go Back</a></span></div>

                <div class="card-body">
                @if($listing)
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Company Name</td>
                                <td>{{$listing->name}}</td>
                            </tr>
                            <tr>
                                <td>Company Email</td>
                                <td>{{$listing->email}}</td>
                            </tr>
                            <tr>
                                <td>Company Phone</td>
                                <td>{{$listing->phone}}</td>
                            </tr>
                            <tr>
                                <td>Company Address</td>
                                <td>{{$listing->address}}</td>
                            </tr>
                            @if($listing->website)
                            <tr>
                                <td>Company Website</td>
                                <td><a href="{{$listing->website}}" target="_blank">Visit Website</a></td>
                            </tr>
                            @endif
                            <tr>
                                <td>Company Bio</td>
                                <td>{{$listing->bio}}</td>
                            </tr>
                        </tbody>
                    </table>
                @else
                    <p>No data found</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
