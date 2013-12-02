<div class="container-fluid">

	<div class="container">
		<div class="content">
			<div class="row">
				<div class="search-form">
					<h2>Search By Field</h2>
					<?php //if(! is_null($msg)) echo $msg;?>
					<form action="<?php echo base_url();?>index.php/searchByField/search_by_field" method="post" name="search_by_field">
						<fieldset>
							<div class="clearfix">
								<input type="text" name='f_name' id='f_name' placeholder="First Name">
								<br/> <br/>
								<input type="text" name='l_name' id='l_name' placeholder="Last Name">
								<br/> <br/>
							</div>
							<button class="btn btn-primary" type="submit">Search </button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
