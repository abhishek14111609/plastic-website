@extends('layouts.app')

@section('title', 'Contact Us - Plastic Association')

@section('content')
<section style="background: white; padding: 100px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Get In Touch</h2>
        </div>
        <div style="display: flex; gap: 50px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <form style="display: flex; flex-direction: column; gap: 20px;">
                    <input type="text" placeholder="Your Name" style="padding: 15px; border: 1px solid #ddd; border-radius: 5px;">
                    <input type="email" placeholder="Email Address" style="padding: 15px; border: 1px solid #ddd; border-radius: 5px;">
                    <textarea placeholder="Your Message" rows="5" style="padding: 15px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div style="flex: 1; min-width: 300px; background: var(--bg-light); padding: 40px; border-radius: 10px;">
                <h3 style="margin-bottom: 20px;">Contact Information</h3>
                <p style="margin-bottom: 15px;"><i class="fas fa-map-marker-alt" style="color: var(--secondary-color); margin-right: 10px;"></i> 101, Industry House, Plastic City, Gujarat, India.</p>
                <p style="margin-bottom: 15px;"><i class="fas fa-phone" style="color: var(--secondary-color); margin-right: 10px;"></i> +91 98765 43210</p>
                <p style="margin-bottom: 15px;"><i class="fas fa-envelope" style="color: var(--secondary-color); margin-right: 10px;"></i> contact@plasticassoc.org</p>
                <div style="margin-top: 30px;">
                    <h4>Follow Us</h4>
                    <div style="display: flex; gap: 15px; margin-top: 10px;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
