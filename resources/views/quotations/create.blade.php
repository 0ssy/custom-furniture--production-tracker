
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Create Quotation</h1>
        <p>Prepare a price quotation for a customer.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Quotation Information</h3>
        </div>

        <form>
            <label>Order ID</label>
            <input type="text" placeholder="Enter order ID">

            <label>Customer Name</label>
            <input type="text" placeholder="Enter customer name">

            <label>Furniture Type</label>
            <input type="text" placeholder="Enter furniture type">

            <label>Quotation Amount (KES)</label>
            <input type="number" placeholder="Enter quoted amount">

            <label>Quotation Date</label>
            <input type="date">

            <label>Quotation Notes</label>
            <textarea rows="4" placeholder="Enter quotation details"></textarea>

            <button type="button" class="btn">Save Quotation</button>
            <a href="/quotations" class="action-link">Cancel</a>
        </form>
    </div>

</main>

@include('partials.footer')
