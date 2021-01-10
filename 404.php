<?php
	require_once 'layout/header.php';
?>
	<main>
		<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<figure><img src="img/404.svg" alt="" class="img-fluid"></figure>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
						<form>
							<div class="search_bar">
								<input type="text" class="form-control" placeholder="What are you looking for?">
								<input type="submit" value="Search">
							</div>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /error -->		
	</main>
	<!-- /main -->
<?php
	require_once 'layout/footer.php';
?>