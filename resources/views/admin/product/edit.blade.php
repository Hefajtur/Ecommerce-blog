@extends('admin.master')

@section('title')
    edit Product
@endsection

@section('body')
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base ">Edit Product</span>

                </div>
                <div class="card-body">

                    <form action="{{route('update-product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" selected disabled>--Select a Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"{{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" selected disabled>--Select a Brand--</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}"{{$brand->id == $product->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$product->name}}"/>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="number" name="price" class="form-control" value="{{$product->price}}" />
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control"  />
                                <img src="{{asset($product->image)}}" alt="" style="height: 50px">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Product Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="description" cols="15" rows="5" class="form-control">{{$product->description}}</textarea>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}> Published</label>
                                <label for=""><input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}> Unpublished</label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-primary" value="Update Product" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


