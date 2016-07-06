jQuery(document).ready(function()
{

	// Basic Form
	jQuery("#basicForm").validate(
	{
		highlight : function(element)
		{
			jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success : function(element)
		{
			jQuery(element).closest('.form-group').removeClass('has-error');
		}
	});

	// Error Message In One Container
	jQuery("#basicForm2").validate(
	{
		errorLabelContainer : jQuery("#basicForm2 div.error")
	});

	// With Checkboxes and Radio Buttons
	jQuery("#basicForm3").validate(
	{
		highlight : function(element)
		{
			jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success : function(element)
		{
			jQuery(element).closest('.form-group').removeClass('has-error');
		}
	});

	// Validation with select boxes
	jQuery("#basicForm4").validate(
	{
		highlight : function(element)
		{
			jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success : function(element)
		{
			jQuery(element).closest('.form-group').removeClass('has-error');
		}
	});
	
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
			dateFormat : "yy-mm-dd"
			// altFormat: "dd-mm-yy"
		});

		jQuery('#datepicker-inline').datepicker();

		jQuery('#datepicker-multiple').datepicker(
		{
			numberOfMonths : 3,
			showButtonPanel : true
		});

		// Spinner
		var spinner = jQuery('#spinner').spinner();
		spinner.spinner('value', 0);

		// Input Masks
		jQuery("#date").mask("9999-99-99");
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

}); 