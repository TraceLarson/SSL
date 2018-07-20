<div class="content-container d-none">
	<div class="ml-5 mr-5">
		<H3>Drop Us a Line!</H3>
		<form action="/Contact/receiveForm" method="post">
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control <? echo $data['email']; ?>" id="email" name="email"
				       placeholder="name@example.com">
				<? if ($data == null || $data['email'] == 'is-valid') {
					echo '';
				} else {
					echo '<p class="alert alert-danger">Please Enter a valid email</p>';
				};
				?>
			</div>

			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control <? echo $data['username']; ?>" id="username" name="username">
				<? if ($data == null || $data['username'] == 'is-valid') {
					echo '';
				} else {
					echo '<p class="alert alert-danger">Please Enter a valid username</p>';
				}
				?>
			</div>

			<div class="form-group">
				<label for="formSelect">Select Membership</label>
				<select class="form-control" id="formSelect" name="formSelect">
					<option>Copper</option>
					<option>Bronze</option>
					<option>Silver</option>
					<option>Gold</option>
					<option>Platinum</option>
				</select>
			</div>
			<div class="form-check form-check-inline mb-4">
				<input class="form-check-input" type="checkbox" value="one" id="check1" name="check1">
				<label class="form-check-label mr-2" for="check1">
					Check One
				</label>
				<input class="form-check-input" type="checkbox" value="two" id="check2" name="check2">
				<label class="form-check-label mr-2" for="check2">
					Check Two
				</label>
				<input class="form-check-input" type="checkbox" value="three" id="check3" name="check3">
				<label class="form-check-label mr-2" for="check3">
					Check Three
				</label>
			</div>
			<br>
			<div class="form-check form-check-inline mb-4">
				<input class="form-check-input" type="radio" id="radio1" value="option1" name="radio" checked>
				<label class="form-check-label mr-2" for="radio1">
					Part Time
				</label>
				<input class="form-check-input" type="radio" id="radio2" value="option2" name="radio">
				<label class="form-check-label mr-2" for="radio2">
					Full Time
				</label>
				<input class="form-check-input" type="radio" id="radio3" value="option3" name="radio">
				<label class="form-check-label mr-2" for="radio3">
					Contract
				</label>
			</div>
			<div class="form-group">
				<label for="textArea">Message</label>
				<textarea class="form-control" id="textArea" name="textArea" rows="3"></textarea>
			</div>
			<button name="submit"  id="messageSubmit">Submit</button>
			<!--			<input type="button" class="btn btn-dark" name="ajaxSubmit" id="ajaxSubmit" value="ajax submit">-->
		</form>
	</div>
</div>