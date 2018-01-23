<?php
	include("include/z_db.php");
	// ...................................Add Company
	if(isset($_GET["submitComp"]))
	{
		$name=$_GET["name"];
		
		$result=mysql_query("select * from `company` where Company='".$name."';",$link);
	 	$row=mysql_num_rows($result); 
	 	if($row>o)
	 	{
			echo "<script>
		  	alert('$name Company is already avilable so plz enter another Company Name');
		  	document.location='AddComp.php';
		  	</script>";
		} 
		else
		{
		
			$a=mysql_query("INSERT INTO `company` VALUES('$name');",$link);

      		
		 	if($a)
		  	{
			  	echo "<script>
			 	alert('SUCESSFULLY INSERTED COMPANY.......');
			 	document.location='AddComp.php';
			 	</script>";
			}
		}
	}
	
	//......................................Delete Company
	if(isset($_GET["submitCompDelete"]))
	{
		$name=$_GET["name"];
		
		$result=mysql_query("select * from `company` where Company='".$name."';",$link);
	 	$row=mysql_num_rows($result); 
	 	
		if($row>o)
		{
	 
		$a=mysql_query("DELETE FROM company WHERE company='$name'",$link);
		if($a)
		  	{
			  	echo "<script>
			 	alert('SUCESSFULLY DELETE COMPANY.......');
			 	document.location='AddComp.php';
			 	</script>";
			}
		} 
		else
		{
			echo "<script>
		  		alert('$name is not avilable so plz enter correct Company');
		  		document.location='AddComp.php';
		  	</script>";
		}
	}
	
	//....................................Add Category check
	
	if(isset($_GET["submitCate"]))
	{
		$name=$_GET["name"];
		
		$result=mysql_query("select * from `category` where Category='".$name."';",$link);
	 	$row=mysql_num_rows($result); 
	 	if($row>o)
	 	{
			echo "<script>
		  	alert('$name is already avilable so plz enter another Category Name');
		  	document.location='AddCate.php';
		  	</script>";
		} 
		else
		{
		
			$a=mysql_query("INSERT INTO `category` VALUES('$name');",$link);

      		
		 	if($a)
		  	{
			  	echo "<script>
			 	alert('SUCESSFULLY INSERTED CATEGORY.......');
			 	document.location='AddCate.php';
			 	</script>";
			}
		}
	}
	
	//......................................Delete Category
	if(isset($_GET["submitCateDelete"]))
	{
		$name=$_GET["name"];
		
		$result=mysql_query("select * from `category` where Category='".$name."';",$link);
	 	$row=mysql_num_rows($result); 
	 	
		if($row>o)
		{
	 
		$a=mysql_query("DELETE FROM category WHERE category='$name'",$link);
		if($a)
		  	{
			  	echo "<script>
			 	alert('SUCESSFULLY DELETE CATEGORY.......');
			 	document.location='AddCate.php';
			 	</script>";
			}
		} 
		else
		{
			echo "<script>
		  		alert('$name is not avilable so plz enter correct Category');
		  		document.location='AddCate.php';
		  	</script>";
		}
	}
	
	//..................................Add Product check
	
	if(isset($_POST["submitProd"]))
	{
		$model=$_POST['model'];
		$name=$_POST['name'];
		$image=$_POST['image'];
		$price=$_POST['price'];
		$offer_price=$_POST['offer_price'];
		$save=$_POST['save'];
		$warranty=$_POST['warranty'];
		$emi=$_POST['emi'];
		$ship_time=$_POST['shipping_time'];
		$type=$_POST['Prodtype'];
		$descrip=$_POST['discrip'];
	
		
		
		$result=mysql_query("select * from all_model where model='$model' AND name='$name' AND type='$type'",$link);
	 	$row=mysql_num_rows($result); 
	 	if($row>o)
	 	{
			echo "<script>
		  	alert('$model of $name is with $type already avilable so plz enter another Model');
		  	document.location='Addprod.php';
		  	</script>";
		} 
		else
		{
		
			$a=mysql_query("INSERT INTO all_model VALUES('$image','$price','$offer_price','$save','$warranty','$emi','$ship_time','$name','$type','$model','$descrip');",$link);

      		
		 	if($a)
		  	{
			  	echo "<script>
			 	alert('SUCESSFULLY INSERTED PRODUCT.......');
			 	document.location='Addprod.php';
			 	</script>";
			}
		}
	}
	?>
	