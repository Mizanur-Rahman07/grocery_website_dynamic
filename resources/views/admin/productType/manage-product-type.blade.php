@extends('admin.master')
@section('title')
Manage Product Type
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($pro_types as $types)
                    <tr>
                        <td>{{ $i++}}</td>
                        <td>{{ $types->product_type }}</td>
                        <td>{{ $types->status==1? 'published':'unpublished' }}</td>
                        <td class="d-flex justify-content">
                            @if($types->status==1)
                            <a href=" {{route ('type.status',['id'=>$types->id])}}" class="btn btn-primary me-2"
                                data-bs-toggle="tooltip" title="Active"><i
                                    class="fa-brands fa-creative-commons-by"></i></a>
                            @else
                            <a href=" {{route ('type.status',['id'=>$types->id])}}" class="btn btn-warning me-2"
                                data-bs-toggle="tooltip" title="Deactive"><i
                                    class="fa-solid fa-person-arrow-down-to-line"></i></a>
                            @endif
                            <a href=" {{route ('edit.productType',['id'=>$types->id])}}" class="btn btn-success me-2"
                                data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('delete.productType')}}" method="POST" id="delete">
                                @csrf
                                <input type="hidden" name="types_id" value="{{ $types->id}}">
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