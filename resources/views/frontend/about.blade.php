@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<!-- About Hero -->
<section class="about-hero">

    <div class="about-hero-content">

        <span class="about-label">ABOUT QUIET HIRING</span>

        <h1>
            Connecting <span>Talent</span><br>
            With The Right Opportunities
        </h1>

        <p>
            Quiet Hiring is a modern career platform that connects
            talented people with meaningful job and career opportunities.
        </p>

    </div>

</section>


<!-- About Main -->
<section class="about-main">

    <div class="about-wrapper">

        <div class="about-content">

            <span class="section-label">WHO WE ARE</span>

            <h2>
                Making Hiring
                <span>Simple & Meaningful</span>
            </h2>

            <p>
                Quiet Hiring is built to make the hiring process easier
                for both candidates and companies.
            </p>

            <p>
                From freshers searching for their first opportunity to
                experienced professionals looking for their next career move,
                our platform helps people discover relevant opportunities.
            </p>

            <p>
                At the same time, companies can discover talented candidates
                and connect with the people they need.
            </p>

        </div>


        <div class="about-visual">

            <div class="visual-circle">
                <span>QH</span>
            </div>

            <div class="floating-card card-one">
                <strong>01</strong>
                <span>Find Opportunities</span>
            </div>

            <div class="floating-card card-two">
                <strong>02</strong>
                <span>Connect With Talent</span>
            </div>

        </div>

    </div>

</section>


<!-- What We Offer -->
<section class="about-features">

    <div class="features-heading">

        <span class="section-label">WHAT WE OFFER</span>

        <h2>
            Everything You Need To
            <span>Move Forward</span>
        </h2>

        <p>
            A simple platform designed around candidates and companies.
        </p>

    </div>


    <div class="feature-grid">

        <div class="feature-card">

            <div class="feature-number">01</div>

            <h3>Job Opportunities</h3>

            <p>
                Explore relevant job openings and discover your next
                professional opportunity.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-number">02</div>

            <h3>Internships</h3>

            <p>
                Find internship opportunities that can help you gain
                practical experience and build your career.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-number">03</div>

            <h3>For Freshers</h3>

            <p>
                Start your career by discovering opportunities designed
                for fresh graduates and beginners.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-number">04</div>

            <h3>For Companies</h3>

            <p>
                Companies can discover skilled candidates and build
                connections with the right talent.
            </p>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="about-cta">

    <div class="cta-content">

        <span class="section-label">YOUR NEXT STEP</span>

        <h2>
            Your Next Opportunity
            <span>Could Be Here.</span>
        </h2>

        <p>
            Discover jobs, internships and career opportunities
            with Quiet Hiring.
        </p>

        <a href="#" class="cta-button">
            Explore Opportunities
        </a>

    </div>

</section>

@endsection