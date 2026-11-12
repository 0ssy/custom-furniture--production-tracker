
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Quotations</h1>
        <p>Manage customer quotations and approval status.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Quotation Records</h3>
            <a href="/quotations/create" class="btn">+ Create Quotation</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Quotation ID</th>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Amount (KES)</th>
                        <th>Date</th>
                        <th>Acceptance Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="7" class="empty-message">
                            No quotations available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
