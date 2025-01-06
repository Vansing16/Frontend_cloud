@extends('freelancersite.layouts.master')
@section('content')
@include('freelancersite.layouts.company-info')

<main>
    <div class="message-container">
        <h2>Messages</h2>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="message-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Info</th>
                    <th>Message</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                <tr>
                    <td>{{ $message->user->first_name}} {{$message->user->last_name}}</td>
                    <td>{{ $message->user->email }}</td>
                    <td>{{ $message->contact_info }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No messages found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<script src="{{ asset('assets/js/messages.js') }}"></script>
@stop