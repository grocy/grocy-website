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

$(".lightbox").on("shown.simplelightbox", function(e)
{
	var imageTitle = $(e.currentTarget).find("img").attr("alt");
	var piwikTracker = Piwik.getAsyncTracker();
	piwikTracker.trackEvent("Screenshots", "Showed image in lightbox", imageTitle);
});
