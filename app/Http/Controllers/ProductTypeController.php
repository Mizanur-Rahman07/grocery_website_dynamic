<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;


class ProductTypeController extends Controller
{
    public function addProductType()
    {
        return view('admin.productType.add-product-type');
    }

    public function saveProductType(Request $request)
    {
        $pro_type = new ProductType();
        $pro_type->product_type = $request->product_type;
        $pro_type->save();
        return redirect('/manage-product-type')->with('message', 'Insert Successfully');
    }


    public function manageProductType()
    {
        return view('admin.productType.manage-product-type', [
            'pro_types' => ProductType::all()
        ]);
    }
    public function typeStatus($id)
    {
        $pro_types = ProductType::find($id);
        if ($pro_types->status == 1) {
            $pro_types->status = 0;
            $pro_types->save();
            return back();
        } else {
            $pro_types->status = 1;
            $pro_types->save();
            return back();
        }
    }

    public function editProductType($id)
    {
        return view('admin.productType.edit-product-type', [
            'product_types' => ProductType::find($id)
        ]);
    }

    public function updateProductType(Request $request)
    {
        $product_types = ProductType::find($request->types_id);
        $product_types->product_type = $request->product_type;
        $product_types->save();
        return redirect('/manage-product-type')->with('message', 'Insert Successfully');
    }

    public function deleteProductType(Request $request)
    {
        $product_types = ProductType::find($request->types_id);
        $product_types->delete();
        return back()->with('message', 'Delete success');
    }
}