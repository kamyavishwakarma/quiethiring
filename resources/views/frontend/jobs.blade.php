@extends('layouts.app')

@section('title', 'Find Jobs - Quiet Hiring')

@section('description', 'Find software, IT, fresher, internship and local job opportunities on Quiet Hiring.')

@section('content')

<!-- Page Header -->
<section class="qh-page-header">
    <div class="container">
        <div class="qh-page-header-content">
            <span class="qh-badge">
                <i class="bi bi-briefcase"></i>
                Explore Opportunities
            </span>

            <h1>Find Your Next Job</h1>

            <p>
                Discover the right opportunity for your skills, experience and career goals.
            </p>
        </div>
    </div>
</section>


<!-- Search Section -->
<section class="qh-jobs-search">
    <div class="container">

        <form class="qh-job-search-form">

            <div class="qh-search-field">
                <i class="bi bi-search"></i>
                <input
                    type="text"
                    placeholder="Job title, skills or keywords"
                >
            </div>

            <div class="qh-search-field">
                <i class="bi bi-geo-alt"></i>
                <input
                    type="text"
                    placeholder="Location"
                >
            </div>

            <button type="submit" class="qh-search-button">
                <i class="bi bi-search"></i>
                Search Jobs
            </button>

        </form>

    </div>
</section>


<!-- Jobs Listing -->
<section class="qh-jobs-section">
    <div class="container">

        <div class="row g-4">

            <!-- Filters -->
            <div class="col-lg-3">

                <div class="qh-filter-card">

                    <div class="qh-filter-header">
                        <h4>Filters</h4>

                        <a href="#">
                            Clear All
                        </a>
                    </div>


                    <!-- Job Type -->
                    <div class="qh-filter-group">

                        <h6>Job Type</h6>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Full Time</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Part Time</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Internship</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Contract</span>
                        </label>

                    </div>


                    <!-- Experience -->
                    <div class="qh-filter-group">

                        <h6>Experience</h6>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Fresher</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>1 - 2 Years</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>2 - 5 Years</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>5+ Years</span>
                        </label>

                    </div>


                    <!-- Work Mode -->
                    <div class="qh-filter-group">

                        <h6>Work Mode</h6>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>On-site</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Remote</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>Hybrid</span>
                        </label>

                    </div>


                    <!-- Salary -->
                    <div class="qh-filter-group">

                        <h6>Salary Range</h6>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>₹0 - ₹3 LPA</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>₹3 - ₹6 LPA</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>₹6 - ₹10 LPA</span>
                        </label>

                        <label class="qh-check">
                            <input type="checkbox">
                            <span>₹10+ LPA</span>
                        </label>

                    </div>

                </div>

            </div>


            <!-- Job Results -->
            <div class="col-lg-9">

                <div class="qh-results-header">

                    <div>
                        <h3>Latest Jobs</h3>
                        <p>Showing 24 job opportunities</p>
                    </div>

                    <select class="qh-sort-select">
                        <option>Most Relevant</option>
                        <option>Newest First</option>
                        <option>Salary: High to Low</option>
                        <option>Salary: Low to High</option>
                    </select>

                </div>


                <!-- Job Card 1 -->
                <div class="qh-job-list-card">

                    <div class="qh-company-logo">
                        <i class="bi bi-building"></i>
                    </div>

                    <div class="qh-job-list-content">

                        <div class="qh-job-list-top">

                            <div>
                                <h4>Laravel Developer</h4>

                                <p class="qh-company-name">
                                    Tech Solutions Pvt. Ltd.
                                </p>
                            </div>

                            <button class="qh-save-job">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>

                        <div class="qh-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Lucknow
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                1 - 3 Years
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                4 - 7 LPA
                            </span>

                        </div>

                        <div class="qh-job-tags">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <div class="qh-job-list-bottom">

                            <small>
                                <i class="bi bi-clock"></i>
                                Posted 2 hours ago
                            </small>

                            <a href="{{ url('/jobs/laravel-developer') }}" class="qh-apply-btn">
                                View Job
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Job Card 2 -->
                <div class="qh-job-list-card">

                    <div class="qh-company-logo">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <div class="qh-job-list-content">

                        <div class="qh-job-list-top">

                            <div>
                                <h4>Frontend Developer</h4>

                                <p class="qh-company-name">
                                    Digital Works
                                </p>
                            </div>

                            <button class="qh-save-job">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>

                        <div class="qh-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Noida
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                0 - 2 Years
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                3 - 6 LPA
                            </span>

                        </div>

                        <div class="qh-job-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                        </div>

                        <div class="qh-job-list-bottom">

                            <small>
                                <i class="bi bi-clock"></i>
                                Posted 5 hours ago
                            </small>

                            <a href= "{{ url('/jobs/laravel-developer') }}" class="qh-apply-btn">
                                View Job
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Job Card 3 -->
                <div class="qh-job-list-card">

                    <div class="qh-company-logo">
                        <i class="bi bi-phone"></i>
                    </div>

                    <div class="qh-job-list-content">

                        <div class="qh-job-list-top">

                            <div>
                                <h4>Flutter Developer</h4>

                                <p class="qh-company-name">
                                    App Innovation Labs
                                </p>
                            </div>

                            <button class="qh-save-job">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>

                        <div class="qh-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Remote
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                2 - 4 Years
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                6 - 10 LPA
                            </span>

                        </div>

                        <div class="qh-job-tags">
                            <span>Flutter</span>
                            <span>Dart</span>
                            <span>Firebase</span>
                            <span>API</span>
                        </div>

                        <div class="qh-job-list-bottom">

                            <small>
                                <i class="bi bi-clock"></i>
                                Posted yesterday
                            </small>

                            <a href="{{ url('/jobs/laravel-developer') }}" class="qh-apply-btn">
                                View Job
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Job Card 4 -->
                <div class="qh-job-list-card">

                    <div class="qh-company-logo">
                        <i class="bi bi-database"></i>
                    </div>

                    <div class="qh-job-list-content">

                        <div class="qh-job-list-top">

                            <div>
                                <h4>Backend Developer</h4>

                                <p class="qh-company-name">
                                    CodeCraft Technologies
                                </p>
                            </div>

                            <button class="qh-save-job">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>

                        <div class="qh-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Delhi
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                2 - 5 Years
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                5 - 9 LPA
                            </span>

                        </div>

                        <div class="qh-job-tags">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>REST API</span>
                        </div>

                        <div class="qh-job-list-bottom">

                            <small>
                                <i class="bi bi-clock"></i>
                                Posted 2 days ago
                            </small>

                            <a href="{{ url('/jobs/backend-developer') }}" class="qh-apply-btn">
                                View Job
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Pagination -->
                <div class="qh-pagination">

                    <a href="#" class="qh-page-arrow">
                        <i class="bi bi-chevron-left"></i>
                    </a>

                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>

                    <a href="#" class="qh-page-arrow">
                        <i class="bi bi-chevron-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection