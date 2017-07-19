$(document).ready(function(){

    function newAnimate(id) {
        var obj = $("#gallery-" + id);
        var subj = $(".gallery-showcase-block");
        var imgMap = $(".gallery-cont-"+ id +" img");
            subj.css({
                height: $(".gallery-cont-" + id + " img")[0].height
            });
            subj.html('<img src="' + $(".gallery-cont-" + id + " .people").attr("src") + '" />');
            $(".gallery-cont-" + id).css({
                width: "100%",
                display: "block"
            });
            $(".gallery-header-" + id).css({
                margin: "0px 0px 1px 0px"
            });
            $(".gallery-cont-" + id + " .imgMap").css({
                width: "100%",
                display: "block"
            });
            $(".points-" + id + " .point").css({
                display: "block"
            });
            $(".gallery-cont-" + id).css({
                margin: "0px 0px 10px 0px"
            });
            var destination = $(".gallery-showcase-block").offset().top;
            $('body').animate({scrollTop: destination - 100}, 1100);


    };


    $(".gallery-header .ico").click(function(){
        var id = this.id
        if($(".gallery-cont-moscow .imgMap").css("display") == "block"){
            $(".gallery-cont-moscow").css({
                width: "100%",
                display: "none"
            });
            $(".gallery-cont-moscow .imgMap").css({
                width: "100%",
                display: "none"
            });
            $(".points-moscow .point").css({
                display: "none"
            });

            if(id == "almati"){
                newAnimate(id);
            }
        } else if($(".gallery-cont-almati .imgMap").css("display") == "block"){
            $(".gallery-cont-almati").css({
                width: "100%",
                display: "none"
            });
            $(".gallery-cont-almati .imgMap").css({
                width: "100%",
                display: "none"
            });
            $(".points-almati .point").css({
                display: "none"
            });
            if(id == "moscow"){
                newAnimate(id);
            }
        } else {
            newAnimate(id);
        }
    });

    $(".point").click(function(){
        var pointId = this.id;
        var pointCur = $("#"+this.id).parent();
        var curParentClass = $(pointCur).attr("class");
        if(curParentClass == "points-moscow"){
            $(".slider").css({
                display: "block",
                height: screen.height
            });
            for(var i = 0; i < $(".image-" + pointId).length; ++i){
                $(".slider .slider-container").append("<img id='"+ i +"' src='"+ $('.image-'+pointId)[i].src +"' />");
            }
            $(".slider .slider-container img").css({
                width: screen.width-100,
                height: screen.height-100
            });
            $(".slider .slider-container").attr("id", "11");
            $(".slider .slider-container img#0").attr("selected", "selected");
            $(".slider .slider-container img#0").css({
                display: "block"
            })

        } else if(curParentClass == "points-almati"){

        } else if(curParentClass == "close"){

        }
    });
    $(".slider #close").click(function(){
        $(".slider").css({
            display: "none"
        });
        $(".slider .slider-container").attr("id", "");
        $(".slider .slider-container").html("");
    });
    $(".slider #prev").click(function(){
        var countImages = $(".image-point_" + $(".slider .slider-container").attr("id")).length;
        var curImage = $(".slider .slider-container img[selected='selected']").attr("id");

        if(curImage == 0){
            $(".slider .slider-container img#"+($(".slider .slider-container img#"+(countImages-1)).attr("id"))).attr("selected", "selected");
        } else {
            $(".slider .slider-container img#"+ (curImage-1)).attr("selected", "selected")
        }
        $(".slider .slider-container img#"+curImage).attr("selected", "");
    });
    $(".slider #prev").click(function(){
        var countImages = $(".image-point_" + $(".slider .slider-container").attr("id")).length;
        var curImage = $(".slider .slider-container img[selected='selected']").attr("id");

        if(curImage == (curImage-1)){
            $(".slider .slider-container img#"+($(".slider .slider-container img#0").attr("id"))).attr("selected", "selected");
        } else {
            $(".slider .slider-container img#"+ (curImage+1)).attr("selected", "selected")
        }
        $(".slider .slider-container img#"+curImage).attr("selected", "");
    });
});