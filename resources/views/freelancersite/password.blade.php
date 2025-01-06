@extends('freelancersite.layouts.master')
@section('content')

<section class="password-section">
    <h1>Password</h1>
    <hr style="width:95%;text-align:center;margin-left: 2.5%">
    <form>
        <div class="form-section">
            <div class="psw-profile">
                <img src="{{ asset('assets/image/profile2.png') }}" alt="User Image" class="user-image">
                <h2>Brain Lee</h2>
            </div>
            
            <label> Old Password </label>
            <input type="text" value="Abc1234#">

            <label> New Password </label>
            <input type="text" value="Abc1234@">

            <label> Confirm New Password </label>
            <input type="text" value="Abc1234@">

        </div>
        <button type="submit" class="change-psw-button">Change Password</button>
    </form>
</section>
@stop