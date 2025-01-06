@extends('layout.master')
@section('content')

<title>ServiceSphere</title>
<link rel="stylesheet" href="{{asset('assets/css/addResume.css')}}">

<section class="hero">
    <div class="category">
        <div class="findwork">
            <a href="#">
                Find Work
            </a>
        </div>
        <div class="servicetype">
            <a href="design">Design</a>
            <a href="develop">
                Development
            </a>
            <a href="marketing">
                Marketing
            </a>
        </div>
    </div>

</section>
<main>
    <div class="form-container">
        <h2>How would you like to tell us about yourself?</h2>
        <p>We need to get a sense of your education, experience and skills. It’s quickest to import your information — you can edit it before your profile goes live.</p>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="professional-role">Your professional role</label>
                <input type="text" id="professional-role" name="professional-role" placeholder="Graphic Design | Web developer" required>
            </div>
            <div class="form-group">
                <label for="work-type">What work are you here to do?</label>
                <select id="work-type" name="work-type" required>
                    <option value="" disabled selected>Select</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="web-development">Web Development</option>
                    <option value="content-writing">Content Writing</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bio">Write a bio to tell the world about yourself.</label>
                <textarea id="bio" name="bio" placeholder="Enter your top skills and experience" required></textarea>
            </div>
            <div class="form-group upload-container">
                <label for="resume-upload" class="upload-label">
                    <span class="upload-text">Upload your resume Here</span>
                    <input type="file" id="resume-upload" name="resume-upload" accept=".pdf,.doc,.docx" required>
                </label>
            </div>
            <a href="postService" type="submit">Save</a>

        </form>
    </div>
    <div class="additional-content">
        <div class="additional-item">
            <img src="{{asset('assets/image/addResume1.png')}}" alt="Illustration 1">
        </div>
        <div class="additional-item">
            <img src="{{asset('assets/image/addResume2.png')}}" alt="Illustration 2">
        </div>
    </div>

</main>

<script src="js/addResume.js"></script>
@stop