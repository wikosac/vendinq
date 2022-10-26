@extends('dashboard')

@section('container')
    <div class="container">
        <div class="row pb-2">
            <div class="col-2">
                <a href="/dashboard/product">
                    <i class="bi bi-arrow-left-circle-fill" style="font-size: 30px; color:black"></i>
                </a>
            </div>
            <div class="col">
                <h4>Info</h4>
            </div>
        </div>

        <div class="row">
            <div class="">
                <div class="col">
                    <ul>
                        <div class="mt-3 fs-5">Code     : {{ $item->code }}</div>
                        <div class="mt-3 fs-5">Name     : {{ $item->name }}</div>
                        <div class="mt-3 fs-5">Type     : {{ $item->type }}</div>
                        <div class="mt-3 fs-5">Price    : {{ $item->price }}</div>
                        <div class="mt-3 fs-5">Amount   : {{ $item->amount }}</div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection