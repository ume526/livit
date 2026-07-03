'use strict';

const maps = document.querySelectorAll('.zoom-map');
const panzoomInstances = [];
let activeMapIndex = 0;

$(function () {
    $('#slide').slick({
        autoplay: true,
        dots: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear',
        controls: true,
    });

    maps.forEach(map => {
        const instance = Panzoom(map, {
            maxScale: 3,
            minScale: 1,
            step: 0.3,
            // contain: 'inside'
        });
        panzoomInstances.push(instance)
    });

    // [ tab ]
    $('.tab-list').on('click', 'li > a', function (e) {
        e.preventDefault();
        let $this = $(this);

        $this.closest('.tab').find('li').removeClass('selected');
        $this.parent().addClass('selected').closest('.dropdown-menu').css({ 'opacity': '0' });
        $this.closest('.dropdown').addClass('selected')
        $(document).trigger('click');

        let tabId = $this.data('tabid');
        $this.closest('.tab').find('.tab-panel').children().each(function () {
            let $content = $(this);
            if ($content.data('contentid') == tabId) {
                $content.removeClass('hidden');

                const mapElem = $content.find('.zoom-map').get(0);
                if (mapElem) {
                    const idx = Array.from(maps).indexOf(mapElem);
                    if (idx !== -1) {
                        activeMapIndex = idx;
                        panzoomInstances[idx].reset();
                    }
                }
            } else {
                $content.addClass('hidden');
            }
        })
    });

    $('.tab-list li.dropdown').on('click', function () {
        $('.dropdown-menu').css({ 'opacity': '1' });
    })

});

document.querySelector('.zoom-in').addEventListener('click', () => {
    if(panzoomInstances[activeMapIndex]) {
        panzoomInstances[activeMapIndex].zoomIn()
    }
});
document.querySelector('.zoom-out').addEventListener('click', () => {
    if(panzoomInstances[activeMapIndex]) {
        panzoomInstances[activeMapIndex].zoomOut()
    }
});
