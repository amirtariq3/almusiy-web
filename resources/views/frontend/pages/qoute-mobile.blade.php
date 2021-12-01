@extends('frontend.layouts.app')

@section('title')
    Al-Muhsiy Group
@endsection

@push('style')
@endpush

@section('contents')

    <!-- contact form -->
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: #148bb3;"><i class="fa fa-envelope"></i> Website Questionnaire
                    </div>
                    <div class="card-body" style="border:1px solid #148bb3">
                        <form>

                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname" class="lbl">Your Name</label>
                                <input type="text" class="form-control" id="firstname"  placeholder="Enter name" name="name" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_name" class="lbl">Company Name</label>
                                    <input type="text" class="form-control" id="company_name"  placeholder="Company name" name="company_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="lbl">Email</label>
                                    <input type="email" class="form-control" id="email"  placeholder="Enter Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_number" class="lbl">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile_number"  placeholder="Enter mobile number" name="mobile" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_do" class="lbl">What does your company do?</label>
                                    <input type="text" class="form-control" id="company_do"  placeholder="your company do" name="company_do" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address" class="lbl">address</label>
                                    <input type="text" class="form-control" id="address"  placeholder="Address" name="address" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="hosting" class="lbl">Do you need us to handle hosting?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hosting" id="hosting" value="" checked>
                                    <label class="form-check-label" for="hosting">
                                        Yes
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hosting" id="hosting" value="">
                                    <label class="form-check-label" for="hosting">
                                        No
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="domain" class="lbl">Do you need us to buy your domain?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="domain" id="hosting" value="" checked>
                                    <label class="form-check-label" for="hosting">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="domain" id="hosting" value="">
                                    <label class="form-check-label" for="domain">
                                    No
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <label for="project_deadline" class="lbl">Do you have a URL in mind for your website?</label>
                                    <input type="date" class="form-control" id="project_deadline"  placeholder="Project deadline" name="project_deadline" required>
                                </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <label for="project_budget" class="lbl">Could you give us a figure for your budget for the website project?</label>
                                    <input type="number" class="form-control" id="project_budget"  placeholder="Project budget" name="project_budget" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="project_type" class="lbl">I want this site because:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I need to build awareness for my brand
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I need to offer a contact point to my clients
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I need my company to have a better image online
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I need to sell my product/service through my site
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I need to reach people in many languages
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I need somewhere to promote my latest product/service
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_type" name="project_type">
                                    <label class="form-check-label" for="project_type">
                                        I have my own reasons
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="project_target" class="lbl">My site will be built to target:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_target" name="project_target">
                                    <label class="form-check-label" for="project_target">
                                        Business Customer
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_target" name="project_target">
                                    <label class="form-check-label" for="project_target">
                                        Consumer
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="client_target" class="lbl">I’d like to target clients who are:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="client_target" name="client_target">
                                    <label class="form-check-label" for="project_target">
                                        Kids & teens
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="client_target" name="client_target">
                                    <label class="form-check-label" for="client_target">
                                        In their 20s
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="client_target" name="client_target">
                                    <label class="form-check-label" for="client_target">
                                        In their 30s
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="client_target" name="client_target">
                                    <label class="form-check-label" for="client_target">
                                        In their 40s
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="client_target" name="client_target">
                                    <label class="form-check-label" for="client_target">
                                        In their 50s
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="client_target" name="client_target">
                                    <label class="form-check-label" for="client_target">
                                        Senior citizens
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="project_offer" class="lbl">My clients come to me because:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_offer" name="project_offer">
                                    <label class="form-check-label" for="project_offer">
                                        I offer excellent service
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_offer" name="project_offer">
                                    <label class="form-check-label" for="project_offer">
                                        I have the best products on the market
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_offer" name="project_offer">
                                    <label class="form-check-label" for="project_offer">
                                        I have the best prices on the market
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <label for="project_search" class="lbl">Someone’s searching the web for your business. What they search in?</label>
                                    <input type="text" class="form-control" id="project_search"  placeholder="what search" name="project_search" required>
                                </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <label for="project_uniqueness" class="lbl">What is it that makes your products or services unique on the market?</label>
                                    <input type="text" class="form-control" id="project_uniqueness"  placeholder="Project uniqueness" name="project_uniqueness" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_solution" class="lbl">Do you have proof that your solutions are better than your competitors?</label>
                                    <input type="text" class="form-control" id="project_solution"  placeholder="Project solution" name="project_solution" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website_url" class="lbl">Do you have a URL in mind for your website?</label>
                                    <input type="text" class="form-control" id="website_url"  placeholder="Enter first name" name="website_url" required>
                                </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="project_include" class="lbl">Our new website would need to include:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        A basic HTML site
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Responsive design for use on tablets & mobiles
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Ecommerce website
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        A WordPress-based CMS
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        PHP / Laravel / ASP (Custom)
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Online Magazine
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Online forum/ blog
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Newsletter system
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Social network integration
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Payment Gateway Integration
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Social network integration
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        SMS Integration
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Intranet system
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Logistic Integration
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        Separate, dedicated landing pages
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="project_include" name="project_include">
                                    <label class="form-check-label" for="project_include">
                                        A redesign of a current website
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="Project_features" class="lbl">We want the following special features to be included in our new website:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Registration form
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Video streaming
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Search panel
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Newsletter/ Email sign up forms
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Information/ request forms
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Uploads/ downloads
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Customer login
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Registration
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Blog modulen
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Image gallery
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Image slider
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Project_features" name="Project_features">
                                    <label class="form-check-label" for="Project_features">
                                        Other features
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="" class="lbl">Help us out here - Who will provide the following resources?</label>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="Images" class="lbl">Images</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="images" id="images" value="My Company" checked>
                                    <label class="form-check-label" for="images">
                                        My Company
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="images" id="images" value="Al-Muhsiy Group">
                                    <label class="form-check-label" for="images">
                                        Al-Muhsiy Group
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="logo" class="lbl">Logo</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="logo" id="logo" value="My Company" checked>
                                    <label class="form-check-label" for="logo">
                                        My Company
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="logo" id="logo" value="Al-Muhsiy Group">
                                    <label class="form-check-label" for="logo">
                                        Al-Muhsiy Group
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="hosting_domain" class="lbl">Hosting and Domain</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hosting_domain" id="hosting_domain" value="My Company" checked>
                                    <label class="form-check-label" for="hosting_domain">
                                        My Company
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hosting_domain" id="hosting_domain" value="Al-Muhsiy Group">
                                    <label class="form-check-label" for="hosting_domain">
                                        Al-Muhsiy Group
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="ssl_certificate" class="lbl">SSL Certificate</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ssl_certificate" id="ssl_certificate" value="My Company" checked>
                                    <label class="form-check-label" for="ssl_certificate">
                                        My Company
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ssl_certificate" id="ssl_certificate" value="Al-Muhsiy Group">
                                    <label class="form-check-label" for="ssl_certificate">
                                        Al-Muhsiy Group
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <div class="form-group" class="lbl">
                                    <label for="company_logo" class="lbl">Does your company have a logo?</label>
                                    <input type="text" class="form-control" id="company_logo"  placeholder="Company logo" name="company_logo" required>
                                </div>
                            </div>
                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <label for="project_competitor" class="lbl">Could you give us the websites of your top 3 competitors?</label>
                                    <input type="text" class="form-control" id="project_competitor"  placeholder="project competitor " name="project_competitor" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_pick" class="lbl">If you had to pick 3 websites you love to have,which would they be?</label>
                                    <input type="text" class="form-control" id="project_pick"  placeholder="Project Pickout" name="project_pick" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="something_missing" class="lbl">Is there anything else you’d like to tell us?</label>
                                    <input type="text" class="form-control" id="something_missing"  placeholder="Any thing else" name="something_missing" required>
                                </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="website_update" class="lbl">Would you like us to update your site or would you like to be responsible for updates?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="website_update" id="website_update" value="Yes" checked>
                                    <label class="form-check-label" for="website_update">
                                        Yes
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="website_update" id="website_update" value="No">
                                    <label class="form-check-label" for="website_update">
                                        No
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="require_update" class="lbl">How often do you require updates?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="require_update" id="require_update" value="Daily" checked>
                                    <label class="form-check-label" for="website_update">
                                        Daily
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="require_update" id="require_update" value="Weekly">
                                    <label class="form-check-label" for="require_update">
                                        Weekly
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="require_update" id="require_update" value=" Monthly" >
                                    <label class="form-check-label" for="website_update">
                                        Monthly
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="require_update" id="require_update" value="Quaterly">
                                    <label class="form-check-label" for="require_update">
                                        Quaterly
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="require_update" id="require_update" value="Half Yearly">
                                    <label class="form-check-label" for="website_update">
                                        Half Yearly
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="require_update" id="require_update" value="Yearly">
                                    <label class="form-check-label" for="require_update">
                                        Yearly
                                    </label>
                                    </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                <label for="project_training" class="lbl">Would you like to book a dedicated training session for your employees to learn to update the site?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="project_training" id="project_training" value="Yes" checked>
                                    <label class="form-check-label" for="website_update">
                                        Yes
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="project_training" id="project_training" value="No">
                                    <label class="form-check-label" for="project_training">
                                        No
                                    </label>
                                    </div>
                            </div>

                            <div class="col-md-12 pt-5">
                                <h5>That’s all we need for now!</h5>
                            </div>
                            <div class="col-md-12">
                                <p>Thanks for taking time to fill this in - we’ll be in touch with a quotation shortly.</p>
                            </div>
                            <div class="col-md-4 offset-md-4">
                                <button class="btn btn-block btn-lg btn-primary text-center submitq">Submit
                                    <i class="zmdi zmdi-arrow-right"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

@endsection

@push('scripts')
@endpush
