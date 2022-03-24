<script>
    var headerBod = jQuery('body');

    jQuery(window).scroll(function() {

        if (jQuery(this).scrollTop() > 50) {
            if (!headerBod.hasClass('sticky')) {
                headerBod.addClass('sticky');
            }
        } else {
            headerBod.removeClass('sticky');
        }

    });

    var searchButton = jQuery('#searchIcon');
    var searchClear = jQuery('#clear');

    jQuery(document).ready(function () {
        searchButton.click(function () {
            if (!headerBod.hasClass('search-active')) {
                headerBod.addClass('search-active');
            } else {
                headerBod.removeClass('search-active');
            }
        });

        searchClear.click(function () {
            headerBod.removeClass('search-active');
        });

    }); // DRF

</script>