$(window).load(function() {
	
	// ["Label" , "website link" , "bar color" , "bar image"]
	var social = [
	 ["google+", 	"http://google.com", 		"#dd4b39", "images/google_plus.png"],
	 ["facebook", 	"http://fb.com", 			"#3B5998", "images/facebook.png"],
	 ["paypal", 	"https://www.paypal.com", 	"#1e477a", "images/paypal.png"],
	 ["twitter", 	"https://twitter.com/", 	"#55acee", "images/twitter.png"],
	 ["yahoo", 		"https://www.yahoo.com/", 	"#720e9e", "images/yahoo.png"],
	 ];

////////////////////////////////////////////////	
//// DO NOT EDIT ANYTHING BELOW THIS LINE! /////
////////////////////////////////////////////////
		
	$("#socialside").append('<ul class="mainul"></ul>');
	
	/// generating bars
	for(var i=0;i<social.length;i++)
	{
	$(".mainul").append("<li>" + '<ul class="scli" style="background-color:' + social[i][2] + '">' +
						'<li>' + social[i][0] + '<img src="' + social[i][3] + '"/></li></ul></li>');
	}
	
	/// bar click event
	$(".scli").click(function(){
		var link = $(this).text();		
		for(var i=0;i<social.length;i++){
			if(social[i][0] == link){
				window.open(social[i][1]);
			}
		}		
	});
	
	/// mouse hover event
	$(".scli").mouseenter(function() {	
		$(this).stop(true);	
		$(this).clearQueue();
			$(this).animate({
				left : "112px"
			}, 300);
				
	});

	/// mouse out event
	$(".scli").mouseleave(function(){
		$(this).animate({
			left:"0px"
		},700,'easeOutBounce');
	});

});
