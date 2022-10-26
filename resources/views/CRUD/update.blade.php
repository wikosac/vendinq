@extends('dashboard')

@section('container')
    <div class="ps-5 py-5 col-4 justify-content-center">
        <div class="row pb-2">
            <div class="col-3">
                <a href="/dashboard/product">
                    <i class="bi bi-arrow-left-circle-fill" style="font-size: 30px; color:black"></i>
                </a>
            </div>
            <div class="col">
                <h4>Edit Product</h4>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="post" action="/product/update">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                    <label for="code" class="form-label">Code</label>
                    <input disabled type="text" class="form-control" id="code" name="code" value="{{ old('code', $item->code) }}">
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $item->name) }}">
                    </div>
                    <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" id="type" name="type">
                        <option value="Food">Food</option>
                        <option value="Beverage">Beverage</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $item->price) }}">
                    </div>
                    <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" value="{{ old('amount', $item->amount) }}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>

    {{-- @if ($errors->any()) 
            <div class="alert alert-danger"> 
                <ul> 
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                @endforeach 
                </ul> 
            </div> 
        @endif --}}
@endsection