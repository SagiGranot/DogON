$(document).ready(function(){
	$.getJSON("data/messages.json",function(data){
		
		$.each(data.messages, function () {
			$('#msgs').append("<span class='dot' id='selectDot'></span><a href='mail.html?id="
				+ this.id + "''><span class='massage unread' id='clickOnBold'>"
				+ this.title + "</span></a><br><br><br>");
		});
	});
});
