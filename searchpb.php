<!DOCTYPE html>
<html>
<head>
  <title>problem searching</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>
<div id="invoice_no_list_div">
    <?php
    include("mainpage.php");
    include('dbconnection.php');
    ?>
  </div>
<h2 style="color: yellow;">MAJOR PROBLEMS/ பிரச்சினைகள்:</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for problems/சிக்கல்களைத் தேடுங்கள்" title="Type in a name">

<ul id="myUL">
<?php  
$sql = "SELECT * FROM problem ";
$prepare = $conn->prepare($sql);
$exc = $prepare->execute();
$prob_details = $prepare->fetchAll();
foreach ($prob_details as $value) {
  # code...
$link = "officials.php?problem_name=".$value['problem_name'];
?>
  <li><a href="#" onclick="print_journal('<?php echo $link; ?>')"> <?php echo $value['problem_name'];  ?> </a></li>
<?php } ?>
</ul>

<script>
  function print_journal(url)
{
  onmouseover19= window.open(url,'onmouseover19','height=600,width=1000,scrollbars=yes,resizable=no,left=50,top=50,toolbar=no,location=no,directories=no,status=no,menubar=no');
}
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
