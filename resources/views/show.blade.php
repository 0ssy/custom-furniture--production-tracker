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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Production order details</title>
	
</head>
<body>
<main class="container">
	<header class="topbar">
		<div>
			<h1>Production order</h1>
			<p class="muted">Order {{ data_get($item, 'id', '—') }}</p>
		</div>
		<div class="actions">
			<a class="button" href="{{ url()->previous() }}">Back</a>
			if($item && data_get($item, 'id'))
				<a class="button primary" href="{{ url('/production-orders/' . data_get($item, 'id') . '/edit') }}">Edit order</a>
			
		</div>
	</header>

	<section class="card" aria-labelledby="overview-heading">
		<h2 id="overview-heading">Order overview</h2>
		<p><span class="label">Current status</span>
			<span class="status {{ $statusClass }}">{{ $status }}</span>
		</p>
		<div class="grid">
			foreach($details as $label => $value)
				if($label === 'Price' && $value !== null)
					 $value = number_format((float) $value, 2); 
				
				<div>
					<span class="label">{{ $label }}</span>
					<span class="value">{{ $value ?? '—' }}</span>
				</div>
			endforeach
		</div>
	</section>

	<section class="card" aria-labelledby="notes-heading">
		<h2 id="notes-heading">Notes</h2>
		<p class="notes">{{ data_get($item, 'notes', 'No notes have been added to this order.') }}</p>
	</section>
</main>
</body>
</html>

