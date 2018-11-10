@extends('admin.master')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Show Category</h3>
                <h2 class="text-center text-success">{{Session::get('message')}}</h2>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->categoryName}}</td>
                            <td>{!! $category->categoryDescription !!}</td>
                            <td>{{$category->publicationStatus == 1? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{'/category/edit/'.$category->id}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{'/category/delete/'.$category->id}}" class="btn btn-danger" onclick="return confirm('Are you want to delete this');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection