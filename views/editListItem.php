
<div class="container content-container d-none">
	<h1>Edit List Item</h1>
	<form action="/About/updateAction" method="post">
		<input class="d-none" type="text" name="id" value="<?=$data[0]["id"]?>" >
		<input type="text" name="name" value="<?=$data[0]["name"]?>">
		<input class="btn btn-success" type="submit" value="Update">
	</form>
	<form class="mt-3" action="/About/deleteAction" method="post">
		<input class="d-none" type="text" name="id" value="<?=$data[0]["id"]?>" >
		<input class="d-none" type="text" name="name" value="<?=$data[0]["name"]?>">
		<input class="btn btn-warning" type="submit" value="Delete" id="deleteFruit">
	</form>
</div>