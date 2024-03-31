
<?php 

$current_page = basename($_SERVER['PHP_SELF']);

?>


	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li <?php if ($current_page === 'dashboard.php') echo 'class="active"'; ?>><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
			<li <?php if ($current_page === 'newuser.php') echo 'class="active"'; ?>><a href="newuser.php"><i class="fa fa-plus"></i> Add New User</a>
			<li <?php if ($current_page === 'userlist.php') echo 'class="active"'; ?>><a href="userlist.php"><i class="fa fa-users"></i> All Users</a>
			</li>
			<li <?php if ($current_page === 'profile.php') echo 'class="active"'; ?>><a href="profile.php"><i class="fa fa-user"></i> &nbsp;Profile</a>
			</li>
			<li class="hide"><a href="feedback.php"><i class="fa fa-envelope"></i> &nbsp;Feedback</a>
			</li>
			<li class="hide"><a href="notification.php"><i class="fa fa-bell"></i> &nbsp;Notification <sup style="color:red">*</sup></a>
			</li>
			<li <?php if ($current_page === 'deleteduser.php') echo 'class="active"'; ?>><a href="deleteduser.php"><i class="fa fa-user-times"></i> &nbsp;Deleted Users</a>
			</li>
			<li <?php if ($current_page === 'download.php') echo 'class="active"'; ?>><a href="download.php"><i class="fa fa-download"></i> &nbsp;Download Users-List</a>
			</li>
			</ul>
			<p class="text-center" style="color:#ffffff; margin-top: 100px;">© Copyrights 2024</p>
		</nav>

		<style>
			li.active {
				background: black;
			}
		</style>	