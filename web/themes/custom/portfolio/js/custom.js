(function ($, Drupal) {
    Drupal.behaviors.portfolioTheme = {
      attach: function (context, settings) {
        $('.portfolio-item', context).once('portfolio-click').on('click', function () {
          alert('You clicked a portfolio item!');
        });
      }
    };
  })(jQuery, Drupal);
