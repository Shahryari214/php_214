<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Models\User;
use App\Models\product;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(product $product)
    {
        $this->middleware('auth');
        $this->product = $product;
        $user = Auth::user();
        
    }

    public function index(product $product)
    {   
        $user = Auth::user();
        if($user->can('view',$product))
        {
            $products = $this->product->all();
            return view('products.index', compact('products'));
        }
            else{
                return "شما به این بخش دسترسی ندارید";
        }


        //$products = $this->student->all();
        // return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(product $product)
    {
        $user = Auth::user();
        if($user->can('create',$product))
        {
            return view('products.create');
        }
            else{
                return "شما به این بخش دسترسی ندارید";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->product->create([
            'title' => $request['title'],
            'content' => $request['content'],
            'price' => $request['price'],
            'size' => $request['size'],
            'IDproduct' => $request['IDproduct'],
            'numvisit' => '0',
            'numbuy' => '0',
            'insertdate' => '2018-12-09 14:33:57',
            'image' => $request['image'], 
            'subcategory_id'=> $request['subcategory_id'] ,
            'active'=> '1',
            'description'=> 'توضیح',
        ])){
            return "ok";
        }
            else{
                return "no";
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(product $product,$id)
    {
        $user = Auth::user();
        if($user->can('show',$product))
        {

           $product = $this->product->find($id);
           return view('products.show', compact('product')); 
        }
            else{
                return "شما به این بخش دسترسی ندارید";
        }
        
        // $product = $this->product->find($id);
        // return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product,$id)
    {
        $user = Auth::user();

        if($user->can('update',$product))
        {
           
            if ($products=$this->product->find($id)) {
            return view('products.edit', compact('products'));
            }
        }
            else{
                return "شما به این بخش دسترسی ندارید";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump($request);
       $product = $this->product->find($id);
        $product->title = $request->input('title');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->size = $request->input('size');
        $product->IDproduct = $request->input('IDproduct');
        $product->numvisit = '0';
        $product->numbuy = '0';
        $product->insertdate = '2018-12-09 14:33:57';
        $product->image = $request->input('image');
        $product->subcategory_id = $request->input('subcategory_id');
        $product->active = '1';
        $product->description = 'توضیحات';
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        $user = Auth::user();
        if($user->can('delete',$product))
        {
           
            if ($this->product->find($id)->delete()) {
             return view('products.destroy');
             }
        }
            else{
                return "شما به این بخش دسترسی ندارید";
        }
    }
}
