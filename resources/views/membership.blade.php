@extends('layouts.app')

@section('title', 'Membership - Plastic Association')

@section('content')
<section style="background: white; padding: 100px 0;">
    <div class="container">
        <div class="section-title">
            <h2>Membership Information</h2>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
            <div>
                <h3>Why Join Us?</h3>
                <p style="margin: 20px 0;">PMA provides a platform for plastic manufacturers to network, share knowledge, and represent their interests to government bodies.</p>
                <ul style="line-height: 2;">
                    <li><i class="fas fa-check" style="color: green;"></i> Access to latest industry circulars.</li>
                    <li><i class="fas fa-check" style="color: green;"></i> Participation in PLEXPO exhibition at discounted rates.</li>
                    <li><i class="fas fa-check" style="color: green;"></i> Networking with 500+ active manufacturers.</li>
                    <li><i class="fas fa-check" style="color: green;"></i> Technical seminars and workshops.</li>
                </ul>
            </div>
            <div style="background: var(--bg-light); padding: 40px; border-radius: 10px;">
                <h3>Membership Fees</h3>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr style="border-bottom: 2px solid #ddd;">
                        <th style="text-align: left; padding: 10px;">Category</th>
                        <th style="text-align: right; padding: 10px;">Annual Fee</th>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">Micro Industry</td>
                        <td style="text-align: right; padding: 10px;">₹ 5,000</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">SSI (Small Scale)</td>
                        <td style="text-align: right; padding: 10px;">₹ 10,000</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">MSI/LSI (Large Scale)</td>
                        <td style="text-align: right; padding: 10px;">₹ 25,000</td>
                    </tr>
                </table>
                <a href="#" class="btn btn-primary" style="margin-top: 30px; width: 100%; text-align: center;">Download Registration Form</a>
            </div>
        </div>
    </div>
</section>
@endsection
