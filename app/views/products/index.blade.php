@extends('layouts.master')

@section('content')
	<div class="row product-list">
	@foreach ($products as $product)
		<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
				<img src="holder.js/100x100" alt="">
				{{ $product->name }}
			</div>
		</div>
	@endforeach
	</div>
@stop
