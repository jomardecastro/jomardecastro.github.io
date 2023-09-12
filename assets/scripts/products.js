
function navigateAccordion(e) 
{
  $("a.nav-link.active").removeClass("active");
  $(e.target).addClass("active");
  $(e.target).css("color","#4788C7");
  e.preventDefault();
}

$(document).ready(function ()
{
  $("a.grouped_elements").fancybox({
    'transitionIn': 'elastic',
    'transitionOut': 'elastic',
    'speedIn': 600,
    'speedOut': 200,
    'overlayShow': false,
    'arrows': true
  });
});