@extends('layouts.app')

@section('title', 'Top Companies - Quiet Hiring')

@section('description', 'Explore companies hiring on Quiet Hiring and discover your next career opportunity.')

@section('content')

<!-- Companies Header -->
<section class="qh-page-header">
    <div class="container">
        <div class="qh-page-header-content">
            <span class="qh-badge">Explore Companies</span>

            <h1>Discover Great Companies</h1>

            <p>
                Explore companies, learn about their work culture and find
                opportunities that match your career goals.
            </p>
        </div>
    </div>
</section>


<!-- Companies Search -->
<section class="qh-companies-search">
    <div class="container">

        <div class="qh-company-search-card">

            <div class="qh-company-search-heading">
                <span class="qh-search-label">
                    <i class="bi bi-buildings"></i>
                    Company Directory
                </span>

                <h2>Find Companies</h2>

                <p>
                    Discover companies, explore opportunities and find the right workplace for you.
                </p>
            </div>

            <form class="qh-company-search-form">

                <!-- Company Name -->
                <div class="qh-company-search-field">
                    <label>Company Name</label>

                    <div class="qh-search-input-wrap">
                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            placeholder="Search company name"
                            class="qh-company-search-input"
                        >
                    </div>
                </div>


                <!-- Industry -->
                <div class="qh-company-search-field">
                    <label>Industry</label>

                    <div class="qh-search-input-wrap">
                        <i class="bi bi-grid"></i>

                        <select class="qh-company-search-input">
                            <option value="">All Industries</option>
                            <option value="software">Software Development</option>
                            <option value="it">Information Technology</option>
                            <option value="marketing">Marketing & Media</option>
                            <option value="finance">Finance & Banking</option>
                            <option value="education">Education & EdTech</option>
                            <option value="design">Design & Creative</option>
                        </select>

                        <i class="bi bi-chevron-down qh-select-arrow"></i>
                    </div>
                </div>


                <!-- Search Button -->
                <button type="submit" class="qh-company-search-btn">
                    <i class="bi bi-search"></i>
                    <span>Search Companies</span>
                </button>

            </form>

        </div>

    </div>
</section>


<!-- Companies -->
<section class="qh-companies-section">
    <div class="container">

        <div class="qh-results-header">
            <div>
                <h2>Featured Companies</h2>
                <p>Explore companies hiring talented professionals.</p>
            </div>

            <span class="qh-company-count">
                120+ Companies
            </span>
        </div>


        <div class="row g-4">

            <!-- Company 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="qh-company-card">

                    <div class="qh-company-card-top">

                        <div class="qh-company-logo-large">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <button class="qh-company-save">
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>

                    <h3>TechNova Solutions</h3>

                    <p class="qh-company-industry">
                        <i class="bi bi-building"></i>
                        Information Technology
                    </p>

                    <p class="qh-company-location">
                        <i class="bi bi-geo-alt"></i>
                        Lucknow, Uttar Pradesh
                    </p>

                    <div class="qh-company-stats">

                        <span>
                            <strong>85+</strong>
                            Jobs
                        </span>

                        <span>
                            <strong>50-200</strong>
                            Employees
                        </span>

                    </div>

                    <a href="#" class="qh-company-view-btn">
                        View Company
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>


            <!-- Company 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="qh-company-card">

                    <div class="qh-company-card-top">

                        <div class="qh-company-logo-large">
                            <i class="bi bi-laptop"></i>
                        </div>

                        <button class="qh-company-save">
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>

                    <h3>PixelCraft Agency</h3>

                    <p class="qh-company-industry">
                        <i class="bi bi-building"></i>
                        Digital & Creative
                    </p>

                    <p class="qh-company-location">
                        <i class="bi bi-geo-alt"></i>
                        Noida, Uttar Pradesh
                    </p>

                    <div class="qh-company-stats">

                        <span>
                            <strong>42+</strong>
                            Jobs
                        </span>

                        <span>
                            <strong>20-100</strong>
                            Employees
                        </span>

                    </div>

                    <a href="#" class="qh-company-view-btn">
                        View Company
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>


            <!-- Company 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="qh-company-card">

                    <div class="qh-company-card-top">

                        <div class="qh-company-logo-large">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>

                        <button class="qh-company-save">
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>

                    <h3>GrowthX Media</h3>

                    <p class="qh-company-industry">
                        <i class="bi bi-building"></i>
                        Marketing & Media
                    </p>

                    <p class="qh-company-location">
                        <i class="bi bi-geo-alt"></i>
                        Lucknow, Uttar Pradesh
                    </p>

                    <div class="qh-company-stats">

                        <span>
                            <strong>28+</strong>
                            Jobs
                        </span>

                        <span>
                            <strong>10-50</strong>
                            Employees
                        </span>

                    </div>

                    <a href="#" class="qh-company-view-btn">
                        View Company
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>


            <!-- Company 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="qh-company-card">

                    <div class="qh-company-card-top">

                        <div class="qh-company-logo-large">
                            <i class="bi bi-bank"></i>
                        </div>

                        <button class="qh-company-save">
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>

                    <h3>FinCore Services</h3>

                    <p class="qh-company-industry">
                        <i class="bi bi-building"></i>
                        Finance & Banking
                    </p>

                    <p class="qh-company-location">
                        <i class="bi bi-geo-alt"></i>
                        Delhi, NCR
                    </p>

                    <div class="qh-company-stats">

                        <span>
                            <strong>36+</strong>
                            Jobs
                        </span>

                        <span>
                            <strong>100-500</strong>
                            Employees
                        </span>

                    </div>

                    <a href="#" class="qh-company-view-btn">
                        View Company
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>


            <!-- Company 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="qh-company-card">

                    <div class="qh-company-card-top">

                        <div class="qh-company-logo-large">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <button class="qh-company-save">
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>

                    <h3>LearnSphere</h3>

                    <p class="qh-company-industry">
                        <i class="bi bi-building"></i>
                        Education & EdTech
                    </p>

                    <p class="qh-company-location">
                        <i class="bi bi-geo-alt"></i>
                        Bengaluru, Karnataka
                    </p>

                    <div class="qh-company-stats">

                        <span>
                            <strong>31+</strong>
                            Jobs
                        </span>

                        <span>
                            <strong>50-200</strong>
                            Employees
                        </span>

                    </div>

                    <a href="#" class="qh-company-view-btn">
                        View Company
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>


            <!-- Company 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="qh-company-card">

                    <div class="qh-company-card-top">

                        <div class="qh-company-logo-large">
                            <i class="bi bi-gear"></i>
                        </div>

                        <button class="qh-company-save">
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>

                    <h3>NextGen Technologies</h3>

                    <p class="qh-company-industry">
                        <i class="bi bi-building"></i>
                        Software & Technology
                    </p>

                    <p class="qh-company-location">
                        <i class="bi bi-geo-alt"></i>
                        Bengaluru, Karnataka
                    </p>

                    <div class="qh-company-stats">

                        <span>
                            <strong>64+</strong>
                            Jobs
                        </span>

                        <span>
                            <strong>200-500</strong>
                            Employees
                        </span>

                    </div>

                    <a href="#" class="qh-company-view-btn">
                        View Company
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>

        </div>


        <!-- Pagination -->
        <div class="qh-pagination justify-content-center mt-5">

            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>

            <a href="#">
                <i class="bi bi-chevron-right"></i>
            </a>

        </div>

    </div>
</section>

@endsection