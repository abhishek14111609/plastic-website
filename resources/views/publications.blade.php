@extends('layouts.app')

@section('title', 'Publications - Plastic Association')

@section('content')
<section style="background: white; padding: 100px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Our Publications</h2>
            <p>Plastic Sandesh - Monthly Magazine & Industrial Reports</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 30px;">
            @for ($i = 1; $i <= 6; $i++)
            <div style="background: white; border-radius: 10px; box-shadow: var(--shadow); padding: 20px; text-align: center; border-top: 5px solid var(--primary-color);">
                <div style="height: 300px; background: #f0f0f0; margin-bottom: 20px; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-book-open fa-4x" style="color: #ccc;"></i>
                </div>
                <h3>Edition No. {{ 240 + $i }}</h3>
                <p style="margin: 10px 0;">Published: April {{ 2024 - $i }}</p>
                <a href="#" class="btn btn-outline" style="border: 1px solid var(--primary-color); color: var(--primary-color); font-weight: 600;">Download PDF</a>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection
