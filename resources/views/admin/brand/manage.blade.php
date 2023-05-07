@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <div class="row pt-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Manage Brand</span>
                    <span class="float-end"><a href="{{route('add-brand')}}" class="btn btn-primary">Add brand</a></span>

                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <table class="table table-striped" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand Name</th>
                            <th>Brand Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->status ==1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-primary btn-sm">
                                        edit
                                    </a>

                                    <a href="{{route('delete-category',['id'=>$brand->id])}}" onclick="return confirm('Are you sure to delete this category')" class="btn btn-danger btn-sm">
                                        delete
                                    </a>
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

