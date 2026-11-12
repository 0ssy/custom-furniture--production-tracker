
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Quotation Details</h1>
        <p>View quotation information and customer acceptance.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Quotation Information</h3>
        </div>

        <p><strong>Quotation ID:</strong> QUO-001</p>
        <p><strong>Order ID:</strong> ORD-001</p>
        <p><strong>Customer:</strong> Sample Customer</p>
        <p><strong>Furniture Type:</strong> Dining Table</p>
        <p><strong>Quotation Amount:</strong> KES 50,000</p>
        <p><strong>Quotation Date:</strong> Not available</p>
        <p><strong>Acceptance Status:</strong> Pending</p>

        <div class="panel-heading">
            <h3>Customer Decision</h3>
        </div>

        <button type="button" class="btn">Mark as Accepted</button>
        <button type="button" class="btn">Mark as Rejected</button>

        <p style="margin-top: 20px;">
            <a href="/quotations" class="action-link">Back to Quotations</a>
        </p>
    </div>

</main>

@include('partials.footer')
