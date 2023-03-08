<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductType;
use DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add-product', [
            'categories' => Category::where('status', 1)->orderBy('id', 'desc')->get(),
            'productTypes' => ProductType::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function saveProduct(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->type_id = $request->type_id;
        $product->image = $this->SaveImage($request);
        $product->sub_image = $this->SaveSubImage($request);
        $product->slug = $this->makeSlug($request);
        $product->old_price = $request->old_price;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->available_size = $request->available_size;
        $product->product_sku = $request->product_sku;
        $product->product_tags = $request->product_tags;
        $product->save();
        return redirect('/manage-product')->with('message', 'Insert Successfully');
    }

    private function saveImage($request)
    {
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/product_image/';
        $imgUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }
    private function SaveSubImage($request)
    {
        $image = $request->file('sub_image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/product_sub_image/';
        $imgUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }
    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->product_name;
        return preg_replace('/\s+/u', '-', trim($str));
    }
    public function productStatus($id)
    {
        $product = Product::find($id);
        if ($product->status == 1) {
            $product->status = 0;
            $product->save();
            return back();
        } else {
            $product->status = 1;
            $product->save();
            return back();
        }
    }
    public function manageProduct()
    {
        $pro_type = DB::table('products')
            ->join('product_types', 'products.type_id', 'product_types.id')
            ->select('products.*', 'product_types.product_type')
            ->get();
        return view('admin.product.manage-product', [
            'products' =>  $pro_type
        ]);
    }

    public function editProduct($id)
    {
        return view('admin.product.edit-product', [
            'categories' => Category::where('status', 1)->orderBy('id', 'desc')->get(),
            'productTypes' => ProductType::where('status', 1)->orderBy('id', 'desc')->get(),
            'product' => Product::find($id)
        ]);
    }
    public function updateProduct(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->product_name = $request->product_name;
        $product->type_id = $request->type_id;
        if ($request->file('image')) {
            if ($product->image) {
                unlink($product->image);
            }
            $product->image = $this->saveImage($request);
        }
        if ($request->file('sub_image')) {
            if ($product->sub_image) {
                unlink($product->sub_image);
            }
            $product->sub_image = $this->SaveSubImage($request);
        }
        $product->slug = $this->makeSlug($request);
        $product->old_price = $request->old_price;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->available_size = $request->available_size;
        $product->product_sku = $request->product_sku;
        $product->product_tags = $request->product_tags;
        $product->save();
        return redirect('/manage-product')->with('message', 'Update Successfully');
    }
    public function deleteProduct(Request $request)
    {
        $products = Product::find($request->product_id);
        if ($products->image) {
            unlink($products->image);
        }
        $products->delete();
        return back()->with('message', 'Delete success');
    }
}
