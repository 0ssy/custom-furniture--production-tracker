
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Order Deadlines</h1>
        <p>Monitor upcoming and overdue furniture orders.</p>
    </div>

    <div class="dashboard-cards">

        <div class="stat-card">
            <h3>Upcoming Deadlines</h3>
            <p class="stat-number">0</p>
            <span>Orders approaching their deadlines</span>
        </div>

        <div class="stat-card">
            <h3>Overdue Orders</h3>
            <p class="stat-number">0</p>
            <span>Orders past their deadlines</span>
        </div>

        <div class="stat-card">
            <h3>Completed Orders</h3>
            <p class="stat-number">0</p>
            <span>Orders completed on time</span>
        </div>

    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Deadline Records</h3>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Furniture Type</th>
                        <th>Order Deadline</th>
                        <th>Production Status</th>
                        <th>Deadline Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="6" class="empty-message">
                            No deadline records available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
