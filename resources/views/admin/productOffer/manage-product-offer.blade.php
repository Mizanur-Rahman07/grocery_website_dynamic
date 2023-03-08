@extends('admin.master')
@section('title')
Manage Product
@endsection

@section('content')

<h6 class="mb-0 text-uppercase">DataTable Example</h6>
<hr />
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Product Type</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <!-- <th>Description</th>
                        <th>Available Size</th>
                        <th>Product SKU</th>
                        <th>Product Tags</th> -->
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($pro_offers as $offer)
                    <tr>
                        <td>{{ $i++}}</td>
                        <td>{{ $offer->type_id }}</td>
                        <td>{{ $offer->product_name }}</td>
                        <td>
                            <img src="{{ asset($offer->image) }}" style="height:60px; width:60px;" alt="" srcset="">
                        </td>
                        <!-- <td>{{ $offer->old_price }}</td> -->
                        <td>{{ $offer->product_price }} ৳</td>
                        <td>{{ $offer->brand }}</td>
                        <!-- <td>{!! substr($offer->description,0,35) !!}</td>
                        <td>{{ $offer->available_size }}</td>
                        <td>{{ $offer->product_sku }}</td>
                        <td>{{ $offer->product_tags }}</td> -->
                        <td>{{ $offer->status==1? 'published':'unpublished' }}</td>
                        <td class="d-flex justify-content">
                            @if($offer->status==1)
                            <a href=" {{route ('product.offer.status',['id'=>$offer-> id])}}"
                                class="btn btn-primary me-2" data-bs-toggle="tooltip" title="Active"><i
                                    class="fa-brands fa-creative-commons-by"></i></a>
                            @else
                            <a href=" {{route ('product.offer.status',['id'=>$offer->id])}}"
                                class="btn btn-warning me-2" data-bs-toggle="tooltip" title="Deactive"><i
                                    class="fa-solid fa-person-arrow-down-to-line"></i></a>
                            @endif
                            <a href=" {{route ('edit.product.offer',['id'=>$offer->id])}}" class="btn btn-success me-2"
                                data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('delete.product.offer')}}" method="POST" id="delete">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $offer->id}}">
                                <button type="submit" class="btn btn-danger" title="Delete"
                                    onclick="return confirm('Are You Sure delete this!!')" data-bs-toggle="tooltip"
                                    title="Delete"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection