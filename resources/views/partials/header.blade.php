
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Furniture Tracker')</title>

    @vite(['resources/css/main.css'])
</head>

<body>

<header class="main-header">
    <nav class="navbar">

        <a href="{{ url('/dashboard') }}" class="logo">
            FURNITURE<span>.</span>
            <small>PRODUCTION TRACKER</small>
        </a>

        <ul class="nav-links">
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/customers') }}">Customers</a></li>
            <li><a href="{{ url('/orders') }}">Orders</a></li>
            <li><a href="{{ url('/production') }}">Production</a></li>
            <li><a href="{{ url('/payments') }}">Payments</a></li>
            <li><a href="{{ url('/deliveries') }}">Deliveries</a></li>
        </ul>

        <a href="{{ url('/profile') }}" class="profile-link">
            My Profile
        </a>

    </nav>
</header>
