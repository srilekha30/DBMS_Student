<?php 
 
 extract($_POST);
 if(isset($update))
 {
 	 $que=mysqli_query($con,"update student set name='$n',mob='$mob',gender='$gen',program='$program',course='$course'where email='$student'");
	
$err="<font color='blue'>Profile Updated Successfully</font>";
	 
 }
 
 //select 
  $que=mysqli_query($con,"select * from student where email='$student'");
$res =  mysqli_fetch_array($que);

 ?>

<div class="row">
<div class="col-sm-12">
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  	</div> 
  </div>
 </div> 


<div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="n" value="<?php  echo $res[1]; ?>" required>
  </div> 
  </div>
  
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" readonly="readonly" value="<?php  echo $res[2]; ?>" >
  </div>
  </div>
 </div> 


  
<div class="row">
  
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="number" value="<?php  echo $res[4]; ?>" class="form-control" name="mob" >
  </div> 
  </div>
<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Course</label>
  <input type="text" value="<?php  $que1=mysqli_query($con,"select * from  category where id='".$res['course']."'");
$re= mysqli_fetch_array($que1);
echo $re['name']; ?>" class="form-control" name="mob" readonly="readonly">
  </div> 
  </div>



</div>  
  

<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
   <select class="form-control" name="gen">
  <option value="m" <?php if($res[5]=="m"){echo "selected";} ?>>Male</option>
  <option value="f" <?php if($res[5]=="f"){echo "selected";} ?>>Female</option>
  </select>
  </div> 
  </div>
  
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Programme</label>
  <input type="text" value="<?php  echo $res['program']; ?>" class="form-control" name="mob" readonly="readonly">
  </div> 
  </div>
</div>  
<div class="row">
<div class="col-sm-4">
 
         <button name="update" class="btn btn-lg btn-success btn-block" type="submit">Update Profile</button>
</form>	
	</div>
	</div>
