<?php


?>

(function ($) {

    $(function () {

        new GFPortfolio({
            id: '<?php echo $id ?>',
            layoutMode: '<?php echo $settings->layout_mode; ?>'

        });
    });

})(jQuery);
