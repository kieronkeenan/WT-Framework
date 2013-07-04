/**
 * Add Modernizr test for box sizing
 */
Modernizr.addTest("boxsizing", function()
{
	return Modernizr.testAllProps("boxSizing") && (document.documentMode === undefined || document.documentMode > 7);
});

/**
 * Change the width of all elements to account for border-box
 */
$(function()
{
	if(!($('html').hasClass('boxsizing')))
	{
		$('*').each(function()
		{
			if($(this).css('display')=='block')
			{
				var f, a, n;
				f = $(this).outerWidth();
				a = $(this).width();
				n = a-(f-a);
				$(this).css('width', n);
			}
		});
	}
});