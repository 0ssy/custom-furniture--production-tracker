
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Payments</h1>
        <p>Monitor customer deposits, payments and outstanding balances.</p>
    </div>

    <div class="cards">

        <div class="stat-card">
            <p>Total Payments Received</p>
            <h2>KES 0</h2>
        </div>

        <div class="stat-card">
            <p>Outstanding Balances</p>
            <h2>KES 0</h2>
        </div>

        <div class="stat-card">
            <p>Pending Payments</p>
            <h2>0</h2>
        </div>

        <div class="stat-card">
            <p>Recorded Transactions</p>
            <h2>0</h2>
        </div>

    </div>

    <div class="panel">

        <div class="panel-heading">
            <h3>Payment Records</h3>
            <a href="/payments/create" class="btn">+ Record Payment</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Payment Date</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="6" class="empty-message">
                            No payment records available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</main>

@include('partials.footer')
