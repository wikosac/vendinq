@extends('dashboard')
@section('container')
    


<h2>Add a new Snack</h2><br  />
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
@endif
<form method="post" action="{{url('snacks')}}">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">ID Barang:</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="price">Nama Barang:</label>
            <input type="text" class="form-control" name="price">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Harga Barang:</label>
            <input type="text" class="form-control" name="quantity">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Jumlah:</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Jenis:</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
    <button type="submit" class="btn btn-success" style="margin-left:38px">Add Snack</button>
</div>
</div>
</form>
</div>

@endsection