
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Order History</h1>
        <p>View previous furniture orders and their records.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Previous Orders</h3>
            <a href="/orders" class="btn">Current Orders</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Furniture Type</th>
                        <th>Order Date</th>
                        <th>Completion Date</th>
                        <th>Total Amount</th>
                        <th>Final Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="7" class="empty-message">
                            No previous orders available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
