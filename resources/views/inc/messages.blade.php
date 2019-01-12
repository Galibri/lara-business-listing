@if(count($errors))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            </div>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-error" role="alert">
                    {{session('error')}}
                </div>
            </div>
        </div>
    </div>
@endif