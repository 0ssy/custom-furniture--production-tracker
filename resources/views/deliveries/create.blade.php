
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Schedule Delivery</h1>
        <p>Arrange delivery of completed furniture orders.</p>
    </div>

    <div class="panel">

        <form>

            <label>Order ID</label>
            <input type="text" placeholder="Enter order ID" required>

            <br><br>

            <label>Customer Name</label>
            <input type="text" placeholder="Enter customer name" required>

            <br><br>

            <label>Delivery Address</label>
            <textarea rows="3" placeholder="Enter delivery location" required></textarea>

            <br><br>

            <label>Scheduled Delivery Date</label>
            <input type="date" required>

            <br><br>

            <label>Delivery Notes</label>
            <textarea rows="3" placeholder="Additional delivery instructions"></textarea>

            <br><br>

            <button type="button" class="btn">Schedule Delivery</button>
            <a href="/deliveries" class="btn">Cancel</a>

        </form>

    </div>

</main>

@include('partials.footer')
