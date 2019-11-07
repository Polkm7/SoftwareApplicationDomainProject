$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

	$(".searchInput").on("input", function() {
	  var from = stringToDate($("#searchFrom").val());
	  var to = stringToDate($("#searchTo").val());

	  $('.searchable tr').each(function() {
		var row = $(this);
		var date = stringToDate(row.find("td").eq(5).text());

		/*//show all rows by default
		var show = t;

		//if from date is valid and row date is less than from date, hide the row
		if (from && date < from)
		  show = false;
		
		//if to date is valid and row date is greater than to date, hide the row
		if (to && date > to)
		  show = false;

		if (show)
		  row.show();
		else
		  row.hide();
	  */
	  }(jQuery));
	  
	  
	//parse entered date. return NaN if invalid
	function stringToDate(s) {
	  var ret = NaN;
	  var parts = s.split("/");
	  date = new Date(parts[2], parts[0], parts[1]);
	  if (!isNaN(date.getTime())) {
		ret = date;
	  }
	  return ret;
	}
});


});