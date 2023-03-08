<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request, FlasherInterface $flasher)
    {
        // $request->validate(
        //     [
        //         'category' => 'required|unique:category|string|min:5|max:50',
        //     ],
        //     [
        //         'category.required' => 'Please fill in the Product Category ',
        //     ]

        // );
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        flash()->addSuccess('Your Category has been submitted.');
        return redirect('/manage-category');
    }

    public function manageCategory()
    {
        return view('admin.category.manage-category', [
            'category' => Category::all()
        ]);
    }
    public function catStatus($id)
    {
        $category = Category::find($id);
        if ($category->status == 1) {
            $category->status = 0;
            $category->save();
            return back();
        } else {
            $category->status = 1;
            $category->save();
            return back();
        }
    }

    public function editCategory($id)
    {
        return view('admin.category.edit-category', [
            'categories' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request)
    {
        $categories = Category::find($request->category_id);
        $categories->category = $request->category;
        $categories->save();
        return redirect('/manage-category')->with('message', 'Insert Successfully');
    }

    public function deleteCategory(Request $request)
    {
        $categories = Category::find($request->category_id);
        $categories->delete();
        return back()->with('message', 'Delete success');
    }
}