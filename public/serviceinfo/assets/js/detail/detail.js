$(window).on('load', function () {
  if ($(window).innerWidth() > 769) {
    $('.shopdetail').find('.photo').each(function () {
      var image = $(this).find('img');
      var imageWidth = image.width();
      var imageHeight = image.height();
      if (imageWidth < imageHeight) {
        imageWidth = 'auto';
        imageHeight = 340;
      } else {
        imageWidth = 430;
        imageHeight = 'auto';
      }
      image.css({
        width: imageWidth,
        height: imageHeight
      });
      console.log(imageWidth, imageHeight);
    });
  };
});
