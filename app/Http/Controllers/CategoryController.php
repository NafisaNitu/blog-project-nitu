<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function addCategory()
    {
        return view('admin.category.add');
    }

    public function newCategory(Request $request)
    {
        Category::saveCategoryData($request);
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function manageCategory()
    {
        return view('admin.category.manage', [
            'categories' => Category::all(),
        ]);
    }

    public function deleteCategory($id)
    {
        $this->category = Category::findOrFail($id);
        if(file_exists($this->category->category_image))
        {
            unlink($this->category->category_image);
        }
        $this->category->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function changeStatus($id)
    {
        $this->category = Category::find($id);
        if($this->category->status == 1)
        {
            $this->category->status = 0;
        }
        elseif ($this->category->status == 0)
        {
            $this->category->status = 1;
        }
        $this->category->save();
        return redirect()->back()->with('message', 'Changed Status Successfully');
    }

    public function edit($id)
    {
        return view('admin.edit', [
            'category' => Category::find($id),
        ]);
    }

    public function updateCategory(Request $request)
    {
        Category::updateData($request);
        return redirect('manage-category')->with('message', 'Category Updated successfully');
    }

}
