


PHP input : </br>
<?php var_dump($postdata = file_get_contents("php://input"));?>

</pre>
<pre>
POST:</br>
<?php foreach ($_POST as $key => $value) {
    echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
} ?>


</pre>
<pre>
GET: <br>
<?php foreach ($_GET as $key => $value) {
    echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
} ?>
</pre>
<pre>
<?php   
echo  "------------------------------------- server =================";
print_r($_SERVER);
echo  "------------------------------------- Post =================";
print_r($_POST);
echo  "------------------------------------- get =================";
print_r($_GET);
echo  "------------------------------------- files =================";
print_r($_FILES); ?>
</pre>