<?php session_start();
?>
<?php 
if(isset($_SESSION['str_id'])){
?>
<!DOCTYPE html>
<html lang="en">
 <head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="R.nagaraj ">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<title>Shopwalkin | chattig</title>
	<meta charset="utf-8">
<?php 	if(isset($_REQUEST['swid'])){?>
	<meta http-equiv="refresh" content="10" url="http://localhost:8080/storechat" />
<?php } ?>
<link rel="stylesheet" href="bootstrap.css">
<style>
.chat
{
    list-style: none;
    margin: 0;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
}

.chat li.left .chat-body
{
    margin-left: 60px;
}

.chat li.right .chat-body
{
    margin-right: 60px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.panel .slidedown .glyphicon, .chat .glyphicon
{
    margin-right: 5px;
}

.panel-body
{
    overflow-y: scroll;
    height: 550px;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

</style>

</head>
<body>
<h1 id="header">Welcome <?php 
$name=$_SESSION['str_name']; 
echo $na=$_SESSION['str_id'];?>
</h1>
<a onclick="javascript:window.history.back()">back</a>
<a href="str_logout.php">Logout</a>
<div>
<!---------------------------------------------------------------close---------------->
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                  
                </div>
            <div class="panel-collapse">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font"><?php echo $_SESSION['str_name']; ?></strong>
                                    
                                </div>
                                <p>
								you will recive messages from every one but now you are sending to Customer id <?php echo $sen1=$_REQUEST['swid']; ?>............
                           </p>
                            </div>
                        </li>
						 <li class="left clearfix">
                            <div class="chat-body clearfix">
                                <div class="header">
								          <strong class="primary-font"><?php echo $_SESSION['str_name'];?></strong> 
                                    
                         </div>
	<div>					    <p>
<p>
                                 <?php
if(isset($_REQUEST['swid'])){
include("connection.php");
$sen1=$_REQUEST['swid'];
$ide1=$_SESSION['str_id']; 
$sql = "SELECT * FROM `chat` WHERE storeid='$ide1';";

$result=mysqli_query($conn, $sql);
if($result){
while($row1=mysqli_fetch_assoc($result)){
echo $row1['recived']."<br/>";
echo $row1['sent']."<br/>";
}}}
?>   
     
</p>
</div>
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>
          <div class="panel-footer">
                    <div class="input-group">
					<?php
if(isset($_REQUEST['swid'])){
include("connection.php");
$sen=$_REQUEST['swid'];
$ide=$_SESSION['str_id']; 

$sql = "SELECT * FROM `chat` WHERE storeid='ide' AND sender_cust='$sen';";

$result=mysqli_query($conn, $sql);
if($result){
$row=mysqli_fetch_assoc($result);
	?><form action="<?php $_SERVER["PHP_SELF"]  ?>" method="POST" enctype="multipart/form-data">


	<input type="hidden" id="ctd" name="ctd" value="<?php echo $ide; ?>">

	<input type="hidden" id="std" name="std" value="<?php echo $row['sender_cust']; ?>">
                        <input id="msgg" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="sendd1">
                                Send</button>
                        </span>
						</form>
				<?php
}
}?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------close---------------->
<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.js"></script>

	  <script>
$(document).ready(function(){

// the "3000" 

  //check

$("#sendd1").on("click",function(){
var std=$("#std").val();
var msg=$("#msgg").val();
var ctd=$("#ctd").val();
$("#header").text(std+ctd+msg);
$.ajax({url:'./str_chat.php',
	type:'POST',
	data:{'send':msg,'std':std,'ctd':ctd},
        success:function(a,b){
alert("sent");
}
	});
});


$(window).scroll(function(){
	if($(document).scrollTop() >50){
		$("#banner").hide();
		$("#ban").css({"position":"fixed","transition":"position 2s"});
	}
	if($(document).scrollTop()==0){
		$("#banner").show();
		$("#ban").css({"position":"absolute","transition":"position 2s"});
	}
});
setInterval(function(){
		$("#my_chat").reload();
},3000);

});

</script>
<?php }
else{
	include("404.html");
}
?>
</body>
</html>