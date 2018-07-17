<div class="content-container d-none">
	<div class="jumbotron">
		<h1 class="display-4">Hello World!</h1>
		<p class="lead">This is my MVC Frame work built for Server Side Languages</p>
		<hr class="my-4">
		<p>This Framework uses Model View Controller and PHP.</p>
	</div>
	<div id="modal-button-container" class="d-flex justify-content-around ">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelModal">
			Model
		</button>
		<div class="modal fade" id="modelModal" tabindex="-1" role="dialog" aria-labelledby="modelModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalModalTitle">Model</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Information about the Model.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal">
			View
		</button>
		<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="viewModalTitle">View</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Information about the View.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#controllerModal">
			Controller
		</button>
		<div class="modal fade" id="controllerModal" tabindex="-1" role="dialog" aria-labelledby="controllerModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="controllerModalTitle">Controller</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Information about the Controller.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="progress">
	<div class="progress-bar" role="progressbar" style="width: 0%; transition: width ease-in-out;" aria-valuenow="1"
	     aria-valuemin="0" aria-valuemax="100"></div>
</div>
