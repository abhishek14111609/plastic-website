@extends('layouts.app')

@section('title', 'Administrative Activity - Plastic Association')

@section('content')
<section class="page-banner" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('images/banner.jpg') }}');">
    <div class="container">
        <h1>Administrative Activity</h1>
        <p>Keeping our members informed about the association's governance and efforts.</p>
    </div>
</section>

<section class="admin-activity-section">
    <div class="container">
        <div class="section-title">
            <h2>Governance & Operations</h2>
        </div>
        
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Annual General Meetings</h3>
                <p>Regular meetings held to discuss the association's progress, financial health, and future strategies with all members.</p>
            </div>
            
            <div class="activity-card" style="border-left-color: var(--secondary-color);">
                <h3>Executive Committee</h3>
                <p>Monthly deliberations by the elected committee to oversee operations and implement policy decisions.</p>
            </div>
            
            <div class="activity-card">
                <h3>Government Liaison</h3>
                <p>Ongoing advocacy with state and central government bodies regarding industry regulations and policies.</p>
            </div>
        </div>
    </div>
</section>
@endsection
