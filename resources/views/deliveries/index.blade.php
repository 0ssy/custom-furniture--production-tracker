
@include('partials.header')

<main class="page-content">

    <!-- Page Heading -->
    <div class="page-heading">
        <h1>Deliveries</h1>
        <p>Manage completed furniture orders and customer deliveries.</p>
    </div>

    <!-- Delivery Statistics -->
    <div class="dashboard-cards">

        <div class="stat-card">
            <h3>Total Deliveries</h3>
            <p class="stat-number">0</p>
            <span>All recorded deliveries</span>
        </div>

        <div class="stat-card">
            <h3>Pending Deliveries</h3>
            <p class="stat-number">0</p>
            <span>Awaiting delivery</span>
        </div>

        <div class="stat-card">
            <h3>Completed Deliveries</h3>
            <p class="stat-number">0</p>
            <span>Successfully delivered</span>
        </div>

        <div class="stat-card">
            <h3>Today's Deliveries</h3>
            <p class="stat-number">0</p>
            <span>Scheduled for today</span>
        </div>

    </div>

    <!-- Delivery Records -->
    <div class="panel">

        <div class="panel-heading">
            <h3>Delivery Records</h3>

            <a href="/deliveries/create" class="btn">
                + Schedule Delivery
            </a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Delivery ID</th>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Delivery Address</th>
                        <th>Scheduled Date</th>
                        <th>Delivery Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="7" class="empty-message">
                            No delivery records available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Delivery Information -->
    <div class="panel">

        <div class="panel-heading">
            <h3>Delivery Guidelines</h3>
        </div>

        <ul class="quick-links">
            <li>Only orders that have passed Quality Check should be scheduled for delivery.</li>
            <li>Orders must be fully paid before they can be marked as Delivered.</li>
            <li>Confirm the customer's delivery address and scheduled date.</li>
            <li>Update the delivery status after successful delivery.</li>
        </ul>

    </div>

</main>

@include('partials.footer')
