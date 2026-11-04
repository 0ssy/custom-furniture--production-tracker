<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Production Order</title>
</head>
<body>
	<h1>Edit Production Order</h1>

	<form method="post" action="">
		

		<p>
			<label for="customer_name">Customer name</label>
			<input type="text" id="customer_name" name="customer_name" value="<?php echo old('customer_name', $order->customer_name ?? ''); ?>">
		</p>
		<p>
			<label for="furniture_item">Furniture item</label>
			<input type="text" id="furniture_item" name="furniture_item" value="<?php echo old('furniture_item', $order->furniture_item ?? ''); ?>">
		</p>
		<p>
			<label for="quantity">Quantity</label>
			<input type="number" id="quantity" name="quantity" min="1" value="<?php echo old('quantity', $order->quantity ?? ''); ?>">
		</p>
		<p>
			<label for="due_date">Due date</label>
			<input type="date" id="due_date" name="due_date" value="<?php echo old('due_date', isset($order->due_date) ? date('Y-m-d', strtotime($order->due_date)) : ''); ?>">
		</p>
		<p>
			<label for="status">Status</label>
			<select id="status" name="status">
				<option value="pending" <?php echo old('status', $order->status ?? 'pending') === 'pending' ? 'selected' : ''; ?>>Pending</option>
				<option value="in_progress" <?php echo old('status', $order->status ?? 'pending') === 'in_progress' ? 'selected' : ''; ?>>In progress</option>
				<option value="completed" <?php echo old('status', $order->status ?? 'pending') === 'completed' ? 'selected' : ''; ?>>Completed</option>
			</select>
		</p>
		<p>
			<label for="notes">Notes</label>
			<textarea id="notes" name="notes" rows="4"><?php echo old('notes', $order->notes ?? ''); ?></textarea>
		</p>

		<button type="submit">Save changes</button>
		<a href="{{ url()->previous() }}">Cancel</a>
	</form>
</body>
</html>
