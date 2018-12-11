



@extends('layouts.app')
@section('content')
	<div class="container">
		<h1>{{ $product->title}}</h1>
		<a href="{{route('products.index')}}">BACK</a>
	</div>
@endsection






