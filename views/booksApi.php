<div class="container content-container d-none">
	<h1></h1>

	<div>
		<ul class="list-group">
			<h2>Books List</h2>
			<? foreach ($data as $item): ?>
			<li class="list-group-item"><? echo $item['volumeInfo']['title'] ?></li>
			<? endforeach;?>
		</ul>
	</div>
	<div>
	
	</div>

</div>