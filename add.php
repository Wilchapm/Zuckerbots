<html>
<?php 
include_once("index.html")
?>
<link rel="stylesheet" href="Zuckerbots.css">
<style>

	
	.button {

	display: inline-block;
        padding:  10px 25px 10px;
        text-align: center;
        text-decoration: none;
	color: black;
        background-color: white;
        border-radius: 6px;
	outline: none;
	margin-bottom: 70px;
	margin-top: 70px;
	font-weight: bold;
	font-size:20px;

      }

	.form {
	margin-top: 20px;
	margin-bottom: 30px;
		
}
	label {
	display:block;
	font-weight: bold;
	font-size: 26px;
	color: white;
	font-family: monospace;
	text-shadow: black 3px 3px 3px;
	
}
	
	
    </style>

<h1> Add Item </h1>
	<form action="process-add.php">
		<label for =Item_ID>Item ID</label>
		 <input type="text" name="id" class="form"><br>
		<label for="Item_Name">Item Name</label>
		 <input type="text" name="name" class="form"><br>
		<label for= "Item_Q">Item Quantity</label>
		 <input type="text" name="qty" class="form"><br>
	
		<input type="submit" value="Add item" class="button"> 

		</form>
			</html>
