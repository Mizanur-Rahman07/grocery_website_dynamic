@extends('admin.master')
@section('title')
Grocerry || Add Pro Label
@endsection

@section('content')
<div class="row">
    <h5 class="mb-5"><strong>Add Product Label Form</strong> </h5>
    <div class="col-xl-9 mx-auto">
        <h2 class="card-title" style="color:red;"> {{ session('message')}}</h2>
        <div class="card">
            <div class="card-body">
                <!-- <h6 class="text-center text-uppercase">Add Product Type</h6> -->
                <div class="p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                    </div>
                    <form action="{{ route('new.productType')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Product Label</label>
                            <div class="col-sm-9">
                                <select type="text" name="product_label" class="form-select" id="inputEnterYourName" aria-label="Default select example">
                                    <option selected>Select Product Label</option>
                                    <option value="1">Sale</option>
                                    <option value="2">Hot</option>
                                    <option value="3">Stock Out</option>
                                    <option value="4">New</option>
                                    <option value="5">%Percent</option>
                                </select>
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
                                <button type="submit" class="btn btn-primary px-5">Add Label</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection()