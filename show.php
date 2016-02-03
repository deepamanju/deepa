<html>
<script type="text/javascript">

function slideSwitch() {
    var $active = $('#slideshowContent IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshowContent IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshowContent IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 1000);
});

</script>
</head>

<body>
 <div id="slideshowContent">
            <img src="1.jpg" alt="Slideshow Image 1"  class="active"/>
            <img src="2.jpg" alt="Slideshow Image 2" />
            <img src="3.jpg" alt="Slideshow Image 3" />
        </div>
</body>
</html>
