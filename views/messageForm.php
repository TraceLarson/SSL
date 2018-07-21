<div class="content-container d-none">
	<div class="ml-5 mr-5">
		<H3>Drop Us a Line!</H3>
		


		<!--		In your form tags add the following input element:-->

		<!--		<div>-->
		<!---->
		<!--			<label for="exampleInputEmail1">Enter Captcha </label>-->
		<!---->
		<!--			<input name="captcha" type="captcha" id="captcha"  placeholder="">-->
		<!---->
		<!--		</div>-->

		<!--		In  your controller:-->

		<!--		Change the method that is calling the form view and add-->

		<!--		public function contact(){-->
		<!---->
		<!--		$this->getView("header", array("pagename"=>"contact"));-->
		<!---->
		<!--		$random = substr( md5(rand()), 0, 7);-->
		<!---->
		<!--		$this->getView("contact",array("cap"=>$random));-->
		<!---->
		<!--		}-->

		<!--		In your controller change the method that is receiving the form values-->

		<!--		public function contactRecv(){-->
		<!---->
		<!--		$this->getView("header");-->
		<!---->
		<!---->
		<!---->
		<!--		if(form post variable==session variable){-->
		<!---->
		<!--		if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){-->
		<!---->
		<!--		echo "Email invalid";-->
		<!---->
		<!--		echo "<br><a href='/welcome/contact'>Click here to go back</a>";-->
		<!---->
		<!--		}else{-->
		<!---->
		<!--		echo "Email valid";-->
		<!---->
		<!--		}-->
		<!---->
		<!--		}else{-->
		<!---->
		<!--		echo "Invalid captcha";-->
		<!---->
		<!--		echo "<br><a href='/welcome/contact'>Click here to go back</a>";-->
		<!---->
		<!--		}-->
		<!---->
		<!--		}-->
		<form action="/Contact/contactRecv" method="post">
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
			<?
				function create_image($cap) {
					unlink("./assets/image1.png");
					global $image;
					$image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
					$background_color = imagecolorallocate($image, 255, 255, 255);
					$text_color = imagecolorallocate($image, 0, 255, 255);
					$line_color = imagecolorallocate($image, 64, 64, 64);
					$pixel_color = imagecolorallocate($image, 0, 0, 255);
					
					imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
					
					for ($i = 0; $i < 3; $i++) {
						imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
					}
					
					for ($i = 0; $i < 1000; $i++) {
						imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
					}
					
					$text_color = imagecolorallocate($image, 0, 0, 0);
					ImageString($image, 22, 30, 22, $cap, $text_color);

//				Create your session variable that carries the data, you will check against this in your controller.
					$_SESSION["email"] = "mike@aol.com";
					
					imagepng($image, "./assets/image1.png");
					
				}
				
				create_image($data["cap"]);
				echo "<img src='/assets/image1.png'>";
			?>
			<div>

				<label for="captcha">Enter Captcha </label>
				<input name="captcha" type="captcha" id="captcha" placeholder="">

			</div>
			<button name="submit" id="messageSubmit">Submit</button>
			<!--			<input type="button" class="btn btn-dark" name="ajaxSubmit" id="ajaxSubmit" value="ajax submit">-->
		</form>
	</div>
</div>