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

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<h1>Welcome <?php 
$name=$_SESSION['str_name']; 
echo $na=$_SESSION['str_name'];?>
</h1>
<a href="str_logout.php">Logout</a>
<div>
<!---
chat -->


<div class="container">
<!-- chat with store //-->

<!--closed//-->


<input type="hidden" id="ctd" value="<?php echo $_SESSION['str_id']; ?>">

<?php

?>

</form>



</div>

<!--==--;;chat close-->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Let's see the senders
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-chevron-down" id="chatme"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Shopwalkin Team</strong>
                                    
                                </div>
                                <p>
                                    The Below List is Custmers sent messges for en query
						          about products... Click their id to chat with them....
                                </p>
                            </div>
                        </li>
						 <li class="left clearfix">
                            <div class="chat-body clearfix">
                                <div class="header">
								          <strong class="primary-font"><?php echo $_SESSION['str_name'];?></strong> 
                                    
                         </div>
	<div>					    <p>
<p id="refresh11">
Loading..messges..........................
</p>
</div>
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>
          
            </div>
            </div>
        </div>
    </div>
</div>

<script src="jquery-1.11.3.min.js"></script>
<script src="bootstrap.js"></script>

	  <script>
$(document).ready(function(){
$("#chatme").on("click",function(){
var ctd=$("#ctd").val();
var std=$("#std").val();
$("#chatme").text("Close Chat");
setInterval(function() {
      $.ajax({
url:'../chat/test_storechat.php',
type:'POST',
data:{'ctd':ctd},
success:function(data,st){
$("#refresh").html(data);
$("#refresh11").html(data);
  }
});
  }, 3000); });
// the "3000" 
$("#check").on("click",function(){
	$("#refresh").hide();
var ctd=$("#ctd").val();
var std=$("#std").val();
var ck=$("#check").text();
$("#chatme").text("Close Chat1111"+ck);
setInterval(function() {
      $.ajax({
url:'../chat/check.php',
type:'POST',
data:{'ctd':ctd,'swid':ck},
success:function(c,d){
$("#refresh1").html(c);
  }
});
  }, 3000); });
  //check

$("#sendd1").on("click",function(){
var std=$("#std").val();
var msg=$("#msgg").val();
var ctd=$("#ctd").val();
$.ajax({url:'./str_chat.php',
	type:'POST',
	data:{'send':msg,'std':std,'ctd':ctd},
        success:function(a,b){
alert("sent");
}
	});
});

$("#chatme").on("click",function(){
$("#chatbox").show(function(){
$("#chatme").on("click",function(){
$("#chatme").text("chat with sore");
$("#chatbox").hide();
});
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

