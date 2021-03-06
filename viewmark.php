<?php
session_start();
require_once("/includes/dbconn.php");
include_once "functions.php";
isloggedin();
?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET['id'];
  $sql = "SELECT * FROM students WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $row = mysqli_fetch_array($result);
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $adm_no=$row['adm_no'];
    $remark=htmlspecialchars($row['remarks']);
    //fetching internalmarks
    $attend=$row['attend'];
    $assign=$row['assign'];
    $seminar=$row['seminar'];
    $test1=$row['test1'];
    $test2=$row['test2'];
    $wgp=$row['wgp'];
    $agp=$row['agp'];
    $grade=$row['grade'];
  }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>BCA Project- WMO</title>
  <meta name="description" content="">
  <meta name="author" content="">  
<?php include_once "/includes/css.php";?>
</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
 <a href="internalmark.php"><h6>Back to Internal Marks</h6></a>
<section class="container student-page">
<div class="row">
  <label for="Name">Name:</label><?php echo $fname . " " . $lname; ?>
  <label for="Adm">Adm-No:</label><?php echo $adm_no; ?>
  <label for="Remark">Remarks:</label><?php echo $remark; ?>
</div><!--end of row-->
<hr/>
<hr/

<section class="test">
  <form>
    <div class="row">
      <div class="two columns">
        <label for="Attendance">Attendance</label>
        <select class="u-full-width" id="attend" name="attend">
          <option><?php echo "$attend";?></option>
        </select>
      </div>
      <div class="two columns">
        <label for="Seminar">Seminar</label>
        <select class="u-full-width" id="seminar" name="seminar">
           <option><?php echo "$seminar";?></option>
        </select>
      </div>
      <div class="two columns">
        <label for="Assignment">Assignment</label>
        <select class="u-full-width" id="assign" name="assign">
           <option><?php echo "$assign";?></option>
        </select>
      </div>
      <div class="two columns">
        <label for="test1">Test1</label>
        <select class="u-full-width" id="test1" name="test1">
           <option><?php echo "$test1";?></option>
        </select>
      </div>
      <div class="two columns">
        <label for="test2">Test2</label>
        <select class="u-full-width" id="test2" name="test2">
           <option><?php echo "$test2";?></option>
        </select>
      </div>
      <div class="two columns">
        <label for="WGP">WGP</label>
        <select class="u-full-width" id="wgp" name="wgp">
          <option><?php echo "$wgp";?></option>
        </select>
      </div>
    </div><!--end of row-->
    <div class="row">
      <div class="two columns">
        <label for="AGP">AGP</label>
        <select class="u-full-width" id="agp" name="agp">
           <option><?php echo "$agp";?></option>
        </select>
      </div>
      <div class="two columns">
        <label for="Grade">Grade</label>
        <select class="u-full-width" id="grade" name="grade">
          <option><?php echo "$grade";?></option>
        </select>
      </div>
    </div>
    <a href="internalmark.php"><input type="button" class="button-primary" value="Back to Internal Marks"></a>
  </form>
</section>

</div><!--end of template container-->


<?php include_once("includes/footer.php");?>