<!DOCTYPE html>
<html>
<head>
    <title>Furniture Orders</title>
    <style>
        body  { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th    { background: #eee; }
    </style>
</head>
<body>

    <h2>Furniture Orders</h2>

    {{-- Show a message after creating / editing / deleting an order --}}
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('orders.create') }}">+ New Order</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Item</th>
            <th>Price</th>
            <th>Deadline</th>
            <th>Stage</th>
            <th>Actions</th>
        </tr>

        {{-- Loop through every order the controller sent to this page --}}
        @forelse ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer->name ?? 'Unknown' }}</td>
                <td>{{ $order->furniture_item }}</td>
                <td>{{ number_format($order->total_price, 2) }}</td>
                <td>{{ $order->deadline }}</td>
                <td>{{ $order->production_stage }}</td>
                <td>
                    <a href="{{ route('orders.show', $order) }}">View</a>
                    <a href="{{ route('orders.edit', $order) }}">Edit</a>

                    {{-- Deleting needs a small form (links can't send DELETE requests) --}}
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this order?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            {{-- This shows only when there are no orders at all --}}
            <tr>
                <td colspan="7">No orders yet.</td>
            </tr>
        @endforelse
    </table>

</body>
</html>
