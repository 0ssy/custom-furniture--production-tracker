
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Welcome Back</h1>
        <p>Log in to access the Custom Furniture Production Tracker.</p>
    </div>

    <div class="panel" style="max-width: 500px; margin: 0 auto;">
        <div class="panel-heading">
            <h3>User Login</h3>
        </div>

        <form>
            <label>Email Address</label>
            <input type="email" placeholder="Enter your email">

            <label>Password</label>
            <input type="password" placeholder="Enter your password">

            <button type="button" class="btn">Login</button>
        </form>
    </div>

</main>

@include('partials.footer')
