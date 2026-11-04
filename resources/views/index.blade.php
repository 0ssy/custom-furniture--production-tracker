<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furniture Orders</title>
    <style>
        body    { font-family: Arial, sans-serif; margin: 0; background: #f4f5f7; color: #222; }
        header  { background: #5a3e2b; color: #fff; padding: 16px 24px; }
        header h1 { margin: 0; font-size: 22px; }
        main    { padding: 24px; max-width: 1100px; margin: 0 auto; }

        .cards  { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; }
        .card   { background: #fff; border-radius: 8px; padding: 16px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        .card p { margin: 0; color: #666; font-size: 14px; }
        .card h2 { margin: 8px 0 0; font-size: 28px; }

        .panel  { background: #fff; border-radius: 8px; padding: 16px; margin-top: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.1); overflow-x: auto; }
        .panel-top { display: flex; justify-content: space-between; align-items: center; }
        .btn    { background: #5a3e2b; color: #fff; padding: 8px 14px; border-radius: 6px; text-decoration: none; }

        table   { width: 100%; border-collapse: collapse; margin-top: 12px; }
        th, td  { padding: 10px; text-align: left; border-bottom: 1px solid #eee; }
        th      { background: #fafafa; font-size: 13px; color: #555; }
        tbody tr:hover { background: #fcfaf7; }

        .stage  { padding: 3px 10px; border-radius: 12px; font-size: 12px; }
        .cutting    { background: #fff3cd; }
        .assembly   { background: #d1ecf1; }
        .finishing  { background: #e2d9f3; }
        .ready      { background: #d4edda; }
    </style>
</head>
<body>

    <header>
        <h1>Furniture Production Dashboard</h1>
    </header>

    <main>
        <div class="cards">
            <div class="card"><p>Total Orders</p><h2>4</h2></div>
            <div class="card"><p>In Production</p><h2>3</h2></div>
            <div class="card"><p>Ready for Delivery</p><h2>1</h2></div>
            <div class="card"><p>Total Value (KES)</p><h2>153,500</h2></div>
        </div>

        <div class="panel">
            <div class="panel-top">
                <h3>Recent Orders</h3>
                <a href="#" class="btn">+ New Order</a>
            </div>

            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Item</th>
                    <th>Price (KES)</th>
                    <th>Deadline</th>
                    <th>Stage</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Jane Wanjiru</td>
                    <td>Oak dining table</td>
                    <td>45,000</td>
                    <td>20 Nov 2026</td>
                    <td><span class="stage cutting">Cutting</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Peter Otieno</td>
                    <td>3-seater sofa</td>
                    <td>68,500</td>
                    <td>1 Dec 2026</td>
                    <td><span class="stage assembly">Assembly</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mary Achieng</td>
                    <td>Bookshelf</td>
                    <td>12,000</td>
                    <td>15 Nov 2026</td>
                    <td><span class="stage finishing">Finishing</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>David Kamau</td>
                    <td>King-size bed frame</td>
                    <td>28,000</td>
                    <td>8 Nov 2026</td>
                    <td><span class="stage ready">Ready</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
