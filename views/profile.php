<div class="content-container d-none">
	<div class="col-md-12 col-xs-12">
		<img src="/assets/profile_23.jpg" class="img-thumbnail picture d-xs-none"/>
		<form action="/Profile/update" method="post" enctype="multipart/form-data">
			<label class="btn btn-primary btn-file" style="width: 100px;">Browse
				<input name="img" type="file" style="display: none;" value="Browse">
			</label>
			<input type="submit" value="Update" class="btn btn-primary">
		</form>
		<div>
			<h1><?= $data[0]?></h1>
			<h4>Student</h4>
			<p><span><B>ABOUT:</B><?=$data[2]?></span></p>
			
		</div>
	</div>
</div>