
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Materials</h1>
        <p>Manage materials used in furniture production.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Material Inventory</h3>
            <a href="/materials/create" class="btn">+ Add Material</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Material ID</th>
                        <th>Material Name</th>
                        <th>Unit</th>
                        <th>Unit Cost (KES)</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="5" class="empty-message">
                            No materials available.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

@include('partials.footer')
