
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Furniture Production Tracker</title>

    @vite(['resources/css/main.css'])
</head>

<body>

<header class="main-header">

    <nav class="navbar">

        <!-- Logo -->
        <a href="{{ url('/dashboard') }}" class="logo">
            FURNITURE<span>.</span>
            <small>PRODUCTION TRACKER</small>
        </a>

        <!-- Main Navigation -->
        <ul class="nav-links">

            <li>
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>

            <li>
                <a href="{{ url('/customers') }}">Customers</a>
            </li>

            <li>
                <a href="{{ url('/orders') }}">Orders</a>
            </li>

            <li>
                <a href="{{ url('/quotations') }}">Quotations</a>
            </li>

            <li>
                <a href="{{ url('/materials') }}">Materials</a>
            </li>

            <li>
                <a href="{{ url('/production') }}">Production</a>
            </li>

            <li>
                <a href="{{ url('/payments') }}">Payments</a>
            </li>

            <li>
                <a href="{{ url('/deliveries') }}">Deliveries</a>
            </li>

            <li>
                <a href="{{ url('/deadlines') }}">Deadlines</a>
            </li>

            <li>
                <a href="{{ url('/search') }}">Search</a>
            </li>

            <li>
                <a href="{{ url('/staff') }}">Staff</a>
            </li>

        </ul>

        <!-- Profile -->
        <a href="{{ url('/profile') }}" class="profile-link">
            My Profile
        </a>

    </nav>

</header>
