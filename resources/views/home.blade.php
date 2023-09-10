@extends('layouts.main')

@section('page-title', 'Home')

@section('main-content')
<div class="container text-white py-3">
    <h2 class="text-primary text-uppercase pb-3">lista articoli</h2>
    <div class="row row-gap-3">
        @foreach ($comics as $item)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card ">
                    <img src="{{ $item["thumb"] }}" class="card-img-top" alt="{{ $item["title"] }}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $item["title"] }}</h5>
                        <p class="card-text">{{ Str::limit($item["description"], 200) }}</p>
                        <div class="justify-self-end d-flex justify-content-between aling-items-center">
                            <p class="card-text fw-bold fs-4 d-inline-block">{{ $item["price"] }}</p>
                            <div>
                                <a href="#" class="btn btn-primary">Acquista</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
