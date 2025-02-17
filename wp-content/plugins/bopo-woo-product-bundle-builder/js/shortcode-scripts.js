jQuery(window).on('elementor/frontend/init', () => {
    'use strict';
    elementorFrontend.hooks.addAction('frontend/element_ready/woo-bopo-bundle.default', function ($scope) {
        if (!window.elementor) {
            return;
        }
        let $shortcode_container = $scope.find('.bopobb-shortcode-form');
        $shortcode_container.each(function () {
            bopobbElementInit($shortcode_container);
        });
    });
});

function bopobbElementInit($container) {
    let item_width = parseInt($container.find('.bopobb-single-wrap .bopobb-item-top:first-child').width() * bopobbShortcodeVars.image_rate),
        count_item = $container.find('.bopobb-single-wrap .bopobb-items-bottom-wrap .bopobb-item-product').length,
        $alert = $container.find('.bopobb-alert'),
        ready_purchase = true;
    if ($container.find('.bopobb-items-bottom-wrap.bopobb-template-1').length) {
        for (let i = 0; i < count_item; i++) {
            if ($container.find('.bopobb-single-wrap .bopobb-item-top.bopobb-item-' + i).attr('data-default') == 0) {
                ready_purchase = false;
                if (item_width) {
                    $container.find('.bopobb-single-wrap .bopobb-item-top.bopobb-item-' + i + ' .bopobb-item-img-wrap.bopobb-item-change')
                        .addClass('bopobb-icon-plus2').css('min-height', item_width);
                } else {
                    $container.find('.bopobb-single-wrap .bopobb-item-top.bopobb-item-' + i + ' .bopobb-item-img-wrap.bopobb-item-change')
                        .addClass('bopobb-icon-plus2');
                }
            }
        }
    } else {
        for (let i = 0; i < count_item; i++) {
            if (!$container.find('.bopobb-single-wrap .bopobb-items-bottom-wrap .bopobb-item-product.bopobb-item-' + i).attr('data-id')) {
                ready_purchase = false;
                $container.find('.bopobb-single-wrap .bopobb-items-bottom-wrap .bopobb-item-product.bopobb-item-' + i + ' .bopobb-item-img')
                    .css('min-height', bopobbShortcodeVars.image_height + 'px');
            }
        }
    }

    if (!ready_purchase) {
        $container.find('p.price').hide();
        $alert.html(bopobbShortcodeVars.alert_empty).slideDown();
    }
}