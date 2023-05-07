@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <div class="row pt-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Manage Product</span>
                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <table class="table table-striped" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th> Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                               <td>{!! \Illuminate\Support\Str::words($product->description,7,'....') !!}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" style="height: 60px">
                                </td>
                                <td>{{$product->status ==1 ? 'Published' : 'Unpublished'}}</td>

                                <td class="w-50">
                                    <a href="{{route('edit-product',['id'=> $product->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{route('delete-product',['id'=> $product->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

