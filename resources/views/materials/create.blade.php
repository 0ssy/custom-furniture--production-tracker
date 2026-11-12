
@include('partials.header')

<main class="page-content">

    <div class="page-heading">
        <h1>Add Material</h1>
        <p>Register a material used in furniture production.</p>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3>Material Information</h3>
        </div>

        <form>
            <label>Material Name</label>
            <input type="text" placeholder="e.g. Mahogany Wood">

            <label>Unit of Measurement</label>
            <select>
                <option value="">Select unit</option>
                <option>Pieces</option>
                <option>Metres</option>
                <option>Square Metres</option>
                <option>Kilograms</option>
                <option>Litres</option>
                <option>Sheets</option>
            </select>

            <label>Unit Cost (KES)</label>
            <input type="number" placeholder="Enter unit cost">

            <button type="button" class="btn">Save Material</button>
            <a href="/materials" class="action-link">Cancel</a>
        </form>
    </div>

</main>

@include('partials.footer')
