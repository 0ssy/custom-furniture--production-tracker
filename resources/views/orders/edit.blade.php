
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Edit Order</h1>
        <p>Update furniture order information and specifications.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Order Information</h3>
        </div>

        <form>
            <label>Customer Name</label>
            <input type="text" placeholder="Enter customer name">

            <label>Furniture Type</label>
            <select>
                <option value="">Select furniture type</option>
                <option>Dining Table</option>
                <option>Wardrobe</option>
                <option>Bed</option>
                <option>Office Desk</option>
                <option>Sofa</option>
                <option>Cabinet</option>
                <option>Other</option>
            </select>

            <label>Quantity</label>
            <input type="number" placeholder="Enter quantity">

            <label>Order Deadline</label>
            <input type="date">

            <label>Total Price (KES)</label>
            <input type="number" placeholder="Enter total price">

            <label>Order Status</label>
            <select>
                <option>Quotation</option>
                <option>Confirmation</option>
                <option>Material Preparation</option>
                <option>Production</option>
                <option>Finishing</option>
                <option>Quality Checking</option>
                <option>Delivery</option>
            </select>

            <div class="panel-heading">
                <h3>Furniture Specifications</h3>
            </div>

            <label>Dimensions</label>
            <input type="text" placeholder="e.g. 180cm x 90cm x 75cm">

            <label>Wood Type</label>
            <input type="text" placeholder="Enter wood type">

            <label>Finish</label>
            <input type="text" placeholder="Enter finish">

            <label>Design Notes</label>
            <textarea rows="4" placeholder="Enter design details"></textarea>

            <button type="button" class="btn">Update Order</button>
            <a href="/orders" class="action-link">Cancel</a>
        </form>
    </div>

</main>

@include('partials.footer')
