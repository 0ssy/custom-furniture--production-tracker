
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Add Staff Member</h1>
        <p>Create a new account for a system user.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Staff Account Information</h3>
        </div>

        <form>
            <label>Full Name</label>
            <input type="text" placeholder="Enter full name">

            <label>Email Address</label>
            <input type="email" placeholder="Enter email address">

            <label>Password</label>
            <input type="password" placeholder="Create password">

            <label>Confirm Password</label>
            <input type="password" placeholder="Confirm password">

            <label>Account Role</label>
            <select>
                <option value="">Select role</option>
                <option>Admin</option>
                <option>Staff</option>
            </select>

            <button type="button" class="btn">Create Account</button>
            <a href="/staff" class="action-link">Cancel</a>
        </form>
    </div>

</main>

@include('partials.footer')
