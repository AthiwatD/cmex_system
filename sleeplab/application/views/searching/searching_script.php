<script>

    

    function goBookingService(booking_id){
        loadIframe("iframe_search", "<?php echo base_url(); ?>Booking/bookingSearching/" + booking_id)
        var iframe = document.getElementById("iframe_search").contentWindow;

        $("#iframe_search").bind("change", function () {
            $("#iframe_search").css({
                height: iframe.$("body").outerHeight()
            });
        });
    }

    function goMovingService(booking_id){
        loadIframe("iframe_search", "<?php echo base_url(); ?>Moving/movingSearching/" + booking_id)
        var iframe = document.getElementById("iframe_search").contentWindow;

        $("#iframe_search").bind("change", function () {
            $("#iframe_search").css({
                height: iframe.$("body").outerHeight()
            });
        });
    }

</script>