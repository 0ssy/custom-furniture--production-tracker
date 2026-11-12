
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Search Records</h1>
        <p>Find customers and furniture orders in the system.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Search System Records</h3>
        </div>

        <form>
            <label>Search By</label>
            <select>
                <option>All Records</option>
                <option>Customers</option>
                <option>Orders</option>
            </select>

            <label>Search Keyword</label>
            <input type="text" placeholder="Enter customer name or order ID">

            <button type="button" class="btn">Search</button>
        </form>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Search Results</h3>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Record ID</th>
                        <th>Record Type</th>
                        <th>Name / Description</th>
                        <th>Contact / Order Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="5" class="empty-message">
                            Enter a keyword to search records.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
