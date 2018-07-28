
<div class="container content-container">
	<h1><?= $_SESSION['userData']['first_name'] ?>'s FaceBook Info!</h1>
	<div>User ID: <?= $_SESSION['userData']['id'] ?></div>
	<div>Email: <?= $_SESSION['userData']['email'] ?></div>
	<div>FirstName: <?= $_SESSION['userData']['first_name'] ?> </div>
	<div>LastName: <?= $_SESSION['userData']['last_name'] ?> </div>
</div>