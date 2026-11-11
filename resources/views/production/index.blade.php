
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Production Tracking</h1>
        <p>Monitor furniture orders throughout the production process.</p>
    </div>

    <div class="panel">

        <div class="panel-heading">
            <h3>Production Progress</h3>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Furniture</th>
                        <th>Customer</th>
                        <th>Current Stage</th>
                        <th>Assigned Staff</th>
                        <th>Due Date</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="6" class="empty-message">
                            No active production records.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="panel">
        <h3>Production Stages</h3>
        <br>

        <div class="quick-links">
            <div class="quick-link">Design Approval</div>
            <div class="quick-link">Material Preparation</div>
            <div class="quick-link">Cutting</div>
            <div class="quick-link">Assembly</div>
            <div class="quick-link">Finishing</div>
            <div class="quick-link">Quality Check</div>
            <div class="quick-link">Ready for Delivery</div>
        </div>
    </div>

</main>

@include('partials.footer')
