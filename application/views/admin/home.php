<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="container">
			<div class="row">
				<div class="input-group">
					<input id="filter" type="text" class="form-control" placeholder="Type here to filter...">
				</div>
			</div>

			<div class="row">
				<table class="table table-striped table-bordered table-hover">
					<thead class="thead-dark">
						<tr class="text-center">
							<th>User ID</th>
							<th>User Email</th>
							<th>User Full Name</th>
							<th>User Role</th>
							<th>User Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody class="searchable">
<?php
	foreach ($userList as $user){
		$user = (array) $user;

		switch ($user['userRole']) {
			case '10':
				$userRole = "Manager";
				break;
			case '20':
				$userRole = "Administrator";
				break;
			default:
				$userRole = "Accountant";
				break;
		}

		switch ($user['userActive']) {
			case '0':
				$userStatus = "<span class='text-danger'>Disabled</span>";
				break;
			default:
				$userStatus = "<span class='text-success'>Active</span>";
				break;
		}

		echo '
						<tr class="text-center">
							<td>#'.$user["userID"].'</td>
							<td>'.$user["userEmail"].'</td>
							<td>'.$user["userFirstName"]." ".$user["userLastName"].'</td>
							<td>'.$userRole.'</td>
							<td>'.$userStatus.'</td>
							<td><a class="btn btn-info" href="'.site_url("admin/change/".$user["userID"]).'">Edit User</a></td>
						</tr>
		';
	}
?>
					</tbody>
				</table>
			</div>
		</div>
