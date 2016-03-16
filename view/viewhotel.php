<html>
<head></head>
<body>
 	
   <?php 
	   echo'<a href = "javascript:void(0);">
	    	 <img src="'.$hotel['img_src'].'">
	   	</a>';   
        echo '<h4>ID:' . $hotel['id'] . '<br/></h4>';
        echo "<h4>Title:" . $hotel['title'] . '<br/></h4>';
        echo '<h4>Description:' . $hotel['destination'] . '<br/></h4>';
    ?>
</body>
</html>
