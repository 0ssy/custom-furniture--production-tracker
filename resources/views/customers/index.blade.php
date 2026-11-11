
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Customers</h1>
        <p>Manage your furniture business customers.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Customer Records</h3>
            <a href="/customers/create" class="btn">+ Add Customer</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="6" class="empty-message">
                            No customer records available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
