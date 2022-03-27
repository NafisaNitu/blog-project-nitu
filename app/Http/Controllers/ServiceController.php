<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $service;

    public function addService()
    {
        return view('admin.service.add');
    }

    public function newService(Request $request)
    {
        Service::saveServiceData($request);
        return redirect()->back()->with('message', 'Service Added Successfully');
    }

    public function manageService()
    {
        return view('admin.service.manage', [
            'services' => Service::all(),
        ]);
    }

    public function changeStatus($id)
    {
        $this->service = Service::find($id);
        if($this->service->status == 1)
        {
            $this->service->status = 0;
        }
        elseif ($this->service->status == 0)
        {
            $this->service->status = 1;
        }
        $this->service->save();
        return redirect()->back()->with('message', 'Changed Status Successfully');
    }

    public function deleteService($id)
    {
        $this->service = Service::findOrFail($id);
        if(file_exists($this->service->service_image))
        {
            unlink($this->service->service_image);
        }
        $this->service->delete();
        return redirect()->back()->with('message', 'service Deleted Successfully');
    }
//
    public function editService($id)
    {
        return view('admin.service.edit', [
            'service' => Service::find($id),
        ]);
    }

    public function updateService(Request $request)
    {
        Service::updateServiceData($request);
        return redirect('manage-service')->with('message', 'service Updated successfully');
    }

}
