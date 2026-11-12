
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Staff Management</h1>
        <p>Manage system users and their access roles.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Staff Accounts</h3>
            <a href="/staff/create" class="btn">+ Add Staff Member</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Role</th>
                        <th>Account Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="6" class="empty-message">
                            No staff accounts available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
