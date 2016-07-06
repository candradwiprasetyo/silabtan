jQuery(document).ready(function()
{

	jQuery('#table1').dataTable();

	jQuery('#table2').dataTable(
	{
		"sPaginationType" : "full_numbers"
	});
	
	jQuery('#table3').dataTable(
	{
		"sPaginationType" : "full_numbers"
	});

	// Chosen Select
	jQuery("select").chosen(
	{
		'min-width' : '100px',
		'white-space' : 'nowrap',
		disable_search_threshold : 10
	});

	// Delete row in a table
	jQuery('.delete-row').click(function()
	{
		var c = confirm("Continue delete?");
		if (c)
			jQuery(this).closest('tr').fadeOut(function()
			{
				jQuery(this).remove();
			});

		return false;
	});

	// Show aciton upon row hover
	jQuery('.table-hidaction tbody tr').hover(function()
	{
		jQuery(this).find('.table-action-hide a').animate(
		{
			opacity : 1
		});
	}, function()
	{
		jQuery(this).find('.table-action-hide a').animate(
		{
			opacity : 0
		});
	});

}); 