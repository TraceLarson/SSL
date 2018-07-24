
<nav class="navbar navbar-expand-sm navbar-light bg-light shadow p-3 mb-5 rounded ">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<? foreach ($data['Menu'] as $item => $value): ?>
			<li class="nav-item <? if(ltrim($value,'/') == $data['CurrentPage'] ){echo 'active';} ?>">
				<a class="nav-link" href="<?= $value?>"><?echo $item;?> <span class="sr-only">(current)</span></a>
			</li>
			<? endforeach;?>
		</ul>
		<span style="color: red"><?=@$_REQUEST["msg"] ? $_REQUEST["msg"] : '';?></span>
		<? if(@$_SESSION["loggedin"] and (@$_SESSION["loggedin"] == 1 || @$_SESSION["loggedin"] == 2 )){?>
			<form class="form-inline ml-auto">
				<a class="btn-sm badge-light" href="/Profile"> Profile</a>
				<a class="btn-sm badge-light" href="/Auth/logout"> Logout</a>
			</form>
		<? }else{?>
			<form class="form-inline ml-auto" role="search" method="post" action="/Auth/login">
				<div class="form-group">
					<input type="text" class="form-control-sm" name="username" placeholder="Username">
				</div>
				<div class="form-group ">
					<input type="text" class="form-control-sm" name="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-sm btn-dark mb-3 mb-sm-0">Sign-In</button>
			</form>
		<? }?>
	</div>
</nav>