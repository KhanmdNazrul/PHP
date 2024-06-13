 <!-- <a href="get_post.php?name=Mohiuddin&age=27&address=Gopalgonj">Click Here</a><br> -->
<!-- without logic or with error in view -->
<!-- <?php 
echo "<pre>";
 print_r($_GET);//testing
//  print_r($_POST);//testing
 echo "<hr>";
 
echo $_POST["email"];//applied
echo "<br>";
echo $_POST["pswd"];//applied
?> -->
<!-- with logic to avoid error -->
<!-- <?php 
if(isset($_POST["subscribe"])){
    echo $_POST["email"];
    echo "<br>";
echo $_POST["pswd"];

}
?> -->
<!-- Universal server to catch! -->
<?php 
if(isset($_REQUEST["subscribe"])){
    echo $_REQUEST["email"];
    echo "<br>";
echo $_REQUEST["pswd"];

}
?>

<h2>POST METHOD</h2>
<form action="" method="post">

 Email address:<br />
<input type="text" name="email" size="20" maxlength="50" value="" />
<br>

 Password:<br />
<input type="password" name="pswd" size="20" maxlength="15" value="" />

<br>
<input type="submit" name="subscribe" value="subscribe!" />
<br>
</form>


