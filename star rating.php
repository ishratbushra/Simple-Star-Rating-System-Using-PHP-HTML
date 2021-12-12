<html>
	<head>
	<title>Star Rating</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		.rated{
		color:yellow;
		}
		span#s1{ color:magenta;}
		</style>
	</head>
	<body>
		<span id="s1"><b>Simple Star Rating System<b></span>
		<form action="" method="post">
			<input type="text" name="rate">
			<input type="submit" name="submit" value="Rate">
		</form>
		<br>
		<?php
			if(isset($_POST['submit']))
				{
				$value=$_POST['rate'];
					if($value==1)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
		?>
		<?php if($value==1.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($value==2)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($value==2.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($value==3)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($value==3.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($value==4)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($value==4.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp					
						
					<?php
					}
				
				
		?>
		<?php if($value==5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>					
						
					<?php
					}
				}
				
		?>
		
	</body>
</html>