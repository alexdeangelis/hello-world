(function ($) {

    GFNumberField = {

        _init: function () {
            FLBuilder.addHook('settings-form-init', function () {
                GFNumberField._initNumberFields();
            });
            GFNumberField._bindEvents();
        },


        _initNumberFields: function () {
            $('.fl-builder-settings:visible').find('.fl-builder-settings-fields .gf-number-input').trigger('change');

        },

        _bindEvents: function () {
            /* Number Input Fields */
            $('body').delegate('.fl-builder-settings-fields .gf-number-input', 'change', GFNumberField._settingsNumberChanged);

        },

        _settingsNumberChanged: function () {
            var $this = $(this),
                number_wrap = $this.closest(".gf-number-wrap"),
                this_value = number_wrap.find('.gf-number-input').val();

            number_wrap.find(".gf-number-hidden").val(this_value);
            number_wrap.find(".gf-number-hidden").trigger('keyup');
        }
    };

    GFNumberField._init();

})(jQuery);