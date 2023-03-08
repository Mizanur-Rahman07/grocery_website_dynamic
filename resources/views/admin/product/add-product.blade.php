@extends('admin.master')
@section('title')
Add Product Form
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
                        <p>Do you want to add an offer product?<a href="{{ route('add.productOffer')}}"
                                class="ms-2">Click here</a>
                        </p>

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
                    <form action="{{ route ('new.product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="text-center text-uppercase">Add Product </h6>
                        <hr />
                        <!-- <input type="hidden" name="teacher_id" value="{{ Session::get('teacherId')}}"> -->
                        <div class="row mb-3 mt-5">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_name" class="form-control" id="inputEnterYourName"
                                    placeholder="Enter Product Title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Type</label>
                            <div class="col-sm-9">
                                <select type="text" name="type_id" class="form-select" id="inputEnterYourName"
                                    aria-label="Default select example">
                                    <option selected>Select Product Type</option>
                                    @foreach($productTypes as $types)
                                    <option value="{{$types->id}}">{{$types->product_type}}</option>
                                    @endforeach
                                    <!-- <option value="1"> Blog 1</option>
                                    <option value="2">Blog 2</option>
                                    <option value="3"> Blog 3</option>
                                    <option value="4">Blog 4</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="inputEmailAddress2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Sub Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="sub_image" multiple="file" class="form-control"
                                    id="inputEmailAddress2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Url</label>
                            <div class="col-sm-9">
                                <input type="text" name="slug" class="form-control" id="inputEnterYourName"
                                    placeholder="Enter Product Name Url">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Available Quantity</label>
                            <div class="col-sm-9">
                                <select type="text" name="available_quantity" class="form-select"
                                    id="inputEnterYourName" aria-label="Default select example">
                                    <option selected>Select Product quantity</option>
                                    <option value="1">Sale</option>
                                    <option value="2">Hot</option>
                                    <option value="3">Stock Out</option>
                                    <option value="4">New</option>
                                    <option value="4">%Percent</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Old Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="old_price" min="1" class="form-control"
                                    id="inputEnterYourName" placeholder="Enter Product Price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="product_price" min="1" class="form-control"
                                    id="inputEnterYourName" placeholder="Enter Product Price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Category</label>
                            <div class="col-sm-9">
                                <select type="text" name="category_id" class="form-select" id="inputEnterYourName"
                                    aria-label="Default select example">
                                    <option selected>Select Product Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                    <!-- <option value="1"> Blog 1</option>
                                    <option value="2">Blog 2</option>
                                    <option value="3"> Blog 3</option>
                                    <option value="4">Blog 4</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Brand</label>
                            <div class="col-sm-9">
                                <input type="text" name="brand" class="form-control" id="inputPhoneNo2"
                                    placeholder="Enter Brand">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputAddress4" class="col-sm-3 col-form-label"> Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="editor1" rows="3"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Available Size</label>
                            <div class="col-sm-9">
                                <input type="text" name="available_size" class="form-control" id="inputEmailAddress2"
                                    placeholder="Available Size">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Product SKU</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_sku" class="form-control" id="inputEmailAddress2"
                                    placeholder="Product SKU">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Product Tags</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_tags" class="form-control" id="inputEmailAddress2"
                                    placeholder="Product Tags">
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