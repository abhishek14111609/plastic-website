@extends('layouts.app')

@section('title', 'Events - Plastic Association')

@section('content')
<section style="background: white; padding: 100px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Upcoming Events</h2>
        </div>
        <div style="display: flex; flex-direction: column; gap: 30px;">
            <div style="display: flex; gap: 30px; background: #fff; box-shadow: var(--shadow); border-radius: 10px; overflow: hidden; align-items: center;">
                <div style="background: var(--secondary-color); color: white; padding: 40px; text-align: center; min-width: 150px;">
                    <h2 style="color: white; margin: 0;">07</h2>
                    <span>JAN 2026</span>
                </div>
                <div style="padding: 20px; flex: 1;">
                    <h3 style="margin-bottom: 10px;">PLEXPO INDIA 2026</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Helipad Exhibition Centre, Gandhinagar, Gujarat</p>
                    <p style="margin-top: 10px;">One of the largest international plastic exhibitions in India, showcasing cutting-edge technology and materials.</p>
                </div>
                <div style="padding: 20px;">
                    <a href="#" class="btn btn-primary">Event Details</a>
                </div>
            </div>
            
            <div style="display: flex; gap: 30px; background: #fff; box-shadow: var(--shadow); border-radius: 10px; overflow: hidden; align-items: center;">
                <div style="background: var(--primary-color); color: white; padding: 40px; text-align: center; min-width: 150px;">
                    <h2 style="color: white; margin: 0;">20</h2>
                    <span>SEP 2024</span>
                </div>
                <div style="padding: 20px; flex: 1;">
                    <h3 style="margin-bottom: 10px;">Seminar: Sustainability in Recycled Polymers</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Marriott Hotel, Ahmedabad</p>
                    <p style="margin-top: 10px;">A one-day Technical Seminar focusing on the latest trends in plastic recycling and green initiatives.</p>
                </div>
                <div style="padding: 20px;">
                    <a href="#" class="btn btn-primary">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
