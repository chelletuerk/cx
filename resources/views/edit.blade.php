@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the Survey</h1>

<form method="POST" action="/survey/{{ $survey->id }}">

	<div class="form-group">
		<textarea name="description" class="form-control">{{$survey->description }}</textarea>	
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update survey</button>
	</div>
{{ csrf_field() }}
</form>



</div>

@stop