@extends('layouts.app')

@section('title', 'Fresher Jobs - Quiet Hiring')

@section('description', 'Find the latest fresher jobs, graduate jobs and entry-level opportunities on Quiet Hiring.')

@section('content')

<!-- =========================================================
     FRESHERS PAGE HEADER
     ========================================================= -->

<section class="qh-page-header">
    <div class="container">

        <div class="qh-page-header-content">

            <span class="qh-badge">
                <i class="bi bi-mortarboard"></i>
                Freshers
            </span>

            <h1>
                Start Your Career With the Right Opportunity
            </h1>

            <p>
                Explore verified fresher and entry-level jobs
                from companies hiring fresh talent.
            </p>

        </div>

    </div>
</section>


<!-- =========================================================
     FRESHER JOB SEARCH
     ========================================================= -->

<section class="qh-fresher-search">
    <div class="container">

        <div class="qh-fresher-search-card">

            <div class="qh-fresher-search-heading">

                <div>
                    <span class="qh-search-label">
                        <i class="bi bi-search"></i>
                        Find Fresher Jobs
                    </span>

                    <h2>
                        Search Jobs For Freshers
                    </h2>

                    <p>
                        Search by job title, skill, company or location.
                    </p>
                </div>

            </div>


            <form class="qh-fresher-search-form">

                <!-- Keyword -->

                <div class="qh-fresher-search-field">

                    <label>
                        Job Title or Skill
                    </label>

                    <div class="qh-fresher-input-wrap">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            class="qh-fresher-search-input"
                            placeholder="e.g. Java Developer, PHP, React"
                        >

                    </div>

                </div>


                <!-- Location -->

                <div class="qh-fresher-search-field">

                    <label>
                        Location
                    </label>

                    <div class="qh-fresher-input-wrap">

                        <i class="bi bi-geo-alt"></i>

                        <input
                            type="text"
                            class="qh-fresher-search-input"
                            placeholder="e.g. Lucknow, Delhi, Remote"
                        >

                    </div>

                </div>


                <!-- Search Button -->

                <button
                    type="submit"
                    class="qh-fresher-search-btn"
                >
                    <i class="bi bi-search"></i>
                    Search Jobs
                </button>

            </form>

        </div>

    </div>
</section>


<!-- =========================================================
     FRESHER JOBS
     ========================================================= -->

<section class="qh-fresher-jobs-section">

    <div class="container">

        <div class="row g-4">

            <!-- =================================================
                 SIDEBAR FILTERS
                 ================================================= -->

            <div class="col-lg-3">

                <div class="qh-fresher-filter-card">

                    <div class="qh-fresher-filter-header">

                        <h3>
                            Filters
                        </h3>

                        <a href="#">
                            Clear All
                        </a>

                    </div>


                    <!-- Job Type -->

                    <div class="qh-fresher-filter-group">

                        <h4>
                            Job Type
                        </h4>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>Full Time</span>
                            <small>18</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>Internship</span>
                            <small>12</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>Part Time</span>
                            <small>5</small>
                        </label>

                    </div>


                    <!-- Experience -->

                    <div class="qh-fresher-filter-group">

                        <h4>
                            Experience
                        </h4>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>0 - 1 Year</span>
                            <small>25</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>0 - 2 Years</span>
                            <small>17</small>
                        </label>

                    </div>


                    <!-- Work Mode -->

                    <div class="qh-fresher-filter-group">

                        <h4>
                            Work Mode
                        </h4>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>On-site</span>
                            <small>21</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>Remote</span>
                            <small>9</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>Hybrid</span>
                            <small>6</small>
                        </label>

                    </div>


                    <!-- Salary -->

                    <div class="qh-fresher-filter-group">

                        <h4>
                            Salary
                        </h4>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>2 - 4 LPA</span>
                            <small>16</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>4 - 6 LPA</span>
                            <small>10</small>
                        </label>

                        <label class="qh-fresher-check">
                            <input type="checkbox">
                            <span>6+ LPA</span>
                            <small>7</small>
                        </label>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 JOB RESULTS
                 ================================================= -->

            <div class="col-lg-9">

                <div class="qh-fresher-results-header">

                    <div>

                        <h2>
                            Latest Fresher Jobs
                        </h2>

                        <p>
                            30+ opportunities available for freshers
                        </p>

                    </div>


                    <div class="qh-fresher-sort">

                        <label>
                            Sort by
                        </label>

                        <select>
                            <option>Latest Jobs</option>
                            <option>Most Relevant</option>
                            <option>Highest Salary</option>
                        </select>

                    </div>

                </div>


                <!-- =================================================
                     JOB CARD 1
                     ================================================= -->

                <div class="qh-fresher-job-card">

                    <div class="qh-fresher-job-top">

                        <div class="qh-fresher-company-logo">
                            TS
                        </div>

                        <button
                            type="button"
                            class="qh-fresher-save"
                            aria-label="Save job"
                        >
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>


                    <div class="qh-fresher-job-content">

                        <span class="qh-fresher-job-type">
                            Full Time
                        </span>

                        <h3>
                            Junior Software Developer
                        </h3>

                        <h4>
                            TechNova Solutions
                        </h4>

                        <div class="qh-fresher-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Lucknow
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                0 - 1 Year
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                3 - 5 LPA
                            </span>

                        </div>


                        <div class="qh-fresher-tags">

                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>MySQL</span>

                        </div>

                    </div>


                    <div class="qh-fresher-job-bottom">

                        <small>
                            Posted 2 days ago
                        </small>

                        <a
                            href="{{ url('/jobs/laravel-developer') }}"
                            class="qh-fresher-view-btn"
                        >
                            View Job
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <!-- =================================================
                     JOB CARD 2
                     ================================================= -->

                <div class="qh-fresher-job-card">

                    <div class="qh-fresher-job-top">

                        <div class="qh-fresher-company-logo">
                            PW
                        </div>

                        <button
                            type="button"
                            class="qh-fresher-save"
                            aria-label="Save job"
                        >
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>


                    <div class="qh-fresher-job-content">

                        <span class="qh-fresher-job-type">
                            Full Time
                        </span>

                        <h3>
                            Junior Frontend Developer
                        </h3>

                        <h4>
                            PixelWorks Digital
                        </h4>

                        <div class="qh-fresher-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Noida
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                0 - 1 Year
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                3 - 4.5 LPA
                            </span>

                        </div>


                        <div class="qh-fresher-tags">

                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>

                        </div>

                    </div>


                    <div class="qh-fresher-job-bottom">

                        <small>
                            Posted 3 days ago
                        </small>

                        <a
                            href="{{ url('/jobs/laravel-developer') }}"
                            class="qh-fresher-view-btn"
                        >
                            View Job
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <!-- =================================================
                     JOB CARD 3
                     ================================================= -->

                <div class="qh-fresher-job-card">

                    <div class="qh-fresher-job-top">

                        <div class="qh-fresher-company-logo">
                            AL
                        </div>

                        <button
                            type="button"
                            class="qh-fresher-save"
                            aria-label="Save job"
                        >
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>


                    <div class="qh-fresher-job-content">

                        <span class="qh-fresher-job-type">
                            Internship
                        </span>

                        <h3>
                            Software Development Intern
                        </h3>

                        <h4>
                            AppLabs Technologies
                        </h4>

                        <div class="qh-fresher-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Remote
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                0 - 1 Year
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                15K - 25K / Month
                            </span>

                        </div>


                        <div class="qh-fresher-tags">

                            <span>Java</span>
                            <span>Spring Boot</span>
                            <span>SQL</span>

                        </div>

                    </div>


                    <div class="qh-fresher-job-bottom">

                        <small>
                            Posted 4 days ago
                        </small>

                        <a
                            href="{{ url('/jobs/laravel-developer') }}"
                            class="qh-fresher-view-btn"
                        >
                            View Job
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <!-- =================================================
                     JOB CARD 4
                     ================================================= -->

                <div class="qh-fresher-job-card">

                    <div class="qh-fresher-job-top">

                        <div class="qh-fresher-company-logo">
                            GS
                        </div>

                        <button
                            type="button"
                            class="qh-fresher-save"
                            aria-label="Save job"
                        >
                            <i class="bi bi-bookmark"></i>
                        </button>

                    </div>


                    <div class="qh-fresher-job-content">

                        <span class="qh-fresher-job-type">
                            Full Time
                        </span>

                        <h3>
                            Graduate Trainee Engineer
                        </h3>

                        <h4>
                            GrowthSoft Technologies
                        </h4>

                        <div class="qh-fresher-job-meta">

                            <span>
                                <i class="bi bi-geo-alt"></i>
                                Delhi NCR
                            </span>

                            <span>
                                <i class="bi bi-briefcase"></i>
                                0 - 2 Years
                            </span>

                            <span>
                                <i class="bi bi-currency-rupee"></i>
                                4 - 6 LPA
                            </span>

                        </div>


                        <div class="qh-fresher-tags">

                            <span>Python</span>
                            <span>Django</span>
                            <span>REST API</span>

                        </div>

                    </div>


                    <div class="qh-fresher-job-bottom">

                        <small>
                            Posted 5 days ago
                        </small>

                        <a
                            href="{{ url('/jobs/laravel-developer') }}"
                            class="qh-fresher-view-btn"
                        >
                            View Job
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>


                <!-- =================================================
                     PAGINATION
                     ================================================= -->

                <div class="qh-pagination">

                    <a href="#" class="disabled">
                        <i class="bi bi-chevron-left"></i>
                    </a>

                    <a href="#" class="active">
                        1
                    </a>

                    <a href="#">
                        2
                    </a>

                    <a href="#">
                        3
                    </a>

                    <a href="#">
                        4
                    </a>

                    <a href="#">
                        5
                    </a>

                    <a href="#">
                        <i class="bi bi-chevron-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FRESHER CTA
     ========================================================= -->

<section class="qh-fresher-cta">

    <div class="container">

        <div class="qh-fresher-cta-card">

            <div>

                <span>
                    Start Your Career
                </span>

                <h2>
                    Your First Job Could Be Your Best Opportunity.
                </h2>

                <p>
                    Create your profile and discover opportunities
                    that match your skills and career goals.
                </p>

            </div>

            <a href="#" class="qh-fresher-cta-btn">
                Create Your Profile
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>

@endsection