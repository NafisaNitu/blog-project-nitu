@extends('admin.master')

@section('title')
    Update Category
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Update Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="category_id" value="{{ $category->id }}" />

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Category Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="category_image" class="form-control-file">
                                        <img src="{{ asset($category->category_image) }}" style="height: 100px;width: 100px" alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $category->status == 1 ? 'checked' : '' }} value="1">Published</label>
                                        <label for=""><input type="radio" name="status" {{ $category->status == 0 ? 'checked' : '' }}  value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" value="Update Category">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
