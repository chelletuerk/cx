@extends('layouts.app')

@section('content')
<div class="container">
                <h2>Add New Survey</h2>
               
<form method="POST" action="/survey">

    <div class="form-group">
        <textarea name="description" class="form-control"></textarea>  
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Survey</button>
    </div>
{{ csrf_field() }}
</form>


</div>
@endsection