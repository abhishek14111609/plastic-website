@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Product Details')

@section('content')
    <main class="section-space pt-4">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('store.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('store.products') }}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details</li>
                </ol>
            </nav>
            <div class="row g-4 align-items-start reveal" id="productDetailsContainer"></div>
        </div>
    </main>
@endsection
