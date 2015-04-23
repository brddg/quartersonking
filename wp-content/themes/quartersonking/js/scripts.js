(function ($, root, undefined) {

  $(function () {

    'use strict';

    // DOM ready, take it away
    jQuery('#datetimepicker1, #datetimepicker2').datetimepicker({
      minDate: new Date(),
      format: 'MM/DD/YYYY',
      allowInputToggle: true
    });

    jQuery('#book-button').on('click', function(e){
      e.preventDefault();
      var baseUrl = "https://gc.synxis.com/rez.aspx?Hotel=64625&amp;Chain=17744";

      var startDate = jQuery('#datetimepicker1 input').val();
      var endDate = jQuery('#datetimepicker2 input').val();
      var guests = jQuery('#guestpicker select').val();

      baseUrl += "&arrive=" + startDate;
      baseUrl += "&depart=" + endDate;
      baseUrl += "&adult=" + guests;

      window.location = baseUrl;
    });

  });

})(jQuery, this);
