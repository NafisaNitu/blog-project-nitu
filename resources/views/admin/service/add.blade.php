@extends('admin.master')

@section('title')
    Add Service
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Add New Services</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-service') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Service Title</label>
                                    <div class="col-md-8">
                                        <textarea name="service_title" id="" cols="30" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Service Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="service_image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Service Content</label>
                                    <div class="col-md-8">
                                        <textarea name="service_content" id="" cols="30" class="form-control" rows="2"></textarea>
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
                                    <input type="submit" class="btn btn-success btn-block" value="Add Service">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
