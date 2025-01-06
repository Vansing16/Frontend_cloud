@extends('freelancersite.layouts.master')
@section('content')
@include('freelancersite.layouts.company-info')

<main class="add_new_project">
    <div class="project-form">
        <h2>Post your service</h2>
        <p>Let's showcase your digital service in a compelling way that attracts potential buyers.</p>
        <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="service-title">Service Title:</label>
                <input type="text" id="service-title" name="service-title" placeholder="Example: IOS App development" required>
            </div>
            <div class="form-group">
                <label for="service-thumbnail">Service Thumbnail:</label>
                <div class="upload-container">
                    <input type="file" id="service-thumbnail" name="service-thumbnail" accept="image/*" required>
                    <label for="service-thumbnail" class="upload-label">
                        <span class="upload-text">+</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="service-category">Service category:</label>
                <select id="service-category" name="service-category" required>
                    <option value="" disabled selected>Select</option>
                    <option value="graphic-design">Graphic Design</option>
                    <option value="web-development">Web Development</option>
                    <option value="content-writing">Digital Marketer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="service-cost">Service Cost:</label>
                <input type="number" id="service-cost" name="service-cost" placeholder="Enter service cost" required>
            </div>
            <div class="form-group">
                <label for="rate-hour">Rate/Hour:</label>
                <input type="text" id="rate-hour" name="rate-hour" placeholder="Example: 45$/Hour" required>
            </div>
            <div class="form-group">
                <label for="service-description">Service Description:</label>
                <textarea id="service-description" name="service-description" placeholder="An ideal description is at least 300 characters. Describe the service you offer." required></textarea>
            </div>
            <button type="submit">Publish</button>
        </form>
    </div>
</main>

@stop