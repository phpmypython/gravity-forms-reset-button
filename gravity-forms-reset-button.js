(function ($) {
	var gf_reset_button_fix;
	gf_reset_button_fix = function () {
		$('.gform_wrapper .add-reset-button').each(function () {
			if ($('.add-reset-button')) {
				var formID;
				var idFormat;
				$('br', this).remove();
				$('p', this).remove();
				formID = this.id;
				idFormat = "#" + this.id;
				$(idFormat).each(function () {
					var resetText = "CLEAR";
					$('.gform_footer', this).append('<input type="reset"  class="button reset-button gform_button" value="' + resetText + '" >');
					$(':submit', this).addClass('submit-button');

				});


			}

		});
	}


	$(document).ready(function () {
		gf_reset_button_fix();
	});

})(jQuery);




