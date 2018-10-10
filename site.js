$(".lightbox").simpleLightbox({
	"nav": false,
	"showCounter": false,
	"alertError": false,
	"captionClass": "text-center"
});

$(".lightbox").append('<i class="lightbox-magnifying-glass text-primary d-none fa fa-search"></i>');

$(".lightbox").mouseover(function()
{
	$(this).find(".lightbox-magnifying-glass").removeClass("d-none");
}).mouseout(function()
{
	$(this).find(".lightbox-magnifying-glass").addClass("d-none");
});
