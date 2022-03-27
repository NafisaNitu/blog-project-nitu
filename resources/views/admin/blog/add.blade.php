@extends('admin.master')

@section('title')
    Add Blog
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Add New Blogs</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <h3 class="text-success">{{ Session::get('message') }}</h3>
                            @endif
                            <form action="{{ route('new-blog') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Blog Title</label>
                                    <div class="col-md-8">
                                        <textarea name="blog_title" id="" cols="30" id="editor" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4"> Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" class="form-control">
                                            <option value="" disabled selected><-----Select a Category-----></option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Blog Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="blog_image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Blog Content</label>
                                    <div class="col-md-8">
                                        <textarea name="blog_content" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" checked value="1">Published</label>
                                        <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Hit Count</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="checkbox" checked name="hit_count" value="1">Favourite</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Add Blog">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
