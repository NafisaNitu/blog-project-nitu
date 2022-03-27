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
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Manage Service</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Title</th>
                                    <th>Service Image</th>
                                    <th>Service Content</th>
                                    <th>Status</th>
                                    <th>Hit Count</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{!! $service->service_title !!}</td>
                                        <td>
                                            <img src="{{ asset($service->service_image) }}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{!! $service->service_content !!}</td>
                                        <td>{{ $service->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>{{ $service->hit_count == 1 ? 'Favourite' : 'Unfavourite' }}</td>
                                        <td>
                                            <a href="{{ route('service-status', ['id' => $service->id]) }}" class="btn btn-{{ $service->status == 1 ? 'primary' : 'secondary' }} btn-sm">status</a>
                                            <a href="{{ route('edit-service',['id'=>$service->id]) }}" class="btn btn-success btn-sm">edit</a>
                                            <a href="{{ route('delete-service',['id'=>$service->id]) }}" class="btn btn-danger btn-sm">delete</a>
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
