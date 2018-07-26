<div class="container content-container d-none">
	<form class="form form-group " action="/Register/addAction" method="post">
		<label for="email">EMAIL:</label>
		<input class="form-control" type="text" name="email" placeholder="Your Email">
		<br>
		<label for="password">Password:</label>
		<input class="form-control" type="text" name="password" placeholder="Password">
		<br>
		<label for="firstname">First Name:</label>
		<input class="form-control" type="text" name="firstname" placeholder="First Name">
		<br>
		<label for="lastname">Last Name:</label>
		<input class="form-control" type="text" name="lastname" placeholder="Last Name">
		<br>
		<label for="occupation">Occupation</label>
		<input class="form-control" type="text" name="occupation" placeholder="Student, Accountant...">
		<br>
		<label for="about">About:</label><br>
		<textarea  class="form-control" rows="5" name="about" placeholder="About You..."></textarea>
		<br>
		<input type="submit" class="btn btn-success" href="/Profile/updateAction" value="Create Account!">
	</form>
</div>