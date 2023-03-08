<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductLabel;

class ProductLabelController extends Controller
{
    public function addProductLabel()
    {
        return view('admin.productLabel.add-product-label');
    }

    public function saveProductLabel(Request $request)
    {
        $produce_label = new ProductLabel();
        $produce_label->product_label = $request->product_label;
        $produce_label->save();
        return redirect('/manage-product-label')->with('message', 'Insert Successfully');
    }
}
