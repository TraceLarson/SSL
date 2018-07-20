<div class="content-container d-none">
	<div class="alert alert-success">
		<h2 class="mb-0 pb-0">MESSAGE SUCCESSFUL!</h2>
		<br>
		<p>details below!</p>
	</div>
	<ul class="list-group-flush">
		<li class="list-group-item"><b>Email: </b><? echo $data['email'] ?></li>
		<li class="list-group-item"><b>Username: </b><? echo $data['username'] ?></li>
		<li class="list-group-item"><b>Membership Package: </b><? echo $data['formSelect'] ?></li>
		<li class="list-group-item"><b>Features: </b><?
				if (isset($data['check1'])) {
					echo $data['check1'];
				};
				if (isset($data['check2'])) {
					echo ', ' . $data['check2'];
				};
				if (isset($data['check3'])) {
					echo ', ' . $data['check3'];
				}
			?></li>
		<li class="list-group-item"><b>Options: </b><? echo $data['radio'] ?></li>
		<li class="list-group-item"><b>Message: </b><br><? echo $data['textArea'] ?></li>
	</ul>
</div>