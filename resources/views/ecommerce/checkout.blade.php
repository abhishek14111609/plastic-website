@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Checkout')

@section('content')
    <main class="section-space pt-4">
        <div class="container">
            <h2 class="fw-bold mb-4">Checkout</h2>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="content-panel p-4">
                        <h5 class="fw-semibold mb-3">Shipping Information</h5>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="4" placeholder="Enter your shipping address"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Enter your phone number">
                            </div>
                            <button id="placeOrderBtn" class="btn btn-primary btn-lg w-100">Place Order</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content-panel p-4">
                        <h5 class="fw-semibold mb-3">Order Summary</h5>
                        <div id="checkoutSummary"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
