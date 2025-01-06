<!-- resources/views/freelancersite/Project/viewService.blade.php -->
@extends('freelancersite.layouts.master')
@section('content')
@include('freelancersite.layouts.company-info')
<!-- <!DOCTYPE html>
<html>
<head>
    <title>View Services</title>
     Add any CSS libraries you need here, e.g., Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>

.table-container {
    margin-top: 50px;
    padding: 20px; /* Add padding for better spacing */
    background-color: #ffffff; /* Set background color */
    border-radius: 8px; /* Rounded corners for the container */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
}

th, td {
    padding: 12px 15px; /* Adjusted padding for better alignment */
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: rgb(230, 130, 146);
    color: white;
    font-weight: bold; /* Make headers bold */
}

td {
    background-color: #f9f9f9; /* Light background color for table cells */
}

/* Hover effect */
tr:hover td {
    background-color: #f1f1f1; /* Lighter hover effect for table rows */
    color: #333; /* Darken text color on hover */
}

/* Alert success */
.alert-success {
    margin-bottom: 20px;
    color: #155724; /* Dark green text color */
    background-color: #d4edda; /* Light green background color */
    border-color: #c3e6cb; /* Border color to match background */
    border-radius: 4px; /* Rounded corners */
    padding: 15px; /* Padding for better spacing */
}

/* Optional: Responsive design for table */
@media (max-width: 768px) {
    table, th, td {
        display: block;
        width: 100%;
    }

    th, td {
        box-sizing: border-box;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    th::after {
        content: ":";
    }
}


    </style>

    <div class="container mt-5">
        <h1>Services List</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Category</th>
                    <th>Cost</th>
                    <th>Rate per Hour</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td><img src="{{ Storage::url($service->thumbnail) }}" alt="Thumbnail" style="width: 100px; height: auto;"></td>
                        <td>{{ $service->category }}</td>
                        <td>${{ $service->cost }}</td>
                        <td>{{ $service->rate_hour }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>{{ $service->updated_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@stop