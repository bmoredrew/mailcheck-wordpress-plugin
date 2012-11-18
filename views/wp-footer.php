<script type="text/javascript">
jQuery(document).ready(function($){
	
	var domains = ['hotmail.com', 'gmail.com', 'aol.com'];
	var topLevelDomains = ["com", "net", "org"];
	// var superStringDistance = function(string1, string2) {
	// string distance algorithm of your choosing
	// }

	$('#email').on('blur', function(){
		
		$(this).mailcheck({
			domains: domains,                       
			topLevelDomains: topLevelDomains,       
			//distanceFunction: superStringDistance,
	    	suggested: function(element, suggestion) {
		
				var $parent = $('#email').parent();
				$('.szbl-mailcheck-msg', $parent).remove();
				$parent.append('<span class="szbl-mailcheck-msg">Did you mean <a href="#" class="szbl-mailcheck-suggestion">' + suggestion.full + '</a>?</span>');
				
		    },
		    empty: function(element) {
			
				var $parent = $('#email').parent();
				$('.szbl-mailcheck-msg', $parent).remove();
				if ( !$('#email').val().match(/^[\w\d\.\-\_']+@([\w\d\-]+\.)+\w{2,}$/) )
				$parent.append('<span class="szbl-mailcheck-msg szbl-mailcheck-error">Please enter a valid email address.</span>');
				
		    }
		});
		
	});	
	
	$('a.szbl-mailcheck-suggestion').live('click', function(){
		$('#email').val( $(this).html() );
		$(this).parent().remove();
		return false;
	});
	
});
</script>
