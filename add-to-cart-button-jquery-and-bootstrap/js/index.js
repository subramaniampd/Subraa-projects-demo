$(document).ready(function() {
  
  if ( 0 < $('.item button').length ) {
    $('.item button').click(function() {
      var offset = $(this).parent().offset();
      $(this).parent().clone().addClass('item-clone').css({
        'left' : offset.left + 'px',
        'top' : parseInt(offset.top-$(window).scrollTop()) + 'px',
        'width' :  $(this).parent().width() + 'px',
        'height' : $(this).parent().height() + 'px'
      }).appendTo($('.item').parent());

      var cart = $('nav .navbar-right strong').offset();
      $('.item-clone').animate( { top: parseInt(cart.top-$(window).scrollTop()) + 'px', left: cart.left + 'px', 'height': '0px', 'width': '0px' }, 800, function(){
              $(this).remove();
              var price = parseInt($('nav .navbar-right').attr('data-price'));
              var itemPrice = parseInt($(this).attr('data-price'));
              var cartPrice = parseInt(price+itemPrice);
              $('nav .navbar-right strong').html('$' + cartPrice);
              $('nav .navbar-right').attr('data-price', cartPrice);
          });
    });
  }

});