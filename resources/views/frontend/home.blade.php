@extends('layouts.app')

@section('title', 'Quiet Hiring | Find Your Dream Job')

@section('description',
    'Find software, IT, fresher, internship, remote and local jobs with Quiet Hiring.'
)

@section('content')

<!-- =========================
     HERO
========================= -->

<section class="qh-hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <div class="qh-hero-content">

                    <div class="qh-small-title">
                        Your Career &nbsp;•&nbsp; Our Priority
                    </div>

                    <h1>
                        Find Your
                        <br>
                        <span>Dream Job.</span>
                    </h1>

                    <p class="qh-hero-description">
                        Explore thousands of job opportunities,
                        connect with top companies and take the
                        next step in your career.
                    </p>

                    <!-- Search -->
                    <form action="#" method="GET">

                        <div class="qh-search-box">

                            <div class="qh-search-field">

                                <i class="bi bi-search"></i>

                                <input
                                    type="text"
                                    name="keyword"
                                    placeholder="Job title, skills or company">

                            </div>

                            <div class="qh-search-field">

                                <i class="bi bi-geo-alt"></i>

                                <input
                                    type="text"
                                    name="location"
                                    placeholder="Location">

                            </div>

                            <div class="qh-search-field">

                                <i class="bi bi-grid"></i>

                                <select name="category">

                                    <option value="">
                                        All Categories
                                    </option>

                                    <option>
                                        IT & Software
                                    </option>

                                    <option>
                                        Development
                                    </option>

                                    <option>
                                        Design
                                    </option>

                                    <option>
                                        Marketing
                                    </option>

                                    <option>
                                        Finance
                                    </option>

                                </select>

                            </div>

                            <button
                                type="submit"
                                class="qh-search-button">

                                Search

                            </button>

                        </div>

                    </form>

                    <!-- Popular searches -->

                    <div class="qh-popular">

                        <span class="qh-popular-label">
                            Popular Searches:
                        </span>

                        <a href="#">PHP Developer</a>

                        <a href="#">Laravel</a>

                        <a href="#">Web Developer</a>

                        <a href="#">UI/UX Designer</a>

                        <a href="#">Digital Marketing</a>

                    </div>

                </div>

            </div>

            <!-- Right visual -->

            <div class="col-lg-5">

                <div class="qh-hero-visual">

                    <div class="qh-floating-card qh-card-main">

                        <div class="d-flex align-items-center gap-3">

                            <img
                                src="{{ asset('assets/images/logo.png') }}"
                                class="qh-mini-logo"
                                alt="Quiet Hiring">

                            <div>

                                <div class="qh-job-title">
                                    PHP Laravel Developer
                                </div>

                                <div class="qh-company">
                                    TechNova Solutions
                                </div>

                            </div>

                        </div>

                        <hr style="border-color:#333">

                        <div class="qh-job-meta">
                            <i class="bi bi-geo-alt"></i>
                            Lucknow, Uttar Pradesh
                        </div>

                        <div class="qh-job-meta mt-2">
                            <i class="bi bi-currency-rupee"></i>
                            3 - 5 LPA
                        </div>

                        <div class="qh-tags mt-3">

                            <span class="qh-tag">
                                PHP
                            </span>

                            <span class="qh-tag">
                                Laravel
                            </span>

                            <span class="qh-tag">
                                MySQL
                            </span>

                        </div>

                    </div>

                    <div class="qh-floating-card qh-card-small">

                        <div class="d-flex align-items-center gap-3">

                            <div class="qh-company-logo">
                                <i class="bi bi-briefcase"></i>
                            </div>

                            <div>

                                <div class="qh-job-title">
                                    2,456+ Jobs
                                </div>

                                <div class="qh-company">
                                    Waiting for you
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     WHATSAPP
========================= -->

<section class="py-4 bg-white">

    <div class="container">

        <div class="qh-whatsapp-banner">

            <div class="d-flex align-items-center gap-3">

                <div class="qh-whatsapp-icon">
                    <i class="bi bi-whatsapp"></i>
                </div>

                <div>

                    <h4>
                        Get Latest Jobs on WhatsApp
                    </h4>

                    <p>
                        Join our WhatsApp channel and never
                        miss a relevant job opportunity.
                    </p>

                </div>

            </div>

            <a href="#"
               class="qh-whatsapp-btn">

                <i class="bi bi-whatsapp me-1"></i>
                Join Channel

            </a>

        </div>

    </div>

</section>


<!-- =========================
     CATEGORIES
========================= -->

<section class="qh-section qh-section-white">

    <div class="container">

        <div class="qh-section-header">

            <div>

                <h2 class="qh-section-title">
                    Browse by Category
                </h2>

                <p class="qh-section-subtitle">
                    Find jobs in your area of interest
                </p>

            </div>

            <a href="#" class="qh-view-all">
                View All
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

        <div class="row g-3">

            @php

                $categories = [

                    [
                        'icon' => 'bi-code-slash',
                        'title' => 'IT & Software',
                        'jobs' => '1,245+ Jobs'
                    ],

                    [
                        'icon' => 'bi-megaphone',
                        'title' => 'Marketing',
                        'jobs' => '876+ Jobs'
                    ],

                    [
                        'icon' => 'bi-palette',
                        'title' => 'Design',
                        'jobs' => '542+ Jobs'
                    ],

                    [
                        'icon' => 'bi-cash-stack',
                        'title' => 'Finance',
                        'jobs' => '321+ Jobs'
                    ],

                    [
                        'icon' => 'bi-mortarboard',
                        'title' => 'Education',
                        'jobs' => '210+ Jobs'
                    ],

                    [
                        'icon' => 'bi-gear',
                        'title' => 'Engineering',
                        'jobs' => '654+ Jobs'
                    ],

                ];

            @endphp

            @foreach($categories as $category)

                <div class="col-6 col-md-4 col-lg-2">

                    <a href="#">

                        <div class="qh-category-card">

                            <div class="qh-category-icon">
                                <i class="bi {{ $category['icon'] }}"></i>
                            </div>

                            <h4>
                                {{ $category['title'] }}
                            </h4>

                            <p>
                                {{ $category['jobs'] }}
                            </p>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- =========================
     FEATURED JOBS
========================= -->

<section class="qh-section">

    <div class="container">

        <div class="qh-section-header">

            <div>

                <h2 class="qh-section-title">
                    Featured Jobs
                </h2>

                <p class="qh-section-subtitle">
                    Handpicked opportunities for you
                </p>

            </div>

            <a href="#" class="qh-view-all">
                View All
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

        <div class="row g-4">

            @php

                $jobs = [

                    [
                        'title' => 'PHP Laravel Developer',
                        'company' => 'TechNova Solutions',
                        'location' => 'Lucknow, UP',
                        'salary' => '3 - 5 LPA',
                        'tags' => ['PHP', 'Laravel', 'MySQL']
                    ],

                    [
                        'title' => 'Frontend Developer',
                        'company' => 'PixelCraft Agency',
                        'location' => 'Noida, UP',
                        'salary' => '2.5 - 4.5 LPA',
                        'tags' => ['HTML', 'CSS', 'JavaScript']
                    ],

                    [
                        'title' => 'Digital Marketing Executive',
                        'company' => 'GrowthX Media',
                        'location' => 'Lucknow, UP',
                        'salary' => '2 - 4 LPA',
                        'tags' => ['SEO', 'Social Media', 'Content']
                    ],

                    [
                        'title' => 'Software Developer',
                        'company' => 'NextGen Technologies',
                        'location' => 'Bengaluru, KA',
                        'salary' => '4 - 8 LPA',
                        'tags' => ['React', 'JavaScript', 'API']
                    ],

                ];

            @endphp

            @foreach($jobs as $job)

                <div class="col-md-6 col-lg-3">

                    <div class="qh-job-card">

                        <div class="qh-job-top">

                            <div class="qh-company-logo">
                                <i class="bi bi-code-slash"></i>
                            </div>

                            <a href="#"
                               class="qh-job-bookmark">

                                <i class="bi bi-heart"></i>

                            </a>

                        </div>

                        <h3>
                            <a href="#">
                                {{ $job['title'] }}
                            </a>
                        </h3>

                        <div class="qh-job-company">
                            {{ $job['company'] }}
                        </div>

                        <div class="qh-job-info">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                {{ $job['location'] }}
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                {{ $job['salary'] }}
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                Full Time
                            </span>

                        </div>

                        <div class="qh-tags">

                            @foreach($job['tags'] as $tag)

                                <span class="qh-tag">
                                    {{ $tag }}
                                </span>

                            @endforeach

                        </div>

                        <a href="#"
                           class="qh-apply-btn">

                            Apply Now

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- =========================
     WHY CHOOSE US
========================= -->

<section class="qh-section qh-section-white">

    <div class="container">

        <div class="qh-feature-banner">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <div class="qh-small-title">
                        Why Choose Us?
                    </div>

                    <h2>
                        Build Your Future With Quiet Hiring
                    </h2>

                    <p>
                        Discover better opportunities,
                        connect with companies and grow
                        your professional career.
                    </p>

                    <div class="row g-3 mt-3">

                        <div class="col-md-4">

                            <div class="qh-feature-point">
                                <i class="bi bi-shield-check"></i>
                                Trusted Companies
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="qh-feature-point">
                                <i class="bi bi-lightning-charge"></i>
                                Easy Application
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="qh-feature-point">
                                <i class="bi bi-graph-up-arrow"></i>
                                Career Growth
                            </div>

                        </div>

                    </div>

                    <a href="#"
                       class="qh-cta-btn mt-4">

                        Join Now

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     LOCATIONS
========================= -->

<section class="qh-section">

    <div class="container">

        <div class="qh-section-header">

            <div>

                <h2 class="qh-section-title">
                    Jobs by Location
                </h2>

                <p class="qh-section-subtitle">
                    Find opportunities near you
                </p>

            </div>

            <a href="#" class="qh-view-all">
                View All
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

        <div class="row g-3">

            @foreach([
                ['Lucknow, UP', '320+ Jobs'],
                ['Noida, UP', '540+ Jobs'],
                ['Delhi, NCR', '780+ Jobs'],
                ['Bengaluru, KA', '920+ Jobs'],
                ['Pune, MH', '610+ Jobs'],
                ['Hyderabad, TS', '480+ Jobs']
            ] as $location)

                <div class="col-6 col-md-4 col-lg-2">

                    <a href="#">

                        <div class="qh-location-card">

                            <i class="bi bi-geo-alt"></i>

                            <h5>
                                {{ $location[0] }}
                            </h5>

                            <p>
                                {{ $location[1] }}
                            </p>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- =========================
     HOW IT WORKS
========================= -->

<section class="qh-section qh-section-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="qh-section-title">
                How It Works
            </h2>

            <p class="qh-section-subtitle">
                Find your next opportunity in three simple steps
            </p>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="qh-step">

                    <div class="qh-step-number">
                        01
                    </div>

                    <h4>
                        Search Jobs
                    </h4>

                    <p>
                        Search jobs by skills,
                        location and category.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="qh-step">

                    <div class="qh-step-number">
                        02
                    </div>

                    <h4>
                        Apply Easily
                    </h4>

                    <p>
                        Create your profile and
                        apply to suitable jobs.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="qh-step">

                    <div class="qh-step-number">
                        03
                    </div>

                    <h4>
                        Get Hired
                    </h4>

                    <p>
                        Connect with employers
                        and grow your career.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     EMPLOYER CTA
========================= -->

<section class="qh-section">

    <div class="container">

        <div class="qh-employer-cta">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div class="qh-small-title">
                        For Employers
                    </div>

                    <h2>
                        Hire the Right Talent Faster
                    </h2>

                    <p>
                        Post your job and connect with
                        skilled candidates looking for
                        their next opportunity.
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="#"
                       class="qh-cta-btn">

                        <i class="bi bi-plus-circle me-1"></i>
                        Post a Job

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection