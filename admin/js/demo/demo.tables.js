/*
 * Dandelion Admin v1.0 - Table Demo JS
 *
 * This file is part of Dandelion Admin, an Admin template build for sale at ThemeForest.
 * For questions, suggestions or support request, please mail me at maimairel@yahoo.com
 *
 * Development Started:
 * March 25, 2012
 *
 */

(function($) {
	$(document).ready(function(e) {
		$("table#da-ex-datatable-numberpaging").dataTable({sPaginationType: "full_numbers"});
		$("table#da-ex-datatable-default").dataTable();
		
	});
}) (jQuery);