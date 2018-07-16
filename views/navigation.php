
<nav class="navbar navbar-expand-sm navbar-light bg-light shadow p-3 mb-5 rounded ">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<? foreach ($data['Menu'] as $item => $value): ?>
			<li class="nav-item <? if(ltrim($value,'/') == $data['CurrentPage'] ){echo 'active';} ?>">
				<a class="nav-link" href="<?echo $value?>"><?echo $item;?> <span class="sr-only">(current)</span></a>
			</li>
			<? endforeach;?>
		</ul>
	</div>
</nav>