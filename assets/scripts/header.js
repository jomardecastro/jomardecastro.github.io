$(document).ready(function () 
{
  $(document).on("click", ".toggle", function () 
  {
    $("#menu-header-menu-mob").toggleClass("active");
    $(this).toggleClass("on");
  });

  var prevScrollPos = window.scrollY || document.documentElement.scrollTop;
  var desktopHeader = document.querySelector(".header.desktop");
  window.addEventListener("scroll", function ()
  {
    var currentScrollPos = window.scrollY || document.documentElement.scrollTop;

    if (prevScrollPos > currentScrollPos) 
    {
      desktopHeader.classList.remove("top-100");
      if (currentScrollPos === 0) 
      {
        desktopHeader.classList.remove("sticky");
      }
    } else
    {
      desktopHeader.classList.add("top-100");
      desktopHeader.classList.add("sticky");
    }

    prevScrollPos = currentScrollPos;
  });
});