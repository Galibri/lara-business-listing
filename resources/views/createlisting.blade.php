@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Listing <span class="float-right"><a href="/dashboard" class="btn btn-info btn-sm">Dashboard</a></span></div>
                <div class="card-body">
                    <form method="POST" action="{{route('listings.store')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Company Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="Company Address">
                        </div>
                        <div class="form-group">
                            <input type="url" name="website" class="form-control" value="{{old('website')}}" placeholder="Company Website">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Company Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="bio" id="" cols="30" rows="5" class="form-control" placeholder="Bio">{{old('bio')}}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Save Listing</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection