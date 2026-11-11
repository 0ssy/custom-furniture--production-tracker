
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Record Payment</h1>
        <p>Record a customer deposit or balance payment.</p>
    </div>

    <div class="panel">

        <form>

            <label>Order ID</label>
            <input type="text" placeholder="Enter order ID" required>

            <br><br>

            <label>Customer Name</label>
            <input type="text" placeholder="Enter customer name" required>

            <br><br>

            <label>Payment Amount (KES)</label>
            <input type="number" min="0" step="0.01" placeholder="Enter amount" required>

            <br><br>

            <label>Payment Method</label>
            <select required>
                <option value="">Select payment method</option>
                <option>M-Pesa</option>
                <option>Cash</option>
                <option>Bank Transfer</option>
                <option>Card</option>
            </select>

            <br><br>

            <label>Transaction Reference</label>
            <input type="text" placeholder="Enter transaction reference">

            <br><br>

            <label>Payment Date</label>
            <input type="date" required>

            <br><br>

            <label>Payment Notes</label>
            <textarea rows="3" placeholder="Additional payment information"></textarea>

            <br><br>

            <button type="button" class="btn">Save Payment</button>
            <a href="/payments" class="btn">Cancel</a>

        </form>

    </div>

</main>

@include('partials.footer')
