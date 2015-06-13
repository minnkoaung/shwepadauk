<?php
	$output ="<div class='alert alert-success'>";
	$output .= "<p>Your uploaded data<span style='color:#c22;'> ".$item_name. " </span>has been successfully inserted into Database.</p>";
	$output .= "<a href='admin.php?page=admin-card-data' class='btn btn-success'>Go back</a>";
	$output .= "</div>";
	return $output;

 ?>