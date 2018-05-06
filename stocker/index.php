<?php
get_header();
global $wpdb;
$query = "SELECT post_title, post_content, post_date FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_date DESC";
$rows = $wpdb->get_results($query);
?>

<body>

	<?php
	foreach($rows as $row) {
		
			echo "<div class='postBox'>";
				echo "<div class='postHeader'>";
		        	echo "<h1 class='postTitle'>" . $row->post_title . "</h1>";
		        	echo "<hr style='width:80%'>";
		       		echo "<h3 class='postDate'>" . date("d/m/Y h:i", strtotime($row->post_date)) . "</h3>";
				echo "</div>";
	        	echo "<div class='postContent'>" . $row->post_content . "</div>";
			echo "</div>";
	        //echo "<hr>";
	}
	?>
	
</body>