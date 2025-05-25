@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Product Information</span>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->code }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->name }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->quantity }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->price }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->description }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center align-items-start">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid rounded shadow" style="max-width: 100%; height: auto; max-height: 400px;">
                        @else
                            <span>No image uploaded.</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
