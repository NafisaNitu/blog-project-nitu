@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Manage Category</h4>
                        </div>
                        <div class="card-body">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <img src="{{ asset($category->category_image) }}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('change-status', ['id' => $category->id]) }}" class="btn btn-{{ $category->status == 1 ? 'primary' : 'secondary' }} btn-sm">status</a>
                                            <a href="{{ route('edit-category',['id'=>$category->id]) }}" class="btn btn-success btn-sm">edit</a>
                                            <a href="{{ route('delete-category',['id'=>$category->id]) }}" class="btn btn-danger btn-sm">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
