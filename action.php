<?php
session_start();
include "db.php";

if(isset($_POST["unit_assignment"])){
    $u_code= $_POST['codeCode'];
    $u_name = $_POST['codeName'];
    $group = $_POST['codeGroup1'];
    $lec_reg = $_POST['codeLec'];
if(empty($u_code) || empty($u_name) || empty($group) || 
empty($lec_reg))
{
    echo "
        <div class='alert alert-danger'>
             <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>FILL ALL FIELDS</b>
        </div>
        ";
}else{
$sql="SELECT g_id FROM groups WHERE group_name='$group'";
$run_query=mysqli_query($con,$sql);   
if($row=mysqli_fetch_array($run_query)){
    if($run_query){
    $g_id=$row["g_id"];


$sql="INSERT INTO `units` (`u_id`, `g_id`, `unit_code`, `unit_name`, `group_name`, `lecregister_no`)
VALUES(NULL, '$g_id','$u_code', '$u_name', '$group', '$lec_reg')";
$run_query=mysqli_query($con,$sql);
    if($run_query){
        echo "
        <div class='alert alert-success'>
             <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>INPUT SUCCESSFULLY ADDED</b>
        </div>
        ";
    } 
   }
}
   else {
       echo"
   <div class='alert alert-danger'>
             <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>WRONG LECTRURER REGISTRATION</b>
        </div>
        ";

}
}}
if(isset($_POST["get_units"])){
    $sql="SELECT * FROM `units`";
    $run_query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_query)){
    $u_id=$row["u_id"];
    $u_cod= $row["unit_code"];
    $u_nam = $row["unit_name"];
    $grou1 = $row["group_name"];
    $lec_re = $row["lecregister_no"];
    echo"  
    <div class='container-fluid'>
    <div class='row'> 
        <div class='col-md-3'>
        <div class='btn-group'>
          <a href='#' remove_id='$u_id' class='btn btn-danger remove'><span class='fa-fa-trash'></span></a>
        </div>
        </div>
        <div class='col-md-2'><input type='text' class='form-control' value='$u_cod'></div>
        <div class='col-md-3'><input type='text' class='form-control' value='$u_nam'></div>
        <div class='col-md-2'>
           <input type='text' class='form-control' value='$grou1'>
        </div> 
        <div class='col-md-2'><input type='text' class='form-control' value='$lec_re'></div> 			             
        </div>
    </div>
    </div>
    <p><br/></p>

    ";
    }
}

    if(isset($_POST["removeFromDepartment"])){
		$pid = $_POST["removeId"];
		$sql ="DELETE FROM `units` WHERE u_id ='$pid'";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "
			<div class='alert alert-danger'>
                 <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Unit has been Removed Successfully...!</b>
            </div>
			";
        }	
    }
		if(isset($_POST["displayForm"])){
            $academic_yr = $_POST["checkYr"];
            $sem = $_POST["checkSem"];
            $lecreg=$_SESSION["lecregister_no"]; 
            $sql ="SELECT * FROM `groups`
            INNER JOIN units ON
            groups.g_id=units.g_id
            INNER JOIN students ON
            units.g_id=students.g_id
            Where
            units.lecregister_no='$lecreg' AND groups.semester='$sem'
            AND groups.academic_year='$academic_yr'";
          
            $run_query = mysqli_query($con,$sql);
            $sqll="SELECT * FROM `units` WHERE `lecregister_no`='$lecreg'";
            $query=mysqli_query($con,$sqll);
            $count=mysqli_num_rows($query);
            
            echo "

            <div class='container-fluid'>
			 <div class='row'>
              <div class='col-md-1'>
              </div>
       		       	 <div class='col-md-10'>
	                 <div class='card'>
			             <div class='card-header' style='text-align:center;'><b><span >RESULTS ASSIGNMENT</span></b>
                 		 </div>
			             <div class='card-body'>
                   <div class='container_fluid'>
			             <div class='row'>
                             <div class='col-md-2 card-header'><b>REGISTRATION NUMBER</b></div>
			                 <div class='col-md-2 card-header'><b>ASSIGN1</b></div>
			                 <div class='col-md-2 card-header'><b>ASSIGN2</b></div>
			                 <div class='col-md-1 card-header'><b>CAT1</b></div>
			                 <div class='col-md-1 card-header'><b>CAT2</b></div>
			                 <div class='col-md-2 card-header'><b>exam</b></div>
			                 <div class='col-md-1 card-header'><b>Aggre</b></div>
			                 <div class='col-md-1 card-header'><b>insert</b></div>
				         </div>
				         </div>
			             ";
                          $datas="";
                          $k=0;
                          $l=0;
                         while($row=mysqli_fetch_array($run_query)){
                            $k++;
                            $regi=$row["register_no"];
                            $group=$row["group_name"];
                            $unit=$row["unit_name"];
                            $u_id=$row['u_id'];
                       if($k==1){
                          $datas.="$regi";

                       }     
                       else{
                           $datas.=",$regi";
                       }
                                        
                 $value=explode(',',$datas);      
                    

                       echo"
                         <div class='container_fluid'>
                            <div class='row'>
                                <div class='col-md-2'><input type='text' class='form-control' pid='$u_id' id='reg-$u_id'  name='reg' value='$value[$l]' disabled></div>
                                <div class='col-md-2'><input type='text' class='form-control' pid='$u_id' id='assign1-$u_id' value=''></div>
                                <div class='col-md-2'><input type='text' class='form-control' pid='$u_id' id='assign2-$u_id' value=''></div>
                                <div class='col-md-1'><input type='text' class='form-control' pid='$u_id' id='cat1-$u_id' value=''></div>
                                <div class='col-md-1'><input type='text' class='form-control' pid='$u_id' id='cat2-$u_id' value=''></div>
                                <div class='col-md-2'><input type='text' class='form-control' pid='$u_id' id='exam-$u_id' value=''></div>
                                <div class='col-md-1'><input type='text' class='form-control' pid='$u_id' id='aggr-$u_id' value=''></div>
                                <div class='col-md-1'>
                                <div class='btn-group'>
                                    <a href='#' update_id='$u_id' class='btn btn-danger update'><span class='fa-fa-okay'></span></a>
                                </div>
                            </div>
                         </div>
                                
                   
                 ";
                 $l++;}
                  echo"
                  </div>
                  </div>
			             <div class='card-footer'>
                         </div>
                      </div>
                    <div class='col-md-1'></div>
                    </div>   
                    </div>
                    </div>
                  
                    ";
                  
                    }
            
    if(isset($_POST["updateResults"])){
        $pid = $_POST["updateId"];
        $reg=$_POST["reg"];
		$assign1 = $_POST["assign1"];
		$assign2 = $_POST["assign2"];
		$cat1 = $_POST["cat1"];
		$cat2 = $_POST["cat2"];
		$exam = $_POST["exam"];
        $aggr = $_POST["aggr"];



        $sql ="INSERT INTO `unitresults` (`ur_id`, `u_id`, `register_no`, `assignment1`, `assignment2`, `cat1`, `cat2`, `exam`,`aggre`) 
        VALUES (NULL, '$pid', '$reg', '$assign1', '$assign2', '$cat1', '$cat2', '$exam','$aggr')";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
            print "$reg";
			echo "
			<div class='alert alert-success'>
                 <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Results has been updated Successfully...!</b>
            </div>
			";
        }
    
    }
    
?>