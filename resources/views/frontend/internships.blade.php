@extends('layouts.app')

@section('title', 'Internship Opportunities - Quiet Hiring')

@section('description', 'Find internships, work experience and career opportunities with Quiet Hiring.')

@section('content')

    <!-- =====================================================
         INTERNSHIP HERO
    ===================================================== -->
    <section class="qh-internship-hero">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <span class="qh-internship-eyebrow">
                        <i class="bi bi-stars"></i>
                        Build Experience. Build Your Future.
                    </span>

                    <h1>
                        Start Your Career
                        <span>Before You Graduate.</span>
                    </h1>

                    <p class="qh-internship-hero-text">
                        Discover internships that help you gain real-world
                        experience, learn new skills and connect with growing
                        companies.
                    </p>

                    <div class="qh-internship-hero-actions">

                        <a href="#internship-jobs" class="qh-internship-primary-btn">
                            Explore Internships
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="#why-internship" class="qh-internship-secondary-btn">
                            Why Internships?
                        </a>

                    </div>

                    <div class="qh-internship-mini-stats">

                        <div>
                            <strong>1,200+</strong>
                            <span>Internships</span>
                        </div>

                        <div>
                            <strong>350+</strong>
                            <span>Companies</span>
                        </div>

                        <div>
                            <strong>25+</strong>
                            <span>Job Categories</span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="qh-internship-visual">

                        <div class="qh-internship-floating-card qh-internship-card-one">
                            <i class="bi bi-briefcase"></i>
                            <div>
                                <strong>Software Intern</strong>
                                <span>Remote · 3 Months</span>
                            </div>
                        </div>

                        <div class="qh-internship-main-visual">

                            <div class="qh-visual-icon">
                                <i class="bi bi-laptop"></i>
                            </div>

                            <h3>
                                Your First Step
                                <br>
                                Starts Here.
                            </h3>

                            <p>
                                Learn. Work. Grow.
                            </p>

                            <div class="qh-visual-progress">
                                <span>Career Growth</span>
                                <strong>78%</strong>
                            </div>

                            <div class="qh-progress-bar">
                                <span></span>
                            </div>

                        </div>

                        <div class="qh-internship-floating-card qh-internship-card-two">
                            <i class="bi bi-graph-up-arrow"></i>
                            <div>
                                <strong>Skill Growth</strong>
                                <span>Learn from real projects</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         SEARCH
    ===================================================== -->
    <section class="qh-internship-search">

        <div class="container">

            <div class="qh-internship-search-card">

                <div class="qh-internship-search-heading">

                    <span>
                        <i class="bi bi-search"></i>
                        Find Your Internship
                    </span>

                    <h2>
                        Search internships that match your goals.
                    </h2>

                </div>

                <form class="qh-internship-search-form">

                    <div class="qh-internship-search-field">

                        <label>Internship / Skill</label>

                        <div class="qh-internship-input-wrap">

                            <i class="bi bi-search"></i>

                            <input type="text" placeholder="e.g. Web Development, Python">

                        </div>

                    </div>


                    <div class="qh-internship-search-field">

                        <label>Location</label>

                        <div class="qh-internship-input-wrap">

                            <i class="bi bi-geo-alt"></i>

                            <input type="text" placeholder="City or Remote">

                        </div>

                    </div>


                    <div class="qh-internship-search-field">

                        <label>Duration</label>

                        <div class="qh-internship-input-wrap">

                            <i class="bi bi-calendar3"></i>

                            <select>

                                <option selected>Any Duration</option>
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>6 Months</option>

                            </select>

                            <i class="bi bi-chevron-down qh-internship-select-arrow"></i>

                        </div>

                    </div>


                    <button type="button" class="qh-internship-search-btn">

                        <i class="bi bi-search"></i>
                        Search

                    </button>

                </form>

            </div>

        </div>

    </section>


    <!-- =====================================================
         INTERNSHIP JOBS
    ===================================================== -->
    <section class="qh-internship-jobs" id="internship-jobs">

        <div class="container">

            <div class="qh-internship-section-heading">

                <div>

                    <span class="qh-section-small-title">
                        Latest Opportunities
                    </span>

                    <h2>
                        Internships worth applying for.
                    </h2>

                </div>

                <p>
                    120+ internships available
                </p>

            </div>


            <div class="row g-4">

                <!-- FILTERS -->
                <div class="col-lg-3">

                    <div class="qh-internship-filter">

                        <div class="qh-internship-filter-head">

                            <h4>Filters</h4>

                            <a href="#">Clear All</a>

                        </div>


                        <div class="qh-internship-filter-group">

                            <h5>Internship Type</h5>

                            <label>
                                <input type="checkbox">
                                Full Time
                                <span>42</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                Part Time
                                <span>18</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                Internship
                                <span>64</span>
                            </label>

                        </div>


                        <div class="qh-internship-filter-group">

                            <h5>Work Mode</h5>

                            <label>
                                <input type="checkbox">
                                Remote
                                <span>38</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                Hybrid
                                <span>46</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                On-site
                                <span>36</span>
                            </label>

                        </div>


                        <div class="qh-internship-filter-group">

                            <h5>Duration</h5>

                            <label>
                                <input type="checkbox">
                                1 - 2 Months
                                <span>21</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                3 Months
                                <span>57</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                6 Months
                                <span>42</span>
                            </label>

                        </div>


                        <div class="qh-internship-filter-group">

                            <h5>Stipend</h5>

                            <label>
                                <input type="checkbox">
                                Unpaid
                                <span>12</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                ₹5K - ₹15K
                                <span>48</span>
                            </label>

                            <label>
                                <input type="checkbox">
                                ₹15K+
                                <span>60</span>
                            </label>

                        </div>

                    </div>

                </div>


                <!-- JOB LIST -->
                <div class="col-lg-9">

                    <div class="qh-internship-results-head">

                        <div>
                            <strong>120+</strong>
                            internships found
                        </div>

                        <select>
                            <option>Sort by Latest</option>
                            <option>Highest Stipend</option>
                            <option>Most Relevant</option>
                        </select>

                    </div>


                    <!-- CARD 1 -->
                    <div class="qh-internship-job-card">

                        <div class="qh-internship-job-top">

                            <div class="qh-internship-company-logo">
                                TN
                            </div>

                            <button class="qh-internship-save">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>


                        <div class="qh-internship-job-content">

                            <span class="qh-internship-featured">
                                <i class="bi bi-lightning-fill"></i>
                                Featured
                            </span>

                            <h3>
                                Software Development Intern
                            </h3>

                            <p class="qh-internship-company-name">
                                TechNova Solutions
                            </p>

                            <div class="qh-internship-job-meta">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Lucknow
                                </span>

                                <span>
                                    <i class="bi bi-clock"></i>
                                    3 Months
                                </span>

                                <span>
                                    <i class="bi bi-laptop"></i>
                                    Hybrid
                                </span>

                            </div>

                            <div class="qh-internship-tags">

                                <span>PHP</span>
                                <span>Laravel</span>
                                <span>MySQL</span>

                            </div>

                        </div>


                        <div class="qh-internship-job-bottom">

                            <div>

                                <strong>
                                    ₹12K - ₹18K
                                </strong>

                                <span>
                                    / month
                                </span>

                            </div>

                            <a href="{{ url('/internships/software-development-intern') }}">
                                View Internship
                                <i class="bi bi-arrow-up-right"></i>
                            </a>

                        </div>

                    </div>


                    <!-- CARD 2 -->
                    <div class="qh-internship-job-card">

                        <div class="qh-internship-job-top">

                            <div class="qh-internship-company-logo">
                                PW
                            </div>

                            <button class="qh-internship-save">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>


                        <div class="qh-internship-job-content">

                            <h3>
                                Frontend Development Intern
                            </h3>

                            <p class="qh-internship-company-name">
                                PixelWorks Digital
                            </p>

                            <div class="qh-internship-job-meta">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Noida
                                </span>

                                <span>
                                    <i class="bi bi-clock"></i>
                                    3 Months
                                </span>

                                <span>
                                    <i class="bi bi-laptop"></i>
                                    On-site
                                </span>

                            </div>

                            <div class="qh-internship-tags">

                                <span>HTML</span>
                                <span>CSS</span>
                                <span>JavaScript</span>
                                <span>Bootstrap</span>

                            </div>

                        </div>


                        <div class="qh-internship-job-bottom">

                            <div>

                                <strong>
                                    ₹10K - ₹15K
                                </strong>

                                <span>
                                    / month
                                </span>

                            </div>

                            <a href="{{ url('/jobs/laravel-developer') }}">
                                View Internship
                                <i class="bi bi-arrow-up-right"></i>
                            </a>

                        </div>

                    </div>


                    <!-- CARD 3 -->
                    <div class="qh-internship-job-card">

                        <div class="qh-internship-job-top">

                            <div class="qh-internship-company-logo">
                                AL
                            </div>

                            <button class="qh-internship-save">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>


                        <div class="qh-internship-job-content">

                            <h3>
                                Java Backend Intern
                            </h3>

                            <p class="qh-internship-company-name">
                                AppLabs Technologies
                            </p>

                            <div class="qh-internship-job-meta">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Remote
                                </span>

                                <span>
                                    <i class="bi bi-clock"></i>
                                    6 Months
                                </span>

                                <span>
                                    <i class="bi bi-house"></i>
                                    Remote
                                </span>

                            </div>

                            <div class="qh-internship-tags">

                                <span>Java</span>
                                <span>Spring Boot</span>
                                <span>SQL</span>

                            </div>

                        </div>


                        <div class="qh-internship-job-bottom">

                            <div>

                                <strong>
                                    ₹18K - ₹25K
                                </strong>

                                <span>
                                    / month
                                </span>

                            </div>

                            <a href="{{ url('/jobs/laravel-developer') }}">
                                View Internship
                                <i class="bi bi-arrow-up-right"></i>
                            </a>

                        </div>

                    </div>


                    <!-- CARD 4 -->
                    <div class="qh-internship-job-card">

                        <div class="qh-internship-job-top">

                            <div class="qh-internship-company-logo">
                                GS
                            </div>

                            <button class="qh-internship-save">
                                <i class="bi bi-bookmark"></i>
                            </button>

                        </div>


                        <div class="qh-internship-job-content">

                            <h3>
                                Python Development Intern
                            </h3>

                            <p class="qh-internship-company-name">
                                GrowthSoft Technologies
                            </p>

                            <div class="qh-internship-job-meta">

                                <span>
                                    <i class="bi bi-geo-alt"></i>
                                    Delhi NCR
                                </span>

                                <span>
                                    <i class="bi bi-clock"></i>
                                    3 Months
                                </span>

                                <span>
                                    <i class="bi bi-laptop"></i>
                                    Hybrid
                                </span>

                            </div>

                            <div class="qh-internship-tags">

                                <span>Python</span>
                                <span>Django</span>
                                <span>REST API</span>

                            </div>

                        </div>


                        <div class="qh-internship-job-bottom">

                            <div>

                                <strong>
                                    ₹15K - ₹22K
                                </strong>

                                <span>
                                    / month
                                </span>

                            </div>

                            <a href="{{ url('/jobs/laravel-developer') }}">
                                View Internship
                                <i class="bi bi-arrow-up-right"></i>
                            </a>

                        </div>

                    </div>


                    <!-- PAGINATION -->
                    <div class="qh-internship-pagination">

                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>

                        <a href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHY INTERNSHIP
    ===================================================== -->
    <section class="qh-internship-benefits" id="why-internship">

        <div class="container">

            <div class="qh-internship-section-heading text-center">

                <div class="mx-auto">

                    <span class="qh-section-small-title">
                        Why Internships Matter
                    </span>

                    <h2>
                        Experience is your biggest advantage.
                    </h2>

                    <p>
                        A good internship is more than a certificate.
                        It is your opportunity to understand real work,
                        develop practical skills and build confidence.
                    </p>

                </div>

            </div>


            <div class="row g-4 mt-2">

                <div class="col-md-4">

                    <div class="qh-benefit-card">

                        <div class="qh-benefit-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <h3>
                            Learn Real Skills
                        </h3>

                        <p>
                            Work on real projects and understand how
                            technology is actually used in the workplace.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="qh-benefit-card">

                        <div class="qh-benefit-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <h3>
                            Build Connections
                        </h3>

                        <p>
                            Work alongside professionals and build a
                            network that can support your career journey.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="qh-benefit-card">

                        <div class="qh-benefit-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>

                        <h3>
                            Get Career Ready
                        </h3>

                        <p>
                            Turn your internship experience into a strong
                            foundation for your first full-time opportunity.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CTA
    ===================================================== -->
    <section class="qh-internship-cta">

        <div class="container">

            <div class="qh-internship-cta-box">

                <div>

                    <span>
                        Ready to start?
                    </span>

                    <h2>
                        Your first opportunity
                        could be one search away.
                    </h2>

                    <p>
                        Explore internships and take the first step
                        towards building your career.
                    </p>

                </div>

                <a href="#internship-jobs">

                    Find Internships

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>

@endsection