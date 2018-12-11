

@extends('layouts.app')
@section('content')
<div class="container">
 <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>عنوان محصول</th>
			        <!-- <th>توضیحات</th> -->
			        <th>قیمت</th>
			        <!-- <th>حجم محصول</th> -->
			        <!-- <th>شناسه</th>
			        <th>تعداد بازدیدها</th>
			        <th>تعداد خرید</th>
			        <th>تاریخ درج</th>
			        <th>تاریخ درح</th> -->
			        <th>انتشار</th>
			        <th>عملیات</th>
			      </tr>
			    </thead>
			    <tbody>
@foreach($products as $product)

			     <tr>
			        <td> {{ $product->title }} </td>
			        <!-- <td> {{ $product->content }} </td> -->
			        <td> {{ $product->price }} </td>
			        <!-- <td> {{ $product->size }} </td>
			        <td> {{ $product->IDproduct }} </td>
			        <td> {{ $product->numvisit }} </td>
			        <td> {{ $product->numbuy }} </td>
			        <td> {{ $product->insertdate }} </td>
			        <td> {{ $product->subcategory_id }} </td>-->
			        <td> {{ $product->active }} </td>
			        <td>
			        	<a href={{route('products.show', ['id' => $product->id])}}>
				            <button type="button" class="btn btn-default">جزییات</button>
				        </a>

				        <a href={{route('products.edit', ['id' => $product->id])}}>
				           <button type="button" class="btn btn-primary">ویرایش</button>
				        </a> 
				        {!! Form::open(array('route' => array('products.delete', $product->id),'method'=>'delete'))!!}
					       
					           <button type="submit" class="btn btn-danger">حذف</button>
					       
				        {!! Form::close() !!} 	       
					</td> 
				        <!-- <a href={{route('products.delete', ['id' => $product->id])}}>
				        	{{ Form::open(array('url' => 'foo/bar')) }}
				            	<button type="button" class="btn btn-danger">حذف</button>
				            {{ Form::close() }}
				        </a> -->

				        <!-- <a href={{route('products.delete', ['id' => $product->id])}}>
				            <button type="button" class="btn btn-danger">حذف</button>
				        </a> -->  	
			        </td>
			      </tr>
			   
@endforeach
 </tbody>
			  </table>
			  </div>

@endsection

