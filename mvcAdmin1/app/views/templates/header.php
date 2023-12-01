<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

$user = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<title>Dashboard</title>
</head>

<body>
	<nav class="nav nav-pills flex-sm-row bg-primary">
		<a class="flex-sm-fill text-sm-start nav-link text-warning disabled" aria-current="page" href="#">Dashboard</a>
		<a class="flex-sm-fill text-sm-start nav-link text-light disabled" href="#">User :
			<?= $user; ?>
		</a>
		<a class="flex-sm-fill text-sm-end nav-link text-light" href="<?= BASEURL; ?>user/logout">Logout</a>
	</nav>
</body>

</html>