
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Customer Details</h1>
        <p>View customer information and previous orders.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Customer Information</h3>
            <a href="/customers" class="btn">Back to Customers</a>
        </div>

        <p><strong>Customer ID:</strong> CUST-001</p>
        <p><strong>Customer Name:</strong> Sample Customer</p>
        <p><strong>Email:</strong> customer@example.com</p>
        <p><strong>Phone:</strong> 0700000000</p>
        <p><strong>Address:</strong> Nairobi, Kenya</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Customer Order History</h3>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Furniture Type</th>
                        <th>Order Date</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="5" class="empty-message">
                            No previous orders available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
