@extends('admin.master')

@section('title')
    Edit Service
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Add New service</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-service') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id }}" />
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">service Title</label>
                                    <div class="col-md-8">
                                        <textarea name="service_title" id="" cols="30" class="form-control" rows="2">{!! $service->service_title !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">service Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="service_image" class="form-control-file">
                                        <img src="{{ asset($service->service_image) }}" style="height: 100px;width: 100px" alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">service Content</label>
                                    <div class="col-md-8">
                                        <textarea name="service_content" id="" cols="30" class="form-control" rows="2">{!! $service->service_content !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{ $service->status == 1 ? 'checked' : '' }} value="1">Published</label>
                                        <label for=""><input type="radio" name="status" {{ $service->status == 0 ? 'checked' : '' }}  value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Hit Count</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="checkbox" name="hit_count" {{ $service->hit_count == 1 ? 'checked' : '' }} value="1">Favourite</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Update service">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
