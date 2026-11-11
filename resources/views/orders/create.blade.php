
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Create New Order</h1>
        <p>Enter the customer's details and furniture specifications.</p>
    </div>

    <div class="panel">

        <h3>Customer Information</h3>
        <br>

        <form>

            <label>Customer Name</label>
            <input type="text" placeholder="Enter customer name" required>

            <br><br>

            <label>Customer Phone</label>
            <input type="tel" placeholder="Enter phone number" required>

            <br><br>

            <label>Customer Email</label>
            <input type="email" placeholder="Enter email address">

            <br><br>

            <hr>
            <br>

            <h3>Furniture Specifications</h3>
            <br>

            <label>Furniture Type</label>
            <select required>
                <option value="">Select furniture type</option>
                <option>Dining Table</option>
                <option>Wardrobe</option>
                <option>Bed</option>
                <option>Office Desk</option>
                <option>Sofa</option>
                <option>Cabinet</option>
                <option>Other</option>
            </select>

            <br><br>

            <label>Furniture Description</label>
            <textarea rows="4" placeholder="Describe the furniture specifications, materials and design"></textarea>

            <br><br>

            <label>Quantity</label>
            <input type="number" min="1" placeholder="Enter quantity" required>

            <br><br>

            <label>Dimensions</label>
            <input type="text" placeholder="e.g. 180cm × 90cm × 75cm">

            <br><br>

            <hr>
            <br>

            <h3>Order and Payment Details</h3>
            <br>

            <label>Total Order Amount (KES)</label>
            <input type="number" min="0" step="0.01" placeholder="Enter total amount" required>

            <br><br>

            <label>Deposit Amount (KES)</label>
            <input type="number" min="0" step="0.01" placeholder="Enter deposit amount">

            <br><br>

            <label>Order Date</label>
            <input type="date" required>

            <br><br>

            <label>Expected Delivery Date</label>
            <input type="date" required>

            <br><br>

            <label>Additional Notes</label>
            <textarea rows="3" placeholder="Any additional instructions"></textarea>

            <br><br>

            <button type="button" class="btn">Create Order</button>

            <a href="/orders" class="btn">Cancel</a>

        </form>

    </div>

</main>

@include('partials.footer')
