@extends('layouts.app')

@section('title', 'Laravel Developer - Quiet Hiring')

@section('description', 'View complete job details, requirements and application information.')

@section('content')

    <!-- Job Details Header -->
    <section class="qh-job-details-header">
        <div class="container">

            <div class="qh-breadcrumb">
                <a href="/">Home</a>
                <i class="bi bi-chevron-right"></i>
                <a href="/jobs">Jobs</a>
                <i class="bi bi-chevron-right"></i>
                <span>Laravel Developer</span>
            </div>

            <div class="qh-details-heading">

                <div class="qh-company-logo qh-details-logo">
                    <i class="bi bi-building"></i>
                </div>

                <div class="qh-details-title">

                    <span class="qh-job-type-badge">
                        Full Time
                    </span>

                    <h1>Laravel Developer</h1>

                    <p>
                        Tech Solutions Pvt. Ltd.
                    </p>

                    <div class="qh-details-meta">

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

                        <span>
                            <i class="bi bi-clock"></i>
                            Posted 2 hours ago
                        </span>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Job Details Content -->
    <section class="qh-job-details-section">

        <div class="container">

            <div class="row g-4">

                <!-- Main Content -->
                <div class="col-lg-8">

                    <!-- About Job -->
                    <div class="qh-details-card">

                        <h3>About the Job</h3>

                        <p>
                            We are looking for a skilled Laravel Developer to join our
                            development team. The ideal candidate should have strong
                            knowledge of PHP and Laravel and should be comfortable
                            working with databases and REST APIs.
                        </p>

                        <p>
                            You will work closely with our development and product teams
                            to build reliable, scalable and user-friendly web applications.
                        </p>

                    </div>


                    <!-- Responsibilities -->
                    <div class="qh-details-card">

                        <h3>Job Responsibilities</h3>

                        <ul class="qh-details-list">

                            <li>
                                Develop and maintain web applications using Laravel.
                            </li>

                            <li>
                                Write clean, reusable and maintainable PHP code.
                            </li>

                            <li>
                                Design and integrate REST APIs.
                            </li>

                            <li>
                                Work with MySQL databases and optimize queries.
                            </li>

                            <li>
                                Collaborate with frontend developers and designers.
                            </li>

                            <li>
                                Troubleshoot and resolve application issues.
                            </li>

                            <li>
                                Participate in code reviews and development planning.
                            </li>

                        </ul>

                    </div>


                    <!-- Requirements -->
                    <div class="qh-details-card">

                        <h3>Requirements</h3>

                        <ul class="qh-details-list">

                            <li>
                                1 - 3 years of experience in PHP development.
                            </li>

                            <li>
                                Strong knowledge of Laravel framework.
                            </li>

                            <li>
                                Good understanding of MySQL.
                            </li>

                            <li>
                                Knowledge of HTML, CSS and JavaScript.
                            </li>

                            <li>
                                Understanding of REST APIs.
                            </li>

                            <li>
                                Good problem-solving and communication skills.
                            </li>

                        </ul>

                    </div>


                    <!-- Skills -->
                    <div class="qh-details-card">

                        <h3>Required Skills</h3>

                        <div class="qh-details-skills">

                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>REST API</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                            <span>Git</span>

                        </div>

                    </div>


                    <!-- Benefits -->
                    <div class="qh-details-card">

                        <h3>Benefits</h3>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="qh-benefit-item">
                                    <i class="bi bi-house"></i>
                                    <span>Hybrid Work Option</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="qh-benefit-item">
                                    <i class="bi bi-calendar-check"></i>
                                    <span>Flexible Working Hours</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="qh-benefit-item">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <span>Career Growth</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="qh-benefit-item">
                                    <i class="bi bi-people"></i>
                                    <span>Friendly Work Environment</span>
                                </div>
                            </div>

                        </div>

                    </div>


                    <!-- Company -->
                    <div class="qh-details-card">

                        <h3>About the Company</h3>

                        <p>
                            Tech Solutions Pvt. Ltd. is a software development company
                            focused on creating modern digital products and business
                            solutions.
                        </p>

                        <div class="qh-company-info">

                            <div>
                                <i class="bi bi-building"></i>
                                <span>Information Technology</span>
                            </div>

                            <div>
                                <i class="bi bi-people"></i>
                                <span>50 - 200 Employees</span>
                            </div>

                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <span>Lucknow, Uttar Pradesh</span>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Sidebar -->
                <div class="col-lg-4">

                    <div class="qh-apply-card">

                        <h3>Interested in this job?</h3>

                        <p>
                            Apply now and take the next step in your career.
                        </p>

                        <a href="{{ url('/jobs/laravel-developer/apply') }}" class="qh-main-apply-btn">
                            Apply Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <button class="qh-save-details-btn">
                            <i class="bi bi-bookmark"></i>
                            Save Job
                        </button>

                        <div class="qh-apply-divider"></div>

                        <div class="qh-quick-info">

                            <div>
                                <i class="bi bi-briefcase"></i>

                                <div>
                                    <small>Experience</small>
                                    <strong>1 - 3 Years</strong>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-currency-rupee"></i>

                                <div>
                                    <small>Salary</small>
                                    <strong>4 - 7 LPA</strong>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-geo-alt"></i>

                                <div>
                                    <small>Location</small>
                                    <strong>Lucknow</strong>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-person-workspace"></i>

                                <div>
                                    <small>Work Mode</small>
                                    <strong>Hybrid</strong>
                                </div>
                            </div>

                        </div>

                    </div>


                    <!-- Safety Card -->
                    <div class="qh-safety-card">

                        <div class="qh-safety-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>
                            <h5>Stay Safe</h5>

                            <p>
                                Never pay money to apply for a job.
                                Quiet Hiring does not charge candidates
                                for job applications.
                            </p>
                        </div>

                    </div>


                    <!-- Share Card -->
                    <div class="qh-share-card">

                        <h5>Share this job</h5>

                        <div class="qh-share-buttons">

                            <button>
                                <i class="bi bi-whatsapp"></i>
                            </button>

                            <button>
                                <i class="bi bi-linkedin"></i>
                            </button>

                            <button>
                                <i class="bi bi-facebook"></i>
                            </button>

                            <button>
                                <i class="bi bi-link-45deg"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection