
var downloadLinks = document.querySelectorAll(".downloadLink");

for (var i = 0; i < downloadLinks.length; i++) {
    downloadLinks[i].addEventListener("click", function (event) {
        event.preventDefault();
        var fileURL = this.getAttribute("data-file");
        var fileName = fileURL.substring(fileURL.lastIndexOf("/") + 1);
        var link = document.createElement('a');
        link.href = fileURL;
        link.download = fileName;
        link.click();
    });
}


window.onload = function () 
{
    let init = true
    setTimeout(function () 
    {
        $('#loader').fadeOut(1)
    }, 
    1000); 
    let h_index = 1 
    let swiper_slides
    let swiper_array

    if ($(".slider-certificate").length > 0) 
    {
        swiper_slides = $('.swiper-wrapper .swiper-slide');
        swiper_array = swiper_slides.toArray();
        setTimeout(toggleActive, 4000)
        setInterval(toggleActive, 4000);
    }
    function toggleActive()
    {
        if (h_index >= swiper_slides.length) {
            h_index = 0; 
        }

        swiper_array.forEach((el) => {
            $(el).removeClass('active');
        });

        $(swiper_array[h_index]).addClass('active');
        
        h_index++;
    }
}

