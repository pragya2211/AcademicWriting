
<style type="text/css">
	
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 200px;
}

input[type=issue], select {
  width: 50%;
  height: 100px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 200px;
}
input[type=submit] {
  width: 20%;
  background-color: #3fada8;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 200px;
}

input[type=submit]:hover {
  background-color: #95a5a6;
}
</style>

<form method="POST" name="contact_form" action="execute.php"> 
	Your Name: <input type="text" name="name"> 
	Email Address:<input type="text" name="email"> 
	Message:<textarea name="message"></textarea>
	<input type="submit" name="submit" value="Submit">

</form>



?>

