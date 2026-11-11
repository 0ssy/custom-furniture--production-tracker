
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Add Customer</h1>
        <p>Register a new furniture customer.</p>
    </div>

    <div class="panel">
        <form>

            <p>Customer Name</p>
            <input type="text" placeholder="Enter customer name" required>

            <p>Email Address</p>
            <input type="email" placeholder="Enter email address" required>

            <p>Phone Number</p>
            <input type="tel" placeholder="Enter phone number" required>

            <p>Physical Address</p>
            <textarea placeholder="Enter customer address"></textarea>

            <br><br>

            <button type="submit" class="btn">Save Customer</button>
            <a href="/customers" class="btn">Cancel</a>

        </form>
    </div>

</main>

@include('partials.footer')
