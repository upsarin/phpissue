/*

 <?if($_SESSION['user']['permissions'] < 3){ ?>
 <script src="/js/tiny-drag.js"></script>
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>
 tinymce.init({
 selector: 'textarea.desc',
 toolbar: 'fontsizeselect',
 fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
 width: "99.7%",
 height: 500,
 theme: 'modern',
 plugins: [
 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
 'searchreplace wordcount visualblocks visualchars code fullscreen',
 'insertdatetime media nonbreaking save table contextmenu directionality',
 'emoticons template paste textcolor colorpicker textpattern imagetools'
 ],
 toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
 toolbar2: 'print preview media | forecolor backcolor emoticons',
 image_advtab: true,
 templates: [
 { title: 'Test template 1', content: 'Test 1' },
 { title: 'Test template 2', content: 'Test 2' }
 ],
 content_css: [
 '//www.tinymce.com/css/codepen.min.css'
 ]
 });
 </script>
 <style>
 #tiny-block {
 position: absolute;
 background: white;
 z-index: 10000;
 top: 0;
 let 0;
 display: none;
 }
 #tiny-header {
 background: grey;
 color: white;
 text-align: center;
 }
 .tiny-module {

 }
 </style>
 <? } ?>

<body>
 <div id="tiny-block">
 <div id="tiny-header">Перетащи меня</div>
 <textarea class="desc" id="" data-module="html"></textarea>
 </div>
</body>

 */



$(document).ready(function(){
    var ball = document.getElementById('tiny-block');
    var ballEvent = document.getElementById('tiny-header');
    $(".tiny-module").click(function(){
        $("#tiny-block").css({
            display: "block"
        });
        console.log(this.id);
    });
    function getCoords(elem) { // кроме IE8-
        var box = elem.getBoundingClientRect();

        return {
            top: box.top + pageYOffset,
            left: box.left + pageXOffset
        };

    }

    ballEvent.onmousedown = function(e) {

        var coords = getCoords(ball);
        var shiftX = e.pageX - coords.left;
        var shiftY = e.pageY - coords.top;

        ball.style.position = 'absolute';
        document.body.appendChild(ball);
        moveAt(e);

        ball.style.zIndex = 1000; // над другими элементами

        function moveAt(e) {
            ball.style.left = e.pageX - shiftX + 'px';
            ball.style.top = e.pageY - shiftY + 'px';
        }

        document.onmousemove = function(e) {
            moveAt(e);
        };

        ball.onmouseup = function() {
            document.onmousemove = null;
            ball.onmouseup = null;
        };

    }

    ball.ondragstart = function() {
        return false;
    };
});