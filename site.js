$(".feature-list h3").each(function(i, el)
{
	var h3 = $(el);
	h3.append(' <i class="fa fa-link anchor-link-icon"></i>');
	h3.wrap($("<a />").addClass("discrete-link").attr("href", "#" + $(this).closest("section").attr("id")));
});

$(".lightbox").append('<i class="lightbox-magnifying-glass text-primary fa fa-search"></i>');

if ($(".lightbox").length > 0)
{
	$(".lightbox").simpleLightbox({
		"nav": false,
		"showCounter": false,
		"alertError": false,
		"captionClass": "text-center"
	});

	$(".lightbox").on("shown.simplelightbox", function(e)
	{
		var imageTitle = $(e.currentTarget).find("img").attr("alt");

		var piwikTracker = Piwik.getAsyncTracker();
		piwikTracker.trackEvent("Screenshots", "Showed image in lightbox", imageTitle);
	});
}

$('[data-toggle="collapse-next"]').on("click", function(e)
{
	e.preventDefault();
	$(this).toggleClass("collapsed");
	$(this).parent().next().collapse("toggle");
});
