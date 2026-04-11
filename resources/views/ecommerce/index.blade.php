@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Home')

@section('content')
    <main>
        <section class="section-space pt-4">
            <div class="container">
                <div class="hero p-4 p-lg-5 reveal">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7 hero-content">
                            <p class="text-uppercase small mb-2">Saurashtra Plastics E-Commerce Platform</p>
                            <h1 class="hero-title fw-bold mb-3">Connecting Plastic Manufacturers with Buyers</h1>
                            <p class="mb-4 text-light-emphasis">Source industrial-grade plastic products directly from
                                trusted suppliers with transparent pricing and fast procurement workflows.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="{{ route('store.products') }}"
                                    class="btn btn-light btn-lg text-primary fw-semibold">Explore Products</a>
                                <a href="#about" class="btn btn-outline-light btn-lg">Why Choose Us</a>
                            </div>
                        </div>
                        <div class="col-lg-5 hero-visual">
                            <div class="glass-card">
                                <h5 class="fw-semibold">Platform Highlights</h5>
                                <div class="row g-3 mt-1">
                                    <div class="col-6">
                                        <div class="small text-light-emphasis">Active Products</div>
                                        <div class="h4 fw-bold mb-0">1,250+</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="small text-light-emphasis">Verified Sellers</div>
                                        <div class="h4 fw-bold mb-0">340+</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="small text-light-emphasis">Bulk Orders</div>
                                        <div class="h4 fw-bold mb-0">9,800+</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="small text-light-emphasis">Cities Served</div>
                                        <div class="h4 fw-bold mb-0">120+</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold mb-0">Featured Categories</h2>
                    <a href="{{ route('store.products') }}" class="text-decoration-none">View all</a>
                </div>
                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-2 reveal">
                        <div class="category-card p-3 h-100">
                            <div class="category-icon mb-3"><i class="fa-solid fa-trowel"></i></div>
                            <h6 class="mb-0">Pipes</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 reveal">
                        <div class="category-card p-3 h-100">
                            <div class="category-icon mb-3"><i class="fa-solid fa-box-open"></i></div>
                            <h6 class="mb-0">Containers</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 reveal">
                        <div class="category-card p-3 h-100">
                            <div class="category-icon mb-3"><i class="fa-solid fa-boxes-stacked"></i></div>
                            <h6 class="mb-0">Packaging</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 reveal">
                        <div class="category-card p-3 h-100">
                            <div class="category-icon mb-3"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                            <h6 class="mb-0">Fittings</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 reveal">
                        <div class="category-card p-3 h-100">
                            <div class="category-icon mb-3"><i class="fa-solid fa-industry"></i></div>
                            <h6 class="mb-0">Raw Material</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 reveal">
                        <div class="category-card p-3 h-100">
                            <div class="category-icon mb-3"><i class="fa-solid fa-truck-fast"></i></div>
                            <h6 class="mb-0">Logistics</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-space pt-0">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold mb-0">Trending Products</h2>
                    <a href="{{ route('store.products') }}" class="btn btn-sm btn-outline-primary">Browse Marketplace</a>
                </div>
                <div class="row g-4" id="trendingProducts"></div>
            </div>
        </section>

        <section id="about" class="section-space pt-0">
            <div class="container">
                <div class="content-panel p-4 p-lg-5 reveal">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <h2 class="fw-bold mb-3">Built for India’s Growing Plastic Supply Chain</h2>
                            <p class="text-secondary mb-0">Saurashtra Plastics helps manufacturers, wholesalers, and
                                retailers discover quality plastic products in one trusted marketplace. This frontend demo
                                showcases a realistic procurement journey from discovery to checkout with a modern,
                                buyer-friendly interface.</p>
                        </div>
                        <div class="col-lg-5">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="metric-card p-3">
                                        <h4 class="fw-bold mb-1">24x7</h4>
                                        <p class="mb-0 small text-secondary">Support</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="metric-card p-3">
                                        <h4 class="fw-bold mb-1">98%</h4>
                                        <p class="mb-0 small text-secondary">Fulfillment Rate</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="metric-card p-3">
                                        <h4 class="fw-bold mb-1">12K+</h4>
                                        <p class="mb-0 small text-secondary">Monthly Orders</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="metric-card p-3">
                                        <h4 class="fw-bold mb-1">340+</h4>
                                        <p class="mb-0 small text-secondary">Vendors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
