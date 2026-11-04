<?php
	$item = $productionOrder ?? $order ?? $production;

	$details = [
		'Customer' => get($item, 'customer_name', data_get($item, 'customer.name', '—')),
		'Furniture' => get($item, 'furniture_type', data_get($item, 'product_name', '—')),
		'Material' => get($item, 'material', '—'),
		'Dimensions' => data_get($item, 'dimensions', '—'),
		'Start date' => get($item, 'start_date', '—'),
		'Due date' => get($item, 'due_date', '—'),
		'Assigned to' => get($item, 'assigned_to', data_get($item, 'worker.name', '—')),
		'Price' => get($item, 'price', null),
	];

	$status = get($item, 'status', 'Not set');
	$statusClass = strtolower(str_replace(' ', '-', (string) $status));
?>

