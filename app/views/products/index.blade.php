@extends('layouts.master')

@section('content')
	<div class="row product-list">
	@foreach ($products as $product)
			{{ $product->name }}
	@endforeach
	</div>
@stop
