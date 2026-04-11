@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Admin Dashboard')
@section('hide_navbar')@endsection
@section('hide_footer')@endsection

@section('content')
    <div class="admin-layout container-fluid">
        <div class="row">
            <aside class="col-lg-2 admin-sidebar p-4">
                <a href="{{ route('store.home') }}" class="text-white text-decoration-none fw-bold d-block mb-4">Saurashtra
                    Admin</a>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-cubes me-2"></i>Products</a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Orders</a>
                    <a class="nav-link" href="#"><i class="fa-solid fa-users me-2"></i>Users</a>
                </nav>
            </aside>

            <main class="col-lg-10 p-3 p-lg-4">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <h2 class="fw-bold mb-0">Admin Dashboard</h2>
                    <a href="{{ route('store.home') }}" class="btn btn-outline-primary">Back to Storefront</a>
                </div>

                <div class="row g-3 mb-4 reveal">
                    <div class="col-md-4">
                        <div class="metric-card p-4">
                            <p class="text-secondary mb-1">Total Products</p>
                            <h3 class="fw-bold mb-0">1,250</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric-card p-4">
                            <p class="text-secondary mb-1">Total Orders</p>
                            <h3 class="fw-bold mb-0">9,820</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric-card p-4">
                            <p class="text-secondary mb-1">Total Users</p>
                            <h3 class="fw-bold mb-0">4,530</h3>
                        </div>
                    </div>
                </div>

                <div class="content-panel p-3 p-lg-4 reveal">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-semibold mb-0">Products Table</h5>
                        <button class="btn btn-primary btn-sm">Add Product</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="adminProductsTable"></tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
