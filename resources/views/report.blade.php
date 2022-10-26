@extends('dashboard')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Report</h1>

        <div>
            <form action="/dashboard/product" class="input-group">
            <input id="search" class="form-control" type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-warning" type="submit">
                <i class="bi bi-search"></i>
            </button>
            </form>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="me-2">
                <a href="#" style="font-size: 25px">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Earnings</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->date }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->earnings }}</td>
                    <td>
                        <a href="/dashboard/product/{{ $product->code }}" style="color: aqua">
                            <i class="bi bi-info-lg"></i>
                        </a>
                        <a href="/product/update/{{ $product->code }}" style="color: greenyellow">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="/product/delete/{{ $product->code }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button style="color: red" class="border-0" onclick="return confirm('Are you sure?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
    </div>
@endsection