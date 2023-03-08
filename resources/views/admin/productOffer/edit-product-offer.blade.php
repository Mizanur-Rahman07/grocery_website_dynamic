@extends('admin.master')
@section('title')
Update Product Form
@endsection

@section('content')

<div class="row">
    <h5 class="">Product Form</h5>
    <div class="col-xl-9 mx-auto">
        <h1 class="text-center">{{session('message')}}</h1>
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route ('update.product.offer')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="text-center text-uppercase">Update Offer Product</h6>
                        <hr />
                        <input type="hidden" name="product_id" value="{{ $product->id}}">
                        <div class="row mb-3 mt-5">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_name" value="{{ $product->product_name }}"
                                    class="form-control" id="inputEnterYourName" placeholder="Enter Product Title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Type</label>
                            <div class="col-sm-9">
                                <select type="text" name="type_id" value="{{ $product->type_id }}" class="form-select"
                                    id="inputEnterYourName" aria-label="Default select example">
                                    <!-- <option selected>Select Product Type</option> -->
                                    <option selected>{{$product->type_id}}</option>
                                    <option value="Head Offer1">Head Offer1</option>
                                    <option value="Head Offer2">Head Offer2</option>
                                    <option value="Head Offer3">Head Offer3</option>
                                    <option value="Head Offer4">Head Offer4</option>
                                    <option value="Head Add">Head Add</option>
                                    <option value="Feature Offer">Feature Offer</option>
                                    <option value="Exclusive Offer1">Exclusive Offer1</option>
                                    <option value="Exclusive Offer2">Exclusive Offer2</option>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="inputEmailAddress2"
                                    placeholder="image"><br>
                                <img src="{{ asset($product->image) }}" style="width:80px; height: 80px; " alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Sub Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="sub_image" class="form-control" id="inputEmailAddress2"
                                    placeholder="image"><br>
                                <img src="{{ asset($product->sub_image) }}" style="width:80px; height: 80px; " alt="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Url</label>
                            <div class="col-sm-9">
                                <input type="text" name="slug" value="{{ $product->slug }}" class="form-control"
                                    id="inputEnterYourName" placeholder="Enter Product Name Url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Discount</label>
                            <div class="col-sm-9">
                                <input type="text" name="discount" value="{{ $product->discount }}" class="form-control"
                                    id="inputEnterYourName" placeholder="Enter Product Price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_price" value="{{ $product->product_price }}"
                                    class="form-control" id="inputEnterYourName" placeholder="Enter Product Price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Category</label>
                            <div class="col-sm-9">
                                <select type="text" name="category_id" value="{{ $product->category_id }}"
                                    class="form-select" id="inputEnterYourName" aria-label="Default select example">
                                    <!-- <option selected>Select Product Category</option> -->
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" <?php
                                                                        if (!empty($category->id) && $category->id == $product->category_id) {
                                                                            echo 'selected';
                                                                        }
                                                                        ?>>{{$category->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Brand</label>
                            <div class="col-sm-9">
                                <input type="text" name="brand" value="{{ $product->brand }}" class="form-control"
                                    id="inputPhoneNo2" placeholder="Enter Brand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputAddress4" class="col-sm-3 col-form-label"> Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="editor1" rows="3"
                                    placeholder="Description">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Available Size</label>
                            <div class="col-sm-9">
                                <input type="text" name="available_size" value="{{ $product->available_size }}"
                                    class="form-control" id="inputEmailAddress2" placeholder="Available Size">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Product SKU</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_sku" value="{{ $product->product_sku }}"
                                    class="form-control" id="inputEmailAddress2" placeholder="Product SKU">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Product Tags</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_tags" value="{{ $product->product_tags }}"
                                    class="form-control" id="inputEmailAddress2" placeholder="Product Tags">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck4">
                                    <label class="form-check-label" for="gridCheck4">Check me out</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-5">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->
@endsection