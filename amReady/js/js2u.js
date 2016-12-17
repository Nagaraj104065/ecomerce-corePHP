  
<!--
  nag=$.noConflict();
  nag(document).ready(function($){

	 nag("#credit").on("change",function(e){
		 nag("#cpane").addClass("well");
		 $("#opt").show();
	 });
		 nag("#credit1").on("change",function(e){
		nag("#cpane").removeClass("well");
         nag("#opt").hide();		
		 });
		 nag("#addcard").on("click",function(e){
			var name=nag("#cName").val();
			var no=nag("#cNum").val();
			var mt=nag("#Cmont").val();
			var yr=nag("#Cyear").val();
			nag("#test").text(name+" "+no+" "+mt+" "+yr);
			nag.ajax({
				url:"../nagac.php",
				type:"POST",
			    data:{'name':name,'number':no,'month':mt,'year':yr},
				success:function(d,s){
					nag("#test").html(d);
					alert(s);
				}
			});
 			
		 });
		 
  });
 //-->