@extends('admin.master')
@section('title')
Grocerry || Add Pro Type
@endsection

@section('content')
<div class="row">
    <h5 class="mb-5"><strong>Add Product Type Form</strong> </h5>
    <div class="col-xl-9 mx-auto">
        <h2 class="card-title" style="color:red;"> {{ session('message')}}</h2>
        <div class="card">
            <div class="card-body">
                <h6 class="text-center text-uppercase">Add Product Type</h6>
                <div class="p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                    </div>
                    <form action="{{ route('new.productType')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Product Type :</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_type" class="form-control" id="inputPhoneNo2"
                                    placeholder="@ new product Type">
                                @if ($errors->has('product_type'))
                                <span class="text-danger text-left">{{ $errors->first('product_type') }}</span>
                                @endif
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
                                <button type="submit" class="btn btn-primary px-5">Add Category</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection()