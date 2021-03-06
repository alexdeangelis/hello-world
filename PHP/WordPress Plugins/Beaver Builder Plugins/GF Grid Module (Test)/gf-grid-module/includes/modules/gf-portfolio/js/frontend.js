(function ($) {

    GFPortfolio = function (settings) {
        this.nodeClass = '.fl-node-' + settings.id;
        this.layoutMode = settings.layoutMode;
        this._init();
    };

    GFPortfolio.prototype = {

        nodeClass: '',
        layoutMode: 'fitRows',
        grid_elem: null,

        _init: function () {

            this.grid_elem = $(this.nodeClass).find(' .gf-portfolio-wrap').eq(0);

            if (this.grid_elem.length > 0) {
                this._initGrid();
            }

        },

        _initGrid: function () {

            if ($().isotope === undefined) {
                return;
            }

            // layout Isotope after all images have loaded
            var htmlContent = this.grid_elem.find('.gf-portfolio');

            htmlContent.isotope({
                // options
                itemSelector: '.gf-portfolio-item',
                layoutMode: this.layoutMode
            });

            htmlContent.imagesLoaded(function () {
                htmlContent.isotope('layout');
            });

            var container = this.grid_elem.find('.gf-portfolio');
            if (container.length === 0) {
                return; // no items to filter or load and hence don't continue
            }

            /* -------------- Taxonomy Filter --------------- */

            this.grid_elem.find('.gf-taxonomy-filter .gf-filter-item a').on('click', function (e) {
                e.preventDefault();

                var selector = $(this).attr('data-value');
                container.isotope({filter: selector});
                $(this).closest('.gf-taxonomy-filter').children().removeClass('gf-active');
                $(this).closest('.gf-filter-item').addClass('gf-active');
                return false;
            });

        },
    };

})(jQuery);

