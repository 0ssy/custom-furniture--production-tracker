<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Create Furniture</title>
</head>
<body>
	<header>
			<h1>Add Furniture</h1>
	</header>

	<main>
		<section>
			<h2>Furniture Details</h2>
			<form method="POST">
				
				<p>
					<label for="name">Furniture name</label><br>
					<input type="text" id="name" name="name" required>
				</p>
				<p>
					<label for="quantity">Quantity</label><br>
					<input type="number" id="quantity" name="quantity" min="1" required>
				</p>
				<button type="submit">Save</button>
			</form>
		</section>
	</main>

	<footer>
		<p>&copy; {{ date('Y') }}</p>
	</footer>
</body>
</html>
