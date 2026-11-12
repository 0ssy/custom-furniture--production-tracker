
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Production Details</h1>
        <p>Monitor the production progress of a furniture order.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Order Information</h3>
        </div>

        <p><strong>Order ID:</strong> ORD-001</p>
        <p><strong>Customer:</strong> Sample Customer</p>
        <p><strong>Furniture:</strong> Dining Table</p>
        <p><strong>Assigned Staff:</strong> Not assigned</p>
        <p><strong>Current Stage:</strong> Material Preparation</p>
        <p><strong>Expected Completion:</strong> Not available</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Production Stages</h3>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Production Stage</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Quotation</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Confirmation</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Material Preparation</td>
                        <td>In Progress</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Production</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Finishing</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Quality Checking</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Delivery</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Update Production Stage</h3>
        </div>

        <form>
            <label>Select Current Stage</label>
            <select>
                <option>Material Preparation</option>
                <option>Production</option>
                <option>Finishing</option>
                <option>Quality Checking</option>
                <option>Delivery</option>
            </select>

            <label>Production Notes</label>
            <textarea rows="4" placeholder="Enter progress notes"></textarea>

            <button type="button" class="btn">Update Progress</button>
        </form>
    </div>

</main>

@include('partials.footer')
