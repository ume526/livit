'use strict';

$(function(){
	$('#slide').slick({
    autoplay:true,
    dots: true,
    speed: 1000,
    fade: true,
    cssEase: 'linear',
	controls:true,
 });
	
	$('.storebox .box').matchHeight();

	// [ tab ]
    $('.tab-list').on('click', 'li > a', function(event) {
        event.preventDefault();
        let $this = $(this);

        $this.closest('.tab').find('li').removeClass('selected');
		$this.parent().addClass('selected').closest('.dropdown-menu').css({'opacity':'0'});
		$this.closest('.dropdown').addClass('selected')
		$(document).trigger('click');

        let tabId = $this.data('tabid');
        $this.closest('.tab').find('.tab-panel').children().each(function() {
            let $content = $(this);
            if($content.data('contentid') == tabId) {
                $content.removeClass('hidden');
            } else { 
                $content.addClass('hidden');
            }
        })
    });

	$('.tab-list li.dropdown').on('click', function() {
		$('.dropdown-menu').css({'opacity':'1'});
	})

});
