$(document).ready(function(){
    get_units();
    //display_students();
    $("#login").click(function(event){
        event.preventDefault();
        var regno= $("#regno").val();
        var pass = $("#password").val();
        $.ajax({
            url :"login.php",
            method :"POST",
            data :{userLogin:1,userRegno:regno,userPassword:pass},
            success : function(data){
                window.location.href="profile.php";
            }
               
        })
    })
    $("#loginl").click(function(event){
        event.preventDefault();
        var email= $("#emaill").val();
        var pass = $("#passwordl").val();
        $.ajax({
            url :"loginl.php",
            method :"POST",
            data :{lecLogina:1,userEmail:email,userPasswordl:pass},
            success : function(data){
                window.location.href="profilel.php";
            }
               
        })
    })
    $("#loginc").click(function(event){
        event.preventDefault();
        var email= $("#emailc").val();
        var pass = $("#passwordc").val();
        $.ajax({
            url :"loginc.php",
            method :"POST",
            data :{codLogin:1,codEmail:email,codPassword:pass},
            success : function(data){
                window.location.href="codprofile.php";
            }
               
        })
    })
    //capture data from the unit assignmment form and sends it to action.php
    //if succesful,it alerts
    $("#unit").click(function(event){
        event.preventDefault();
        var code= $("#u_code").val();
        var name = $("#u_name").val();
        var group = $("#group1").val();
        var lec_reg = $("#lec_reg").val();
        $.ajax({

            url    :"action.php",
            method :"POST",
            data   :{unit_assignment:1,codeCode:code,codeName:name,
                codeGroup1:group,codeLec:lec_reg},
            success:function(data){
                $("#unit_msg").html(data);
                get_units();
            }
        })
    })
    get_units();
    function get_units(){
        $.ajax({
            url:'action.php',
            method :'POST',
            data :{get_units:1},
            success:function(data){
                $("#unit_check").html(data);
            }
        })
    }
    $("body").delegate(".remove","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("remove_id");
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {removeFromDepartment:1,removeId:pid},
			success : function(data){
				$("#delete_msg").html(data);
                get_units();
		    }
		})
		
    })
    $("#displayform").click(function(event){
        event.preventDefault();
        var academic_yr=$('#academic_yr').find(":selected").text();
        var semester=$('#sem').find(":selected").text();
        $.ajax({
            url    :"action.php",
            method :"POST",
            data   :{displayForm:1,checkYr:academic_yr,checkSem:semester},
            success:function(data){
                $("#confirm_detail").hide();
                $("#displaystudents").html(data);

            }
        })
    })
    $("body").delegate(".update","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("update_id");
		var assign1 =$("#assign1-"+pid).val();
		var assign2 =$("#assign2-"+pid).val();
		var cat1 = $("#cat1-"+pid).val();
		var cat2 = $("#cat2-"+pid).val();
		var exam = $("#exam-"+pid).val();
		var aggr = $("#aggr-"+pid).val();
        $.ajax({
			url : "action.php",
			method : "POST",
			data : {updateResults:1,updateId:pid,assign1:assign1,assign2:assign2,cat1:cat1,cat2:cat2,exam:exam,aggr:aggr,aggr:aggr},
			success : function(data){
				$("#update_msg").html(data);
		    }
		})
		event.preventDefault();
		
    })
})