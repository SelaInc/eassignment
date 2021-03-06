jQuery(function($) {
	var errorContainer = $("<div class='error'>Validation errors occurred. Please confirm the fields and submit it again.</div>").appendTo("#commentform").hide();
	var errorLabelContainer = $("<div class='error errorlabels'></div>").appendTo("#commentform").hide();
	$("#commentform").validate({
		rules: {
			author: "required",
			email: {
				required: true,
				email: true
			},
			url: "url",
			comment: "required"
		},
		errorContainer: errorContainer,
		errorLabelContainer: errorLabelContainer,
		ignore: ":hidden"
	});
	$.validator.messages.required = "";
	$.validator.messages.email = "&raquo; " + $.validator.messages.email;
	$.validator.messages.url = "&raquo; " + $.validator.messages.url;
});