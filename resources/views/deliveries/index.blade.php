
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Deliveries</h1>
        <p>Manage completed furniture orders and customer deliveries.</p>
    </div>

    <div class="panel">

        <div class="panel-heading">
            <h3>Delivery Records</h3>
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
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="6" class="empty-message">
                            No delivery records available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</main>

@include('partials.footer')
