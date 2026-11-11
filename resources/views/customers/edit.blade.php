
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Edit Customer</h1>
        <p>Update the customer's information.</p>
    </div>

    <div class="panel">

        <form>

            <label>Customer Name</label>
            <input type="text" placeholder="Enter customer name" required>

            <br><br>

            <label>Email Address</label>
            <input type="email" placeholder="Enter email address">

            <br><br>

            <label>Phone Number</label>
            <input type="tel" placeholder="Enter phone number" required>

            <br><br>

            <label>Physical Address</label>
            <textarea rows="4" placeholder="Enter customer address"></textarea>

            <br><br>

            <button type="button" class="btn">Update Customer</button>
            <a href="/customers" class="btn">Cancel</a>

        </form>

    </div>

</main>

@include('partials.footer')
