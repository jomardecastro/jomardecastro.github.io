
function navigateAccordion(e) 
{
  $("a.nav-link.active").removeClass("active");
  $(e.target).addClass("active");
  $(e.target).css("color","#4788C7");
  e.preventDefault();
}