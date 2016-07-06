jQuery(document).ready(function()
{

	// Chosen Select
	jQuery(".chosen-select").chosen(
	{
		'width' : '100%',
		'white-space' : 'nowrap'
	});

	// Tags Input
	jQuery('#tags').tagsInput(
	{
		width : 'auto'
	});

	// Textarea Autogrow
	jQuery('#autoResizeTA').autogrow();

	// Color Picker
	if (jQuery('#colorpicker').length > 0)
	{
		jQuery('#colorSelector').ColorPicker(
		{
			onShow : function(colpkr)
			{
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide : function(colpkr)
			{
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange : function(hsb, hex, rgb)
			{
				jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
				jQuery('#colorpicker').val('#' + hex);
			}
		});
	}

	// Color Picker Flat Mode
	jQuery('#colorpickerholder').ColorPicker(
	{
		flat : true,
		onChange : function(hsb, hex, rgb)
		{
			jQuery('#colorpicker3').val('#' + hex);
		}
	});

	// Date Picker
	jQuery('#datepicker').datepicker(
		{
			dateFormat: "dd-mm-yy"
			// altFormat: "dd-mm-yy"
		}
	);

	jQuery('#datepicker2').datepicker();

	jQuery('#datepicker-inline').datepicker();

	jQuery('#datepicker-multiple').datepicker(
	{
		numberOfMonths : 3,
		showButtonPanel : true
	});

	// Spinner
	var spinner = jQuery('#spinner').spinner();
	spinner.spinner('value', 0);

	var spinner1 = jQuery('#spinner1').spinner();
	spinner1.spinner('value', 0);

	var spinner2 = jQuery('#spinner2').spinner();
	spinner2.spinner('value', 0);

	var spinner3 = jQuery('#spinner3').spinner();
	spinner3.spinner('value', 0);

	var spinner4 = jQuery('#spinner4').spinner();
	spinner4.spinner('value', 0);

	var spinner5 = jQuery('#spinner5').spinner();
	spinner5.spinner('value', 0);

	var spinner6 = jQuery('#spinner6').spinner();
	spinner6.spinner('value', 0);

	var spinner7 = jQuery('#spinner7').spinner();
	spinner7.spinner('value', 0);

	var spinner8 = jQuery('#spinner8').spinner();
	spinner8.spinner('value', 0);

	var spinner9 = jQuery('#spinner9').spinner();
	spinner9.spinner('value', 0);

	// Input Masks
	jQuery("#date").mask("99-99-9999");
	jQuery("#phone").mask("(999) 999-9999");
	jQuery("#ssn").mask("999-99-9999");

	// Time Picker
	jQuery('#timepicker').timepicker(
	{
		defaultTIme : false
	});
	jQuery('#timepicker2').timepicker(
	{
		showMeridian : false
	});
	jQuery('#timepicker3').timepicker(
	{
		minuteStep : 15
	});

});
