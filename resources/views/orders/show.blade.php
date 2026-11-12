
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Order Details</h1>
        <p>View customer, furniture and payment information.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Order Information</h3>
            <a href="/orders" class="btn">Back to Orders</a>
        </div>

        <p><strong>Order ID:</strong> ORD-001</p>
        <p><strong>Customer:</strong> Sample Customer</p>
        <p><strong>Furniture Type:</strong> Dining Table</p>
        <p><strong>Order Date:</strong> Not available</p>
        <p><strong>Deadline:</strong> Not available</p>
        <p><strong>Total Price:</strong> KES 50,000</p>
        <p><strong>Order Status:</strong> Quotation</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Furniture Specifications</h3>
        </div>

        <p><strong>Item Type:</strong> Dining Table</p>
        <p><strong>Dimensions:</strong> Not available</p>
        <p><strong>Wood Type:</strong> Not available</p>
        <p><strong>Finish:</strong> Not available</p>
        <p><strong>Design Details:</strong> Not available</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Payment Summary</h3>
        </div>

        <p><strong>Total Price:</strong> KES 50,000</p>
        <p><strong>Total Payments:</strong> KES 0</p>
        <p><strong>Outstanding Balance:</strong> KES 50,000</p>
    </div>

</main>

@include('partials.footer')
