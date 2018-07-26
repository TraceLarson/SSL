<div class="container content-container d-none">
<!--    <a href="/About/showAddForm">Add New</a><br>-->
    <div class="Starter Template">
        <h1>Fruits</h1>
        <p><a href="/About/showAddForm">Add New</a></p>
	    <?
		    foreach ($data as $fruit){
			    echo $fruit["name"]."<a href='/About/edit/".$fruit["id"]."'>EDIT</a><br>";
		    }
	
	    ?>
    </div>
    
<!--	<div id="aboutCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">-->
<!--		<ol class="carousel-indicators">-->
<!--			<li data-target="#aboutCarousel" data-slide-to="0" class="active"></li>-->
<!--			<li data-target="#aboutCarousel" data-slide-to="1"></li>-->
<!--			<li data-target="#aboutCarousel" data-slide-to="2"></li>-->
<!--		</ol>-->
<!--		<div class="carousel-inner" role="listbox">-->
<!--			<div class="carousel-item active">-->
<!--				<div class="jumbotron">-->
<!--					<h1 class="display-4">Model!</h1>-->
<!--					<p class="lead">The Model is what computes the information to give back to the controller</p>-->
<!--					<hr class="my-4">-->
<!--					<p>It can talk to a data base and the controller, but not the view.</p>-->
<!--					<p class="lead">-->
<!--						<a class="btn btn-primary btn-lg" href="https://www.sitepoint.com/the-mvc-pattern-and-php-1/" role="button" target="_blank">Learn more</a>-->
<!--					</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="carousel-item">-->
<!--				<div class="jumbotron">-->
<!--					<h1 class="display-4">View!</h1>-->
<!--					<p class="lead">The View is what displays the information to the user or client.</p>-->
<!--					<hr class="my-4">-->
<!--					<p>It takes information from controller which was computed in the model, it doesn't talk to the model.</p>-->
<!--					<p class="lead">-->
<!--						<a class="btn btn-primary btn-lg" href="https://www.sitepoint.com/the-mvc-pattern-and-php-1/" role="button" target="_blank">Learn more</a>-->
<!--					</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="carousel-item">-->
<!--				<div class="jumbotron">-->
<!--					<h1 class="display-4">Controller!</h1>-->
<!--					<p class="lead">The controller takes in user input and passes it to the model for computing and displays it with a view.</p>-->
<!--					<hr class="my-4">-->
<!--					<p>It is the only class that talks to both the Model and the View.</p>-->
<!--					<p class="lead">-->
<!--						<a class="btn btn-primary btn-lg" href="https://www.sitepoint.com/the-mvc-pattern-and-php-1/" role="button" target="_blank">Learn more</a>-->
<!--					</p>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<a class="carousel-control-prev" href="#aboutCarousel" role="button" data-slide="prev">-->
<!--			<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--			<span class="sr-only">Previous</span>-->
<!--		</a>-->
<!--		<a class="carousel-control-next" href="#aboutCarousel" role="button" data-slide="next">-->
<!--			<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--			<span class="sr-only">Next</span>-->
<!--		</a>-->
<!--	</div>-->
</div>