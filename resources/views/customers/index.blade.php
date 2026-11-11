<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
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
    </style>
</head>
<body>

    <header>
        <h1>Furniture Production Dashboard</h1>
    </header>

    <main>
        <div class="cards">
            <div class="card"><p>Total Customers</p><h2>{{ $customers->count() }}</h2></div>
        </div>

        <div class="panel">
            <div class="panel-top">
                <h3>Customers</h3>
                <a href="{{ route('customers.create') }}" class="btn">+ Add Customer</a>
            </div>

            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No customers yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>