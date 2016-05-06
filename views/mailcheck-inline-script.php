<script type="text/javascript">
jQuery(document).ready(function($){

	var domains = ["yahoo.com", "google.com", "hotmail.com", "gmail.com", "me.com", "aol.com", "mac.com",
      "live.com", "comcast.net", "googlemail.com", "msn.com", "hotmail.co.uk", "yahoo.co.uk",
      "facebook.com", "verizon.net", "sbcglobal.net", "att.net", "gmx.com", "mail.com", "outlook.com"];

	var topLevelDomains = ["co.uk", "com", "net", "org", "info", "edu", "gov", "mil"];

	// var superStringDistance = function(string1, string2) {
	// string distance algorithm of your choosing
	// }
	var selector = '<?php echo esc_js( $this->selector ); ?>';
	$(selector).on('blur', function(){

		$(this).mailcheck({
			domains: domains,                       
			topLevelDomains: topLevelDomains,
			//distanceFunction: superStringDistance,
	    	suggested: function(element, suggestion) {

				var $parent = $(selector).parent();
				$('.szbl-mailcheck-msg', $parent).remove();
				$parent.append('<span class="szbl-mailcheck-msg">Did you mean <a href="#" class="szbl-mailcheck-suggestion">' + suggestion.full + '</a>?</span>');

		    },
		    empty: function(element) {

				var $parent = $(selector).parent();
				$('.szbl-mailcheck-msg', $parent).remove();
				if ( !$(selector).val().match(/^[\w\d\.\-\_']+@([\w\d\-]+\.)+\w{2,}$/) )
				$parent.append('<span class="szbl-mailcheck-msg szbl-mailcheck-error">Please enter a valid email address.</span>');

		    }
		});

	});

	$('a.szbl-mailcheck-suggestion').on('click', function(){
		$(selector).val( $(this).html() );
		$(this).parent().remove();
		return false;
	});

});
</script>
