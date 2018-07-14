var title, desc;

function getMsgId() {
	var aKeyValue = window.location.search.substring(1).split('&'),
		bookId = aKeyValue[ 0 ].split("=")[ 1 ];

	return bookId;
}

$(document).ready(function(){
	$.getJSON("data/messages.json",function(data){
		var msgId = getMsgId();
		$.each(data.messages, function (i, obj) {
			if (obj.id == msgId) {
				title = obj.title;
				desc = obj.msg;
			}
			$('#incoming').html('<h2>'+title+'</h2>' + '<br><br>'+desc);
		});
	});
});
