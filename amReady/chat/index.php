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
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<script src="jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function() {
  $.ajaxSetup({ cache: false }); 
  setInterval(function() {
      $.ajax({
url:'testchat.php',
type:'get',
success:function(data,st){
$("#refresh").html(data);
  }
});
  }, 3000); // the "3000" 
$("#sendd").on("click",function(){
var msg=$("#msg").val();
$.ajax({url:'../chat.php',
	type:'POST',
	data:{'send':msg},
        success:function(a,b){
alert("sent");
}
	});
});

$("#chatme").on("click",function(){
$("#chatbox").show(function(){
$("#chatme").on("click",function(){
$("#chatbox").hide();
});
});
});
});
</script>
</head>
<body>
<div id="chatme">chatme</div>
<div style="background-color:#ccc;color:#888;width:400px;height:500px;text-overflow:ellipsis;word-wrap:break-word;position:fixed;left:900px;top:70px;border:2px solid #888;padding:10px;display:none;" id="chatbox">
<h3 style="background-color:#444;color:#fff;position:fixed;width:400px;height:60px;margin-top:-8px;">
chat with Shopwalkin | Stores</h3>
<div style="background-color:#fff;color:#333;margin-top:60px;line-height:1.2;padding:3px;height:400px;overflow-y:scroll;" id="refresh">
<p>Loading............................
</p></div>
<div style="background:#050858;color:white;width:380px;border:none;padding:3px;">
<form method="POST" enctype="multipart/form-data">
<input type="text" placeholder="enter your text" name="send" style="background:#040454;color:white;width:250px;" id="msg"> 
<input type="button" value="send" id="sendd" style="border:0px;width:100px;background-color:#555555;color:#fff;">
</div>

</div>
</body>
</html>

