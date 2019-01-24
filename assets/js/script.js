(function($) {
$(document).ready(function() {


if($('.portfolio_list').length){

  $('.portfolio_list .one_portfolio_item').each(function() {
    var portfolio_item_number = $( this ).data('number');
    portfolio_item_number_in_nine = portfolio_item_number % 9;
    if(portfolio_item_number_in_nine == 0){
      portfolio_item_number_in_nine = 9;
    }
    $(this).addClass('number_' + portfolio_item_number_in_nine);
  });

}


$('.paсkages_list .one_paсkage_title').click(function(){
  
  $(this).parent().find('.one_paсkage_title').removeClass('active');
  $(this).addClass('active');

  var package_number = $(this).data('package_number');
  $(this).parents('.paсkages_box').children('.paсkages_content').children('.one_package_content').fadeOut(0);
  $(this).parents('.paсkages_box').children('.paсkages_content').find('.package_content_' + package_number).fadeIn(500);

})
  
  
$('#adaptive_menu').click(function(){
  $('header').toggleClass('open_menu');
})


}); //document.ready

})( jQuery );

