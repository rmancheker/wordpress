$(document).ready(function(){
	$("#menu ul li:first").hide();

	$(window).resize(function(){
	
		var ans = $("#menu ul li").css("float");
		
		//alert(ans);
	
		if(ans=="none")
		{
			$("#menu ul li").hide();
			$("#menu ul li:first").show();
			
			var x=1;
			$("#menu ul li:first").click(function(){
			
				if(x==1)
				{
					$(this).nextAll().slideDown();
					x=0;
				}
				else
				{
					$(this).nextAll().slideUp();
					x=1;
				}
			});
		}
		else
		{
			$("#menu ul li").show();
			$("#menu ul li:first").hide();
		}	
	});
});