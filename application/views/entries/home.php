<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="container">
			<div class="row">
				<h1>List of Entries</h1>
				<div class="input-group" style="padding-bottom: 10px">
					<input id="filter" type="text" class="form-control" placeholder="Type here to filter...">
				</div>
			</div>

			<div class="row">
				<a class="btn btn-success btn-block" href="<?=site_url("entries/create");?>">Create Entry</a>
			</div>
		</div>
