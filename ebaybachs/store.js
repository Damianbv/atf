jQuery(document).ready(function(){
	
		$(".pagecontainer > table:eq(1) tr:first td:first").addClass("xdioms-background");
		$(".xdioms-background table:eq(1)").addClass("xdioms-content");
		//Footer
	var d = new Date();
	var footer = "\n\r<div class=\"xdioms-wrap\"><div id=\"org-footer\"><div id=\"org-designer\"><div style=\"width:987px; margin:0 auto\"><div class=\"footer-primary footer container show-bg\"><div class=\"grid-full\"><div class=\"section clearer\"><div class=\" grid12-12\">	<div class=\"std\"><div class=\"grid12-2\"><div class=\"collapsible mobile-collapsible\"><span class=\"opener\"> <\/div><\/div><\/div><\/div><\/div><\/div><\/div>";	
		if($(".xdioms-content").length > 0) {
			$(".xdioms-content").after(footer);			
		}
	
	
});

