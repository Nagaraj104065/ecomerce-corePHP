<!--
 $(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
	   // $(this).next('ul').dropdown(); 
	//$('.dropdown-menu').dropdown();  
	 $(this).parent().addClass('open');
    $(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
    e.stopPropagation();
    e.preventDefault();
  });
  
  
 $("#chatme").on("click",function(){
var ctd=$("#ctd").val();
var std=$("#std").val();
$("#chatme").text("Close Chat"+std);
setInterval(function() {
      $.ajax({
url:'./chat/testchat.php',
type:'POST',
data:{'ctd':ctd},
success:function(data,st){
$("#refresh").html(data);
  }
});
  }, 3000); });
// the "3000" 

$("#sendd").on("click",function(){
var std=$("#std").val();
var msg=$("#msg").val();
var ctd=$("#ctd").val();
$.ajax({url:'./chat.php',
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
});
//-->