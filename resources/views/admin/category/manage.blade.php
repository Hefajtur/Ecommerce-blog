@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="row pt-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span class="h3 lh-base">Manage Category</span>
                    <span class="float-end"><a href="{{route('add-category')}}" class="btn btn-primary">Add new</a></span>

                </div>
                <div class="card-body">
                    <p class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</p>
                    <table class="table table-striped" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status ==1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-primary btn-sm">
                                        edit
                                    </a>

                                    <a href="{{route('delete-category',['id'=>$category->id])}}" onclick="return confirm('Are you sure to delete this category')" class="btn btn-danger btn-sm">
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
