<?Php
$name=$_POST['name'];
if(isset($name) and strlen($name) > 1){
setcookie ("InStyleDecor", $name,time()+86400);

header ("Location: cookie2.php"); 
}else{


}
?>