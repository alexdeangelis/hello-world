(function ($) {

    GFToggleButton = {

        _init: function () {
            $('body').delegate('.gf-toggle-button .gf_toggle_button_label', 'click', GFToggleButton._settingsSwitchChanged);

        },


        _settingsSwitchChanged: function () {
            var $this = $(this),
                button_wrap = $this.closest(".gf-toggle-button"),
                this_attr = '#' + $this.attr('for'),
                this_value = button_wrap.find(this_attr).val();

            button_wrap.find(".gf_toggle_button_select").val(this_value);
            button_wrap.find(".gf_toggle_button_select").trigger('change');
        },
    };

    GFToggleButton._init();

})(jQuery);