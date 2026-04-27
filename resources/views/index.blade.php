@extends('layouts.app')

@section('title', 'GSPMA Style Plastic Association')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background-image: url('{{ asset('images/hero.png') }}');">
        <div class="container text-center">
            <div class="hero-content">
                <h1>Empowering the Plastic Industry of Gujarat</h1>
                <p style="font-size: 1.2rem; margin-bottom: 30px;">Connecting manufacturers, fostering innovation, and
                    advocating for sustainable growth in the plastics sector.</p>
                <div class="hero-btns">
                    <a href="#" class="btn btn-primary">Our Vision</a>
                    <a href="#" class="btn btn-outline"
                        style="border: 2px solid white; color: white; margin-left: 15px;">Upcoming Events</a>
                </div>
            </div>
    </section>

    <!-- Member Search Bar -->
    <div class="container">
        <div class="search-section"
            style="background: var(--white); margin-top: -60px; position: relative; z-index: 10; padding: 30px; border-radius: 10px; box-shadow: 0 15px 40px rgba(0,0,0,0.15); border-top: 5px solid var(--secondary-color);">
            <form style="display: flex; gap: 20px; align-items: flex-end; flex-wrap: wrap;">
                <div style="flex: 2; min-width: 250px;">
                    <label style="display: block; font-weight: 700; margin-bottom: 8px; color: var(--primary-color);">SEARCH
                        MEMBERS</label>
                    <input type="text" placeholder="Search by Company Name or Product..."
                        style="width: 100%; padding: 14px; border: 1px solid #ccc; border-radius: 5px; font-size: 1rem;">
                </div>
                <div style="flex: 1; min-width: 150px;">
                    <label
                        style="display: block; font-weight: 700; margin-bottom: 8px; color: var(--primary-color);">DISTRICT</label>
                    <select
                        style="width: 100%; padding: 14px; border: 1px solid #ccc; border-radius: 5px; font-size: 1rem; background: white;">
                        <option>All Districts</option>
                        <option>Ahmedabad</option>
                        <option>Surat</option>
                        <option>Vadodara</option>
                        <option>Rajkot</option>
                    </select>
                </div>
                <div style="flex: 0.5; min-width: 120px;">
                    <button class="btn btn-primary"
                        style="width: 100%; padding: 14px; text-transform: uppercase; letter-spacing: 1px;">Search</button>
                </div>
            </form>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-summary">
        <div class="container" style="display: flex; gap: 50px; align-items: center; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <h2 style="margin-bottom: 25px;">Welcome to Plastic Manufacturers Association</h2>
                <p style="margin-bottom: 20px;">The Association was established in 1970 with a vision to create a unified
                    platform for plastic manufacturers in the state. Over the decades, we have grown into a powerhouse of
                    technical expertise and policy advocacy.</p>
                <p>Our mission is to help our members scale their businesses through networking, training, and global
                    exposure.</p>
                <a href="#" class="btn btn-primary" style="margin-top: 20px;">Know More About Us</a>
            </div>
            <div
                style="flex: 1; min-width: 300px; background: #ddd; height: 350px; border-radius: 15px; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; padding-bottom: 70px;">
                <img src="{{ asset('images/user-icon.svg') }}" alt="Association President"
                    style="width: 180px; height: 180px; object-fit: contain; opacity: 0.95;" />
                <div
                    style="position: absolute; bottom: 0; background: rgba(0,0,0,0.7); color: white; width: 100%; padding: 15px; text-align: center;">

                    <strong>Mr. J.K Patel</strong><br>
                    <span>President</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Grid -->
    <section style="background: var(--bg-light);">
        <div class="container">
            <div class="section-title">
                <h2>Association Membership</h2>
                <p>Join the largest network of plastic professionals</p>
            </div>
            <div class="step-grid">
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-file-signature"></i></div>
                    <h3>Apply Online</h3>
                    <p>Fill out our simple digital registration form with your industry details.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-check-double"></i></div>
                    <h3>Verification</h3>
                    <p>Our committee reviews your application based on industry standards.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-id-card"></i></div>
                    <h3>Get Certified</h3>
                    <p>Receive your official membership ID and access exclusive benefits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Plastic Sandesh</h2>
                <p>Our Monthly Insight into the Plastics Industry</p>
            </div>
            <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                @for ($i = 1; $i <= 3; $i++)
                    <div
                        style="background: white; border-radius: 10px; box-shadow: var(--shadow); width: 300px; padding: 20px;">
                        <img src="{{ asset('images/magazine-cover-' . $i . '.svg') }}"
                            alt="Plastic Sandesh Magazine Cover {{ $i }}"
                            style="height: 350px; width: 100%; object-fit: cover; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ececec;">
                        <h4 style="margin-bottom: 10px;">Edition April 2024</h4>
                        <a href="#" style="color: var(--secondary-color); font-weight: 600;">Download PDF <i
                                class="fas fa-download"></i></a>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Industry Circulars -->
    <section style="background: #e9ecef;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <div>
                    <h3 style="border-left: 5px solid var(--secondary-color); padding-left: 15px; margin-bottom: 30px;">
                        Latest Circulars</h3>
                    <div style="background: white; border-radius: 8px; overflow: hidden; box-shadow: var(--shadow);">
                        <ul style="list-style: none;">
                            <li style="padding: 15px; border-bottom: 1px solid #eee; display: flex; gap: 15px;">
                                <div
                                    style="background: var(--primary-color); color: white; padding: 5px 10px; border-radius: 4px; height: fit-content; font-size: 0.8rem; text-align: center;">
                                    12<br>Apr
                                </div>
                                <div>
                                    <a href="#" style="font-weight: 600;">Compliance for Single Use Plastic Ban
                                        2024</a>
                                    <p style="font-size: 0.85rem; color: #666;">Issued by: GPCB | Status: Urgent</p>
                                </div>
                            </li>
                            <li style="padding: 15px; border-bottom: 1px solid #eee; display: flex; gap: 15px;">
                                <div
                                    style="background: var(--primary-color); color: white; padding: 5px 10px; border-radius: 4px; height: fit-content; font-size: 0.8rem; text-align: center;">
                                    08<br>Apr
                                </div>
                                <div>
                                    <a href="#" style="font-weight: 600;">EPR Registration Portal Update for
                                        Manufacturers</a>
                                    <p style="font-size: 0.85rem; color: #666;">Issued by: CPCB | Status: Active</p>
                                </div>
                            </li>
                            <li style="padding: 15px; display: flex; gap: 15px;">
                                <div
                                    style="background: var(--primary-color); color: white; padding: 5px 10px; border-radius: 4px; height: fit-content; font-size: 0.8rem; text-align: center;">
                                    05<br>Apr
                                </div>
                                <div>
                                    <a href="#" style="font-weight: 600;">GST Rate Clarifications on Recycled Poly
                                        granules</a>
                                    <p style="font-size: 0.85rem; color: #666;">Issued by: Ministry of Finance</p>
                                </div>
                            </li>
                        </ul>
                        <div style="background: #f8f9fa; padding: 10px; text-align: center;">
                            <a href="#"
                                style="font-weight: 700; color: var(--secondary-color); font-size: 0.9rem;">VIEW ALL
                                CIRCULARS <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 style="border-left: 5px solid var(--secondary-color); padding-left: 15px; margin-bottom: 30px;">
                        Upcoming Events</h3>
                    <div
                        style="background: white; padding: 30px; border-radius: 8px; box-shadow: var(--shadow); height: 100%;">
                        <div style="border-bottom: 2px dashed #ddd; padding-bottom: 20px; margin-bottom: 20px;">
                            <h4 style="color: var(--secondary-color);">PLEXPO INDIA 2026</h4>
                            <p style="margin: 10px 0;"><i class="fas fa-calendar-alt"></i> Jan 07 - Jan 11, 2026</p>
                            <p><i class="fas fa-map-marker-alt"></i> Helipad Exhibition Centre, Gandhinagar</p>
                            <a href="#" class="btn btn-primary" style="margin-top: 15px; padding: 8px 20px;">Book
                                Stall</a>
                        </div>
                        <div>
                            <h4>Annual General Meeting 2024</h4>
                            <p style="margin: 5px 0;"><i class="fas fa-calendar-alt"></i> June 15, 2024</p>
                            <a href="#" style="color: var(--primary-color); font-weight: 600;">Register Membership
                                <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section style="background: var(--primary-color); color: white; padding: 50px 0;">
        <div class="container" style="display: flex; justify-content: space-around; text-align: center;">
            <div>
                <h1 style="color: var(--accent-color); font-size: 3rem;">500+</h1>
                <p>Active Members</p>
            </div>
            <div>
                <h1 style="color: var(--accent-color); font-size: 3rem;">12+</h1>
                <p>Annual Events</p>
            </div>
            <div>
                <h1 style="color: var(--accent-color); font-size: 3rem;">50+</h1>
                <p>Years Excellence</p>
            </div>
        </div>
    </section>

    <!-- Affiliations -->
    <section style="background: white; padding: 60px 0; border-top: 1px solid #eee;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 30px;">
                <h4 style="color: #999; text-transform: uppercase; letter-spacing: 2px;">Our Affiliations</h4>
            </div>
            <div
                style="display: flex; justify-content: space-around; align-items: center; opacity: 0.5; filter: grayscale(1); gap: 40px; flex-wrap: wrap;">
                <div style="font-weight: 900; font-size: 1.8rem; color: #333;">AIPMA</div>
                <div style="font-weight: 900; font-size: 1.8rem; color: #333;">FICCI</div>
                <div style="font-weight: 900; font-size: 1.8rem; color: #333;">PLEXCONCIL</div>
                <div style="font-weight: 900; font-size: 1.8rem; color: #333;">CII</div>
                <div style="font-weight: 900; font-size: 1.8rem; color: #333;">MSME</div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Simple GSAP activation
        gsap.from(".hero-content *", {
            opacity: 0,
            y: 30,
            duration: 1,
            stagger: 0.2,
            ease: "power2.out"
        });
    </script>
@endsection
