<?php
include("db.php");
include("session-info.php");
if(empty($_SESSION['admin_username']))
{
	header('location: Admin.php');	
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Set Test</title>
<meta http-equiv="Content-Type" content="text/html; "/>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link href="style/reset.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{width:90%; margin:auto;min-width:600px; max-width:2000px; font-family:Tahoma, Geneva, sans-serif;}
a{  text-decoration:none; color:#F8F8FF;}
#main_box{
	position:absolute; width:400px;
	height:300px; left:50%; top:50%;
	margin-left:-200px; margin-top:-150px;
 	border:2px solid black;}
header{ 
	color:#fff; text-align:center; font-family:Tahoma, Geneva, sans-serif;
	background-color:rgba(0,51,102,1);
	width:100%;
	height:40px;
	position:absolute;
	top:0px;
	left:0px;
	padding-top:10px;
	border-bottom:1px solid #006;
	}
footer{
	color:#fff; text-align:center; font-family:Tahoma, Geneva, sans-serif;
	background-color:rgba(0,51,102,1);
	width:100%;
	height:30px;
	position:absolute;
	bottom:0px; border-top:1px solid #006;
	left:0px; padding-top:5px;}
.login_box{ 
	width:700px; height:500px; 
	position:absolute; top:50%; left:45%;
	margin-left:-400px; margin-top:-250px;
	text-align:center; border:1px dotted blue;
	}	
.log_container{ 
	position:absolute; top:10px; right:10px;
	width:300px; height:50px; 
	color:#fff; text-align:center;}
	

.xam_panel{ 
	width:600px; height:300px; padding-top:20px;
	border:1px solid rgba(153,153,153,0.7); background-color:rgba(153,153,153,0.4);
	box-shadow:0 0 10px rgba(153,153,153,0.3);
	margin:0 auto;}
.box_header{color:rgba(0,204,255,1); 
	margin-top:30px; font-size:18px;}

.test_paper{  
	border:1px solid #c4c4c4; text-align:center; margin-top:6px;
	margin-left:70px; margin-bottom:9px;
	width:400px; height:30px;
	cursor:pointer;
	font-family:"Comic Sans MS", cursive;
	background-color:#FFF;
	letter-spacing:1px;
	text-shadow:0px 1px 1px rgba(250,106,99,1);
	font-size:16px; padding:4px 4px 4px 4px; border-radius:4px;
	-moz-border-radius:4px; -webkit-border-radius:4px; box-shadow:0px 0px 8px #d9d9d9;
	-moz-box-shadow:0px 0px 8px #d9d9d9; -webkit-box-shadow:0px 0px 8px #d9d9d9;}
.test_paper:hover{ 
	background-color:rgba(165,237,241,1); color:rgba(255,0,0,1); border:2px solid #fff;
	text-shadow:1px 1px #000000;
	outline:none; border:1px solid #7bc1f7;box-shadow:0px 0px 8px #7bc1f7;
	-moz-box-shadow:0px 0px 8px #7bc1f7; -webkit-box-shadow:0px 0px 8px #7bc1f7;}
.btn{
	border:1px solid #c4c4c4; text-align:center; margin-top:6px; margin-bottom:9px;
	margin-left:-5px;
	margin-right:5px;
	width:202px; height:40px;
	cursor:pointer;
	font-family:"Comic Sans MS", cursive;
	background-color:#F60;
	text-shadow:2px 1px #CCCCCC;
	letter-spacing:1px;
	text-shadow:0px 1px 1px rgba(250,106,99,1);
	font-size:16px; padding:4px 4px 4px 4px; border-radius:4px;
	-moz-border-radius:4px; -webkit-border-radius:4px; box-shadow:0px 0px 8px #d9d9d9;
	-moz-box-shadow:0px 0px 8px #d9d9d9; -webkit-box-shadow:0px 0px 8px #d9d9d9;}
.btn:hover{ 
	background-color:#72E43A; color:#FFF; border:2px solid #fff;
	text-shadow:2px 1px #333333;
	outline:none; border:1px solid #7bc1f7;box-shadow:0px 0px 8px #7bc1f7;
	-moz-box-shadow:0px 0px 8px #7bc1f7; -webkit-box-shadow:0px 0px 8px #7bc1f7;}	

.test_btn_edit{
	border:1px solid #c4c4c4; text-align:center; margin-top:6px; margin-bottom:9px;
	width:100px; height:35px;
	cursor:pointer;
	font-family:"Comic Sans MS", cursive;
	background-color:#F60;
	text-shadow:2px 1px #CCCCCC;
	letter-spacing:1px;
	text-shadow:0px 1px 1px rgba(250,106,99,1);
	font-size:16px; padding:4px 4px 4px 4px; border-radius:4px;
	-moz-border-radius:4px; -webkit-border-radius:4px; box-shadow:0px 0px 8px #d9d9d9;
	-moz-box-shadow:0px 0px 8px #d9d9d9; -webkit-box-shadow:0px 0px 8px #d9d9d9;}	
.test_btn_edit:hover{ 
	background-color:#72E43A; color:#FFF; border:2px solid #fff;
	text-shadow:2px 1px #333333;
	outline:none; border:1px solid #7bc1f7;box-shadow:0px 0px 8px #7bc1f7;
	-moz-box-shadow:0px 0px 8px #7bc1f7; -webkit-box-shadow:0px 0px 8px #7bc1f7;}	
	
.right_box{
	width:428px; height:400px; 
	position:absolute; top:50%; left:39.5%;
	font-family:"Comic Sans MS", cursive;
	font-size:16px;
	margin-left:387px; margin-top:-180px;
	text-align:center; border:1px dotted blue;
	}	
.rbx_panel{ 
	width:414px; height:235px; padding-top:6px;
	overflow-y:auto;
	border:1px solid rgba(153,153,153,0.7); background-color:rgba(153,153,153,0.4);
	box-shadow:0 0 10px rgba(153,153,153,0.3);
	margin:0 auto;}	
	
#tst_ppr_bx{
	border:1px solid #c4c4c4; text-align:center; margin-top:4px;
	margin-left:1px; margin-bottom:9px;
	width:386px; height:225px;
	cursor:pointer;
	font-family:"Comic Sans MS", cursive;
	background-color:#FFF;
	letter-spacing:1px;
	text-shadow:0px 1px 1px rgba(250,106,99,1);
	font-size:16px; padding:4px 4px 4px 4px; border-radius:4px;
	-moz-border-radius:4px; -webkit-border-radius:4px; box-shadow:0px 0px 8px #d9d9d9;
	-moz-box-shadow:0px 0px 8px #d9d9d9; -webkit-box-shadow:0px 0px 8px #d9d9d9;
	}	
#tst_ppr_bx:hover{ 
	background-color:rgba(165,237,241,1); color:rgba(255,0,0,1); border:2px solid #fff;
	text-shadow:1px 1px #000000;
	outline:none; border:1px solid #7bc1f7;box-shadow:0px 0px 8px #7bc1f7;
	-moz-box-shadow:0px 0px 8px #7bc1f7; -webkit-box-shadow:0px 0px 8px #7bc1f7;}
	
  #button {  /* Box in the button */
        display: block;
		float:right;		
        width: 190px;
      }

      #button a {
        text-decoration: none;
		color:#036;
		 
      }

      #button ul {
        list-style-type: none;  
      }

      #button .top {
        background-color: #ddd;  
      }

      #button ul li.item {
        display: none;  
      }  

      #button ul:hover .item {  
        display: block;
		margin:5px;
		height:25px;
		color:#036;
        border-top: 1px dashed #00F; border-bottom: 1px dashed #00F;
        background-color: rgba(204,204,204,0.5);;
      }
.actions{ position:absolute; top:0px; right:0px;}	
</style>

<script type="text/javascript" src="js/jquery.1.11.1.min.js"></script>

</head>
<body>
	<header><txt style=" font-size:24px;">Jalpaiguri Govt. Engg. College</txt></header>
        <div style="position:absolute; top:3px; left:3px;">
    	<img src="image/jgec_logo.png" width="90" height="auto" />
    </div>
    <div id="log_container" class="log_container">
        <a title="home" style="float:left; margin-top:-5px;
     margin-right:10px;" id="TakeAction" class="gohome" href="home_admin.php" >
       <img src="image/home.png" width="43" height="auto"  />
    </a>
    <img src="image/user.png" width="30px" height="auto" style="margin-right:10px; float:left;" />
	<mno style="float:left; margin-top:4px;"><?php echo $_SESSION['admin_username'];?></mno>
     <div class="actions">
    <div id="button">
      <ul>
        <li class="top">
        	<a style="float:right;" id="TakeAction" class="logout" href="#" >
                <img src="image/gear.png" width="30px" height="auto"  />
            </a></li>
            <br>
            <br>
        <li class="item"><a href="chage_password.php">Change Password</a></li>
        <li class="item"><a href="view_result.php">View Result</a></li>
        <li class="item"><a href="logout_admin.php">Logout</a></li>
      </ul>
    </div>
    </div>
        
    </div>
    <div class="login_box" id="login_box">
    	<p class="box_header" id="box_header">Administrator Pannel</p>
        <hr  style=" background-color:rgba(0,204,255,1); width:95%; height:2px; border:0; margin-bottom:40px; margin-top:20px;"/>
        <div class="xam_panel" id="xam_panel">
        
        <form id="set_test_paper" action="add_testpaper.php" method="post" style="margin:20px;">
        
        
        <?php
		$query_test_type  = mysql_query("SELECT * FROM question_type"); 
		$num_rows_test_type  = mysql_num_rows($query_test_type); // Get the number of rows
		?>
        <div class="test_paper">Question Type:
        			 <?php
                      if($num_rows_test_type <= 0){
					  ?>	  
						<a href='insert_qtype.php' style="color:rgba(255,0,0,1)">No Types Found !! Insert New Type....</a>
                      <?php      
					  }else {
					  ?>
        			  <select name="qstn_type" >
                      <option  value='-1'  disabled="disabled" >--select type--</option>
					  <?php
					  while($list_q = mysql_fetch_assoc($query_test_type)){
					  ?>
                      <option name="<?php echo $list_q['type_Name'] ?>"  value="<?php echo $list_q['type_Name'] ?>"
								   <?php if($list_q['type_Name']=='Aptitude'){ ?>selected="selected"<?php } ?>>
                                   <?php echo $list_q['type_Name'] ?></option>
                      <?php } ?>
                       </select>
                      <?php } ?>
        </div>
        
        
        
        <div class="test_paper">Test paper name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<input name="testpapername" type="text" placeholder="Enter Test Paper Name" required="required"/></div>
		<div class="test_paper">Number of questions: &nbsp;
        	<input name="qstnno" type="text" placeholder="Enter No. Of Questions" required="required"/></div>
		<div class="test_paper">Test paper durarion: &nbsp;&nbsp;
        	<input name="duration" type="text" placeholder="Enter Test Duration (In Minute)" required="required"/></div>
		<input type="button" class="btn" value="BACK" onclick="location.href='home_admin.php'"/>
		<input type="submit" class="btn" name="set_test_paper_submit" value="OK" />
		</form>
        
        </div>
    </div>
    
    
    
<div class="right_box">
    <p class="box_header" id="box_header">All Test Papers</p>
        <hr  style=" background-color:rgba(0,204,255,1); width:95%; height:2px; border:0; margin-bottom:35px; margin-top:20px;"/>
        <div class="rbx_panel" id="rbx_panel">
<?php
	$query_test  = mysql_query('SELECT * FROM testpaper '); 
    $num_rows_test  = mysql_num_rows($query_test); // Get the number of rows
    if($num_rows_test <= 0){ 
        
    } else {
        while($list_tstpaper = mysql_fetch_assoc($query_test)){
		
?>
        <div id="tst_ppr_bx">
        <table width="391" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td width="175" height="40" align="left">&nbsp;Test paper name</td>
    <td width="203" style="color:green;"><?php echo $list_tstpaper['Test_Name'] ?></td>
  </tr>
  <tr>
    <td width="175" height="40" align="left">&nbsp;Test paper type</td>
    <td width="203" style="color:green"><?php echo $list_tstpaper['type'] ?></td>
  </tr>
  <tr>
    <td height="40" align="left">&nbsp;Number of questions</td>
    <td style="color:green"><?php echo $list_tstpaper['Test_Qno'] ?></td>
  </tr>
  <tr>
    <td height="40" align="left">&nbsp;Test paper durarion</td>
    <td style="color:green"><?php echo $list_tstpaper['Test_Time']." " ?>min</td>
  </tr>
  <tr>
  		<form id="edit_test_paper" action="edit_testpaper.php" method="post">
        <input type="hidden" name="t_paper_id" value="<?php echo $list_tstpaper['Test_Id'] ?>" />
    <td height="40" align="right" >
    	<input type="submit" value="EDIT" name="button_tst_edit" class="test_btn_edit" />
    </td>  
    	</form>
        <form id="del_test_paper" action="add_testpaper.php" method="post">
        <input type="hidden" name="t_paper_id" value="<?php echo $list_tstpaper['Test_Id'] ?>" />
    <td height="40" align="center" >
    	<input type="submit" value="DELETE" name="button_tst_del" class="test_btn_edit" />
    </td>
    	</form>
  </tr>
		</table>
        </div>

<?php
		}
    }
?>	
    </div>
    </div>
    
    	</div>
    
	<footer><h5>2015-16 | powered by JGEC-IT | All Rights Reserved</h5></footer>
</body>
</html>

