<div id="action">
    <div id="menu-list">
        <?foreach($array['content']['content'] as $key => $val){?>
            <a id="<?=$val['id']?>" href="" class="menu-list-item <?=($key == 0) ? "active" : ""?>"><?=$val['title']?></a>
        <? } ?>
        <div style="clear: both;"></div>
    </div>
    <?foreach($array['content']['content'] as $key => $val){
        $filter = array("content_id" => $val["id"]);
        $images = Element::SelectAll('files', $filter, null, null);
    ?>
        <div class="action-img">
            <img class="detail_picture" title="14 фев" src="/<?=$images[0]['path']?>" alt="14 фев" width="100%" border="0"/>
        </div>
    <? } ?>

</div>

<script>
    $(document).ready(function(){

        var countDesc = $(".action-img").length;
        var firstId;
        for(var i=0; i < countDesc; ++i){
            $(".action-img")[i].id = "action_" + $("#menu-list a")[i].id;
            if(i == 0){
                firstId = "action_" + $("#menu-list a")[i].id;
            }
        }
        $("#" + firstId).css({
            display: "block"
        });
        $("#menu-list a").click(function(){
            $("#menu-list a").removeClass("active");
            $(".action-img").css({
                display: "none"
            });
            var id = this.id;
            $("#menu-list a#"+id).addClass("active");
            $("#action_" + id).css({
               display: "block"
            });
            return false;
       });
    });
</script>