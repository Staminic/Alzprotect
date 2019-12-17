(function($) {

  // dropdown menu
  $('ul.dropdown-menu').each(function(){
    $(this).prev().attr({
      id: $(this).attr('aria-labelledby'),
      role: 'button',
      'data-toggle': 'dropdown',
      'aria-haspopup': 'true',
      'aria-expanded': 'false'
    });
  });

  // submenu menu
  $('.moduletable-submenu .dropdown-item').each(function(){
    $(this).addClass('nav-link');
    $(this).removeClass('dropdown-item')
  });

  // alias menu link
  $('.alias').each(function(){
    $(this).addClass('nav-link');
  });

}(jQuery));
