
/*global jQuery:false*/

jQuery(document).ready(function () {
    GF_JS.init();
    // Run tab open/close event
    GF_Tab.event();
});

// Init all fields functions (invoked from ajax)
var GF_JS = {
    init: function () {
        // Run tab open/close
        GF_Tab.init();
        // Load colorpicker if field exists
        GF_ColorPicker.init();
    }
};


var GF_ColorPicker = {
    init: function () {
        var $colorPicker = jQuery('.gf-colorpicker');
        if ($colorPicker.length > 0) {

            $colorPicker.wpColorPicker();

        }
    }
};

var GF_Tab = {
    init: function () {
        // display the tab chosen for initial display in content
        jQuery('.gf-tab.selected').each(function () {
            GF_Tab.check(jQuery(this));
        });
    },
    event: function () {
        jQuery(document).on('click', '.gf-tab', function () {
            GF_Tab.check(jQuery(this));
        });
    },
    check: function (elem) {
        var chosen_tab_name = elem.data('target');
        elem.siblings().removeClass('selected');
        elem.addClass('selected');
        elem.closest('.gf-inner').find('.gf-tab-content').removeClass('gf-tab-show').hide();
        elem.closest('.gf-inner').find('.gf-tab-content.' + chosen_tab_name + '').addClass('gf-tab-show').show();
    }
};