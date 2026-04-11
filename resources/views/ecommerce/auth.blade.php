@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Login & Register')

@section('content')
    <main class="auth-wrap py-4">
        <div class="container">
            <div class="auth-card row g-0 reveal">
                <div class="col-lg-5 auth-side p-4 p-lg-5 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold">Welcome to Saurashtra Plastics</h2>
                    <p class="mt-3 mb-4">Manage orders, discover products, and connect with manufacturers through a
                        streamlined platform experience.</p>
                    <div class="small">
                        <p class="mb-2"><i class="fa-solid fa-circle-check me-2"></i>Verified supplier marketplace</p>
                        <p class="mb-2"><i class="fa-solid fa-circle-check me-2"></i>Bulk order-ready product catalog</p>
                        <p class="mb-0"><i class="fa-solid fa-circle-check me-2"></i>Fast and secure procurement flow</p>
                    </div>
                </div>
                <div class="col-lg-7 bg-white p-4 p-lg-5">
                    <ul class="nav nav-pills mb-4" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill"
                                data-bs-target="#loginPane" type="button" role="tab">Login</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
                                data-bs-target="#registerPane" type="button" role="tab">Register</button></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="loginPane" role="tabpanel">
                            <h4 class="fw-semibold mb-3">Sign In</h4>
                            <form>
                                <div class="mb-3"><label class="form-label">Email</label><input type="email"
                                        class="form-control" placeholder="name@company.com"></div>
                                <div class="mb-3"><label class="form-label">Password</label><input type="password"
                                        class="form-control" placeholder="Enter password"></div>
                                <button type="button" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="registerPane" role="tabpanel">
                            <h4 class="fw-semibold mb-3">Create Account</h4>
                            <form>
                                <div class="mb-3"><label class="form-label">Company Name</label><input type="text"
                                        class="form-control" placeholder="Your company name"></div>
                                <div class="mb-3"><label class="form-label">Email</label><input type="email"
                                        class="form-control" placeholder="name@company.com"></div>
                                <div class="mb-3"><label class="form-label">Phone</label><input type="tel"
                                        class="form-control" placeholder="Phone number"></div>
                                <div class="mb-3"><label class="form-label">Password</label><input type="password"
                                        class="form-control" placeholder="Create password"></div>
                                <button type="button" class="btn btn-primary w-100">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
