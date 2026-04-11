@extends('layouts.ecommerce')

@section('title', 'Saurashtra Plastics | Contact Us')

@section('content')
    <main class="section-space pt-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7 reveal">
                    <div class="content-panel p-4 p-lg-5 h-100">
                        <p class="text-uppercase text-primary fw-semibold small mb-2">Contact Us</p>
                        <h1 class="fw-bold mb-3">Let’s Talk Procurement</h1>
                        <p class="text-secondary mb-4">Need help with product sourcing, bulk orders, or supplier onboarding?
                            Share your details and our team will get back to you.</p>

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Your full name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" placeholder="Your company">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="name@company.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="5" placeholder="Tell us your requirement"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 reveal">
                    <div class="content-panel p-4 p-lg-5 h-100">
                        <h4 class="fw-bold mb-3">Contact Information</h4>
                        <p class="text-secondary mb-4">You can also reach us directly through our support channels.</p>

                        <div class="d-flex gap-3 mb-3">
                            <div class="category-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <h6 class="mb-1">Office</h6>
                                <p class="mb-0 text-secondary">Rajkot, Gujarat, India</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-3">
                            <div class="category-icon"><i class="fa-solid fa-phone"></i></div>
                            <div>
                                <h6 class="mb-1">Phone</h6>
                                <p class="mb-0 text-secondary">+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="category-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <h6 class="mb-1">Email</h6>
                                <p class="mb-0 text-secondary">support@saurashtraplastics.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
