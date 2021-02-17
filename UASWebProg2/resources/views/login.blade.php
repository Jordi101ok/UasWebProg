@extends('masterUser')

@section('content')
    
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Username" id="input1" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Password" id="input2" aria-label="Password" aria-describedby="basic-addon1">
</div>
<a href="/insertUser"><button type="button" class="btn btn-primary">Submit</button></a>

@endsection