@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Cart')

@section('content')
    <main class="section-space pt-4">
        <div class="container">
            <h2 class="fw-bold mb-4">Shopping Cart</h2>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="content-panel p-2 p-md-3">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="cartItemsContainer"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content-panel p-4">
                        <h5 class="fw-semibold mb-3">Order Summary</h5>
                        <div class="d-flex justify-content-between mb-2"><span>Subtotal</span><strong
                                id="cartSubtotal">₹0</strong></div>
                        <div class="d-flex justify-content-between mb-2"><span>Shipping</span><strong
                                id="cartShipping">₹0</strong></div>
                        <hr>
                        <div class="d-flex justify-content-between fs-5 mb-4"><span>Total</span><strong
                                id="cartTotal">₹0</strong></div>
                        <a href="{{ route('store.checkout') }}" class="btn btn-primary w-100 btn-lg">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
