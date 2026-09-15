@extends('layouts.app')

@section('title', 'Software Development Intern - Quiet Hiring')

@section('description', 'Apply for Software Development Intern opportunity at TechNova Solutions through Quiet Hiring.')

@section('content')

<!-- Internship Details Header -->
<section class="qh-internship-details-header">

    <div class="container">

        <div class="qh-internship-breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="bi bi-chevron-right"></i>

            <a href="{{ url('/internships') }}">Internships</a>
            <i class="bi bi-chevron-right"></i>

            <span>Software Development Intern</span>
        </div>

        <div class="row align-items-center g-4">

            <div class="col-lg-8">

                <div class="qh-internship-details-company">
                    <div class="qh-internship-details-logo">
                        TN
                    </div>

                    <div>
                        <span>TechNova Solutions</span>
                        <small>
                            <i class="bi bi-patch-check-fill"></i>
                            Verified Company
                        </small>
                    </div>
                </div>

                <span class="qh-internship-featured-badge">
                    Featured Internship
                </span>

                <h1>
                    Software Development Intern
                </h1>

                <p class="qh-internship-details-location">
                    <i class="bi bi-geo-alt"></i>
                    Lucknow, Uttar Pradesh
                </p>

                <div class="qh-internship-details-meta">

                    <div>
                        <i class="bi bi-calendar3"></i>
                        <span>
                            <small>Duration</small>
                            3 Months
                        </span>
                    </div>

                    <div>
                        <i class="bi bi-wallet2"></i>
                        <span>
                            <small>Stipend</small>
                            ₹12K - ₹18K / Month
                        </span>
                    </div>

                    <div>
                        <i class="bi bi-building"></i>
                        <span>
                            <small>Work Mode</small>
                            Hybrid
                        </span>
                    </div>

                    <div>
                        <i class="bi bi-briefcase"></i>
                        <span>
                            <small>Internship Type</small>
                            Full Time
                        </span>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="qh-internship-header-action">

                    <a
                        href="#"
                        class="qh-internship-main-apply-btn">
                        Apply Now
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <button
                        type="button"
                        class="qh-internship-save-btn">
                        <i class="bi bi-bookmark"></i>
                        Save Internship
                    </button>

                    <p>
                        <i class="bi bi-shield-check"></i>
                        Safe & secure application
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Internship Details Content -->
<section class="qh-internship-details-section">

    <div class="container">

        <div class="row g-4">

            <!-- Main Content -->
            <div class="col-lg-8">

                <!-- About Internship -->
                <div class="qh-internship-content-card">

                    <h2>About the Internship</h2>

                    <p>
                        TechNova Solutions is looking for a motivated Software
                        Development Intern to join our technology team. This
                        internship is designed for students and fresh graduates
                        who want to gain practical experience working on
                        real-world software projects.
                    </p>

                    <p>
                        You will work closely with experienced developers and
                        get hands-on exposure to modern web development,
                        databases and application development practices.
                    </p>

                </div>


                <!-- Responsibilities -->
                <div class="qh-internship-content-card">

                    <h2>What You'll Do</h2>

                    <ul class="qh-internship-details-list">

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Assist developers in building and maintaining
                                web applications.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Write clean, readable and maintainable code.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Work with databases and perform basic CRUD
                                operations.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Participate in debugging and testing of
                                applications.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Collaborate with the development team on
                                assigned projects.
                            </span>
                        </li>

                    </ul>

                </div>


                <!-- Requirements -->
                <div class="qh-internship-content-card">

                    <h2>Requirements</h2>

                    <ul class="qh-internship-details-list">

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Currently pursuing or recently completed a
                                degree in Computer Science, IT or a related
                                field.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Basic understanding of programming concepts.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Good problem-solving and logical thinking
                                skills.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check2"></i>
                            <span>
                                Willingness to learn new technologies.
                            </span>
                        </li>

                    </ul>

                </div>


                <!-- Required Skills -->
                <div class="qh-internship-content-card">

                    <h2>Required Skills</h2>

                    <div class="qh-internship-skills">

                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>Git</span>

                    </div>

                </div>


                <!-- Learning -->
                <div class="qh-internship-content-card">

                    <h2>What You'll Learn</h2>

                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="qh-learning-item">

                                <div class="qh-learning-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>

                                <div>
                                    <h4>Real-World Development</h4>
                                    <p>
                                        Learn how professional software
                                        projects are developed.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="qh-learning-item">

                                <div class="qh-learning-icon">
                                    <i class="bi bi-database"></i>
                                </div>

                                <div>
                                    <h4>Database Skills</h4>
                                    <p>
                                        Work with databases and understand
                                        application data flow.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="qh-learning-item">

                                <div class="qh-learning-icon">
                                    <i class="bi bi-git"></i>
                                </div>

                                <div>
                                    <h4>Version Control</h4>
                                    <p>
                                        Understand Git and collaborative
                                        development workflows.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="qh-learning-item">

                                <div class="qh-learning-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <div>
                                    <h4>Team Collaboration</h4>
                                    <p>
                                        Learn how developers collaborate in
                                        professional teams.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Benefits -->
                <div class="qh-internship-content-card">

                    <h2>Internship Benefits</h2>

                    <div class="qh-internship-benefits">

                        <div>
                            <i class="bi bi-award"></i>
                            <span>Certificate of Internship</span>
                        </div>

                        <div>
                            <i class="bi bi-person-workspace"></i>
                            <span>Hands-on Project Experience</span>
                        </div>

                        <div>
                            <i class="bi bi-person-check"></i>
                            <span>Mentorship from Developers</span>
                        </div>

                        <div>
                            <i class="bi bi-graph-up-arrow"></i>
                            <span>Career Growth Opportunity</span>
                        </div>

                    </div>

                </div>


                <!-- About Company -->
                <div class="qh-internship-content-card">

                    <h2>About TechNova Solutions</h2>

                    <p>
                        TechNova Solutions is a growing technology company
                        focused on software development, digital solutions
                        and modern web applications.
                    </p>

                    <p>
                        Our team works with businesses to build scalable
                        digital products while providing young professionals
                        with opportunities to learn and grow.
                    </p>

                    <div class="qh-company-details">

                        <div>
                            <i class="bi bi-people"></i>
                            <span>
                                <small>Company Size</small>
                                50 - 200 Employees
                            </span>
                        </div>

                        <div>
                            <i class="bi bi-geo-alt"></i>
                            <span>
                                <small>Location</small>
                                Lucknow, Uttar Pradesh
                            </span>
                        </div>

                        <div>
                            <i class="bi bi-briefcase"></i>
                            <span>
                                <small>Industry</small>
                                Software & Technology
                            </span>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Sidebar -->
            <div class="col-lg-4">

                <div class="qh-internship-sidebar">

                    <!-- Quick Info -->
                    <div class="qh-internship-sidebar-card">

                        <h3>Internship Overview</h3>

                        <div class="qh-quick-info-item">

                            <i class="bi bi-calendar3"></i>

                            <span>
                                <small>Duration</small>
                                3 Months
                            </span>

                        </div>

                        <div class="qh-quick-info-item">

                            <i class="bi bi-wallet2"></i>

                            <span>
                                <small>Monthly Stipend</small>
                                ₹12K - ₹18K
                            </span>

                        </div>

                        <div class="qh-quick-info-item">

                            <i class="bi bi-house-door"></i>

                            <span>
                                <small>Work Mode</small>
                                Hybrid
                            </span>

                        </div>

                        <div class="qh-quick-info-item">

                            <i class="bi bi-mortarboard"></i>

                            <span>
                                <small>Experience</small>
                                Fresher / Student
                            </span>

                        </div>

                        <div class="qh-quick-info-item">

                            <i class="bi bi-translate"></i>

                            <span>
                                <small>Language</small>
                                English
                            </span>

                        </div>

                    </div>


                    <!-- Application Card -->
                    <div class="qh-internship-sidebar-card qh-internship-apply-card">

                        <div class="qh-apply-card-icon">
                            <i class="bi bi-send"></i>
                        </div>

                        <h3>Ready to Start?</h3>

                        <p>
                            Take your first step toward building real-world
                            experience.
                        </p>

                        <a
                            href="#"
                            class="qh-internship-sidebar-apply">
                            Apply for this Internship
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>


                    <!-- Safety -->
                    <div class="qh-internship-safety-card">

                        <div class="qh-safety-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>
                            <h4>Stay Safe</h4>

                            <p>
                                Quiet Hiring never asks candidates for
                                registration or application fees.
                            </p>
                        </div>

                    </div>


                    <!-- Share -->
                    <div class="qh-internship-share-card">

                        <h4>Share this Internship</h4>

                        <div class="qh-share-buttons">

                            <button type="button">
                                <i class="bi bi-link-45deg"></i>
                            </button>

                            <button type="button">
                                <i class="bi bi-whatsapp"></i>
                            </button>

                            <button type="button">
                                <i class="bi bi-linkedin"></i>
                            </button>

                            <button type="button">
                                <i class="bi bi-envelope"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection