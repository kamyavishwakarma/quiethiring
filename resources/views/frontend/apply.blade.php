@extends('layouts.app')

@section('title', 'Apply for Laravel Developer - Quiet Hiring')

@section('description', 'Apply for the Laravel Developer position at Quiet Hiring.')

@section('content')

<section class="qh-apply-page">

    <div class="container">

        <div class="qh-apply-header">
            <span class="qh-badge">Job Application</span>
            <h1>Apply for Laravel Developer</h1>
            <p>Complete the form below to submit your application.</p>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="qh-apply-form-card">

                    <div class="qh-apply-job-info">
                        <div class="qh-company-logo">
                            <i class="bi bi-building"></i>
                        </div>

                        <div>
                            <h4>Laravel Developer</h4>
                            <p>Tech Solutions Pvt. Ltd.</p>

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
                        </div>
                    </div>

                    <hr>

                    <form action="#" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row g-4">

                            <div class="col-md-6">
                                <label for="name">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control qh-form-control"
                                    placeholder="Enter your full name"
                                    required
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="email">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control qh-form-control"
                                    placeholder="Enter your email"
                                    required
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="phone">
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    class="form-control qh-form-control"
                                    placeholder="Enter your phone number"
                                    required
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="experience">
                                    Experience
                                </label>

                                <select
                                    id="experience"
                                    name="experience"
                                    class="form-select qh-form-control"
                                    required
                                >
                                    <option value="">Select experience</option>
                                    <option value="fresher">Fresher</option>
                                    <option value="0-1">0 - 1 Year</option>
                                    <option value="1-3">1 - 3 Years</option>
                                    <option value="3-5">3 - 5 Years</option>
                                    <option value="5+">5+ Years</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="resume">
                                    Upload Resume
                                </label>

                                <input
                                    type="file"
                                    id="resume"
                                    name="resume"
                                    class="form-control qh-form-control"
                                    accept=".pdf,.doc,.docx"
                                    required
                                >

                                <small>
                                    Accepted formats: PDF, DOC, DOCX
                                </small>
                            </div>

                            <div class="col-12">
                                <label for="cover_letter">
                                    Cover Letter
                                </label>

                                <textarea
                                    id="cover_letter"
                                    name="cover_letter"
                                    rows="6"
                                    class="form-control qh-form-control"
                                    placeholder="Tell the employer why you are a good fit for this job..."
                                ></textarea>
                            </div>

                            <div class="col-12">

                                <div class="qh-application-notice">
                                    <i class="bi bi-shield-check"></i>

                                    <span>
                                        Your application information will be kept
                                        confidential and shared only with the employer.
                                    </span>
                                </div>

                            </div>

                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="qh-main-apply-btn w-100"
                                >
                                    Submit Application
                                    <i class="bi bi-arrow-right"></i>
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection