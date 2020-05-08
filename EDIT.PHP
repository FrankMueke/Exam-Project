<table border='1'>
                  
                  <tr>
                     <th>REGISTRATION NUMBER</th>
                     <th>ASSIGN1</th>
                     <th>ASSIGN2</th>
                     <th>CAT1       </th>
                     <th>CAT2       </th>
                     <th>exam  </th>
                     <th>Aggre  </th>
                     <th>insert  </th>
                  </tr>";
            while($row=mysqli_fetch_array($run_query)){
            $reg=array($row["register_no"]);
            $group=$row["group_name"];
            $unit=$row["unit_name"];
            $u_id=$row['u_id'];
           

          
                  foreach($reg as $value){
                  echo"
                  <div id='grade'> 
                  <tr>
                     <td><input type='text' class='form-control' pid='$u_id' id='reg-$u_id' value='' disabled></td>
                     <td><input type='text' class='form-control' pid='$u_id' id='assign1-$u_id' value=''></td>
                     <td><input type='text' class='form-control' pid='$u_id' id='assign2-$u_id' value=''></td>
                     <td><input type='text' class='form-control' pid='$u_id' id='cat1-$u_id' value=''></td>
                     <td><input type='text' class='form-control' pid='$u_id' id='cat2-$u_id' value=''></td>
                     <td><input type='text' class='form-control' pid='$u_id' id='exam-$u_id' value=''></td>
                     <td><input type='text' class='form-control' pid='$u_id' id='aggr-$u_id' value=''></td>
                     <td>
                        <div class='btn-group'>
                         <a href='#' update_id='$u_id' class='btn btn-danger update'><span class='fa-fa-okay'></span></a>
                        </div>
                     </td>
                  </tr>
                  </div>";}}
                  echo"
                  <tr>
                     <th colspan='3'>GROUP:$group</th>
                     <th colspan='4'>UNIT NAME:$unit</th>
                  </tr>
        
                </table>
               </div>
               <div class='col-sm-1'></div>
               </div>
               </div>
         ";
                  }
                }
                $(function () {
    var myArray = ["one", "two", "three", "four", "five"];
    $.each(myArray, function (index, value) {
        console.log(value);
    });
});
                       