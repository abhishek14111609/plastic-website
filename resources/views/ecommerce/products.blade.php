@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Products')

@section('content')
    <main class="section-space pt-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                <h2 class="fw-bold mb-0">Marketplace Products</h2>
                <p class="text-secondary mb-0">Find industrial plastic products by category and budget</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="content-panel p-3 sidebar-filter">
                        <h5 class="fw-semibold mb-3">Filters</h5>
                        <div class="mb-3">
                            <label for="filterCategory" class="form-label">Category</label>
                            <select id="filterCategory" class="form-select">
                                <option value="all">All Categories</option>
                                <option value="Pipes">Pipes</option>
                                <option value="Containers">Containers</option>
                                <option value="Packaging">Packaging</option>
                                <option value="Fittings">Fittings</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Tanks">Tanks</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Raw Material">Raw Material</option>
                                <option value="Utility">Utility</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="filterPrice" class="form-label">Max Price: <strong
                                    id="priceRangeLabel">₹5,000</strong></label>
                            <input id="filterPrice" type="range" class="form-range" min="200" max="5000"
                                step="100" value="5000">
                        </div>
                        <div class="mb-1">
                            <label for="sortPrice" class="form-label">Sort</label>
                            <select id="sortPrice" class="form-select">
                                <option value="default">Default</option>
                                <option value="low-high">Price: Low to High</option>
                                <option value="high-low">Price: High to Low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row g-4" id="productsGrid"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
