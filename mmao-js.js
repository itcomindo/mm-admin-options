window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        // ##############################
        // launch CTA.
        // ##############################
        function mmaoLaunchCTA() {
            jQuery('#mmao-cta-greeting').on('click', function () {
                jQuery(this).slideUp(300);
                jQuery('#mmao-cta').addClass('active');

                jQuery('#mmao-close').on('click', function () {
                    jQuery('#mmao-cta').removeClass('active');
                    jQuery('#mmao-cta-greeting').slideDown(300);
                });



            });
        }
        mmaoLaunchCTA();


        // ##############################
        // Find This
        // ##############################
        //find this
        function mmaoFindThis() {
            var imgs = jQuery('img.mmao-find-this');
            imgs.each(function () {
                var ini = jQuery(this);
                var w = ini.width();
                var h = ini.height();
                ini.attr('width', w);
                ini.attr('height', h);
            });
        }
        // Fungsi debounce untuk membatasi frekuensi pemanggilan fungsi
        function mmao_debounce(func, wait, immediate) {
            var timeout;
            return function () {
                var context = this, args = arguments;
                var later = function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };
        mmaoFindThis();
        jQuery(window).on('resize', mmao_debounce(function () {
            mmaoFindThis();
        }, 250));
        //find this



        //JQuery end above.
    });
});






