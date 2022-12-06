<html>
<link rel='stylesheet' href='Zuckerbots.css'>
<?php
include_once("index.html");
?>

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
        margin-bottom: 26px;
        margin-top: 70px;
	font-weight: bold;
	font-size:22px;
	

      }

        .form {
        margin-top: 20px;
        margin-bottom: 30px;

}
        label {
        display:block;
        font-weight: bold;
	font-size: 26px;
	padding-top: 40px;
	font-family: monospace;
	  text-shadow: black 3px 3px 3px;
	padding-bottom: 26px;
}
    </style>
	
    <h1>Delete Item<h1>
	<form action="process-delete.php">
		<label>Item ID</label>
		 <input type="text" name="id"><br>
		<br>
		<input type="submit" value="Delete" class="button">

		</form>
			</html>
