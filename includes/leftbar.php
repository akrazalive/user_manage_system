	

<?php 

$current_page = basename($_SERVER['PHP_SELF']);

?>

	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
			<li class="ts-label">Main</li>
		<li <?php if ($current_page === 'profile.php') echo 'class="active"'; ?>>
            <a href="profile.php"><i class="fa fa-user"></i> &nbsp;Profile</a>
        </li>
        <li <?php if ($current_page === 'notes.php') echo 'class="active"'; ?>>
            <a href="notes.php"><i class="fa fa-sticky-note"></i> &nbsp;Notes</a>
        </li>

			<li class="hide"><a href="feedback.php"><i class="fa fa-envelope"></i> &nbsp;Feedback</a>
			</li>
			<li class="hide"><a href="notification.php"><i class="fa fa-bell"></i> &nbsp;Notification<sup style="color:red">*</sup></a>
			</li>
			<li class="hide"><a href="messages.php"><i class="fa fa-envelope"></i> &nbsp;Messages</a>
			</li>
			</ul>
			<p class="text-center" style="color:#ffffff; margin-top: 100px;">BakLaw Portal © 2024</p>
		</nav>

		<style>
			li.active {
				background: black;
			}
		</style>
