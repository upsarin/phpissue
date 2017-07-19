$(document).ready(function(){
	$(".news-item").click(function(){
		return false;
	});
    $(".law-block").click(function(){
        var id = this.id;
        console.log(id);
        $("#popup-window").html('<div id="close-window" onclick="closemodal();"></div>' + $(".for_modal#content_"+id).html());
        $("#popup-window").css({
            display: "block"
        });
        return false;
    });

});