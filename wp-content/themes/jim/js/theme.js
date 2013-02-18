<?php
/**
 * Template Name: BP Jim JS
 */
?>


<script type="text/javascript">


        function beginRequest(sender, args)
        {
                alert("start");
                window.status = "Please wait...";
                document.body.style.cursor = "wait";
        }


        function pageLoaded(sender, args)
        {
                alert("end");
                window.status = "Done";
                document.body.style.cursor = "default";
        }
</script>