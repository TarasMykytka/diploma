    <!--[if lt IE 9]>
    <script src="assets/js/libs/html5shiv/es5-shim.min.js"></script>
    <script src="assets/js/libs/html5shiv/html5shiv.min.js"></script>
    <script src="assets/js/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="assets/js/libs/respond/respond.min.js"></script>
    <![endif]-->

<!--    <script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>-->
    <!-- Uncomment whatever You need -->
    <!-- <script src="assets/js/libs/jquery.validate.min.js"></script> -->
    <!-- <script src="assets/js/libs/fotorama/fotorama.js"></script> -->
    <!-- <script src="assets/js/libs/animate/animate-css.js"></script> -->
    <!-- <script src="assets/js/libs/jquery.easing.min.js"></script> -->
    <!-- <script src="assets/js/libs/fancybox/jquery.fancybox.pack.js"></script> -->
    <!-- <script src="assets/js/libs/jquery.maskedinput.min.js"></script> -->
    <!-- <script src="assets/js/libs/jquery.viewportchecker.min.js"></script> -->
    <!-- <script src="assets/js/libs/waypoints-sticky.js"></script> -->
    <!-- <script src="assets/js/libs/waypoints.js"></script> -->
<!--    <script src="assets/js/common.js"></script>-->


    <script>
        var scr = {"scripts":[
            {"src" : "assets/js/libs/modernizr/modernizr.js", "async" : false},
            {"src" : "assets/js/libs/jquery/jquery-1.11.2.min.js", "async" : false},
            <?if(isset($_GET['lab']))
            {
                echo "{\"src\" : \"assets/js/libs/rangeslider/rangeslider.min.js\", \"async\" : false},";

                if($data[0] == 3)
                {
                        echo "{\"src\" : \"https://unpkg.com/d3@3/d3.min.js\", \"async\" : false},{\"src\" : \"https://unpkg.com/function-plot@1/dist/function-plot.js\", \"async\" : false},";
                }
                echo "{\"src\" : \"assets/js/lab".$data[0].".js\", \"async\" : false},";
            }
            ?>
            {"src" : "assets/js/common.js", "async" : false}

        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
</body>
</html>
