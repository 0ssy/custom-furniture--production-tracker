
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Orders Management</h1>
        <p>Create and manage customer furniture orders.</p>
    </div>

    <div class="panel">

        <div class="panel-heading">
            <h3>All Orders</h3>
            <a href="/orders/create" class="btn">+ New Order</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Furniture Type</th>
                        <th>Order Date</th>
                        <th>Due Date</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="7" class="empty-message">
                            No orders available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</main>

@include('partials.footer')
