<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductOffer;
use App\Models\Category;
use Flasher\Prime\FlasherInterface;


class ProductOfferController extends Controller
{
    public function addProductOffer()
    {
        return view('admin.productOffer.add-offer-product', [
            'categories' => Category::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function saveProductOffer(Request $request)
    {
        // $this->validate($request, [
        //     'product_name' => 'required|unique:product_offers,product_name|string|min:5|max:50',
        // ]);

        $request->validate(
            [
                'product_name' => 'required|unique:product_offers,product_name|string|min:5|max:50',
                'image' => 'required'
            ],
            [
                'product_name.required' => 'Please fill in the Product Name',
                'image.required' => 'Please fill in the Image'
            ]

        );

        $pro_offer = new ProductOffer();
        $pro_offer->product_name = $request->product_name;
        $pro_offer->type_id = $request->type_id;
        $pro_offer->image = $this->SaveImage($request, 'image');
        $pro_offer->sub_image = $this->SaveImage($request, 'sub_image');
        $pro_offer->slug = $this->makeSlug($request);
        $pro_offer->discount = $request->discount;
        $pro_offer->product_price = $request->product_price;
        $pro_offer->category_id = $request->category_id;
        $pro_offer->brand = $request->brand;
        $pro_offer->description = $request->description;
        $pro_offer->available_size = $request->available_size;
        $pro_offer->product_sku = $request->product_sku;
        $pro_offer->product_tags = $request->product_tags;
        $pro_offer->save();
        // flash()->addSuccess('Your Offer Product has been submitted.');
        return redirect('/manage-product-offer');
    }
    private function saveImage($request, $imageField)
    {
        $image = $request->file($imageField);
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/product_image/';
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
    public function productOfferStatus($id)
    {
        $product = ProductOffer::find($id);
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

    public function manageProductOffer()
    {
        return view('admin.productOffer.manage-product-offer', [
            'pro_offers' => ProductOffer::all()
        ]);
    }

    public function editProductOffer($id)
    {
        return view('admin.productOffer.edit-product-offer', [
            'categories' => Category::where('status', 1)->orderBy('id', 'desc')->get(),
            'product' => ProductOffer::find($id)
        ]);
    }
    public function updateProductOffer(Request $request)
    {
        $product = ProductOffer::find($request->product_id);
        $product->product_name = $request->product_name;
        $product->type_id = $request->type_id;
        if ($request->file('image')) {
            if ($product->image) {
                unlink($product->image);
            }
            $product->image = $this->saveImage($request, 'image');
        }
        if ($request->file('sub_image')) {
            if ($product->sub_image) {
                unlink($product->sub_image);
            }
            $product->sub_image = $this->saveImage($request, 'sub_image');
        }
        $product->slug = $this->makeSlug($request);
        $product->discount = $request->discount;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->available_size = $request->available_size;
        $product->product_sku = $request->product_sku;
        $product->product_tags = $request->product_tags;
        $product->save();
        return redirect('/manage-product-offer')->with('message', 'Update Successfully');
    }
    public function deleteProductOffer(Request $request)
    {
        $products = ProductOffer::find($request->product_id);
        if ($products->image) {
            unlink($products->image);
        }
        $products->delete();
        return back()->with('message', 'Delete success');
    }
}