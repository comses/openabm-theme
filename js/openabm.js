(function ($) {
  $(document).ready(function() {
    $("#striped tbody tr").mouseover(function() {
      var row = $(this).attr("class").substring(0, 1);
      $("#striped tbody tr." + row).addClass("highlight");
    });

    $("#striped tbody tr").mouseout(function() {
      var row = $(this).attr("class").substring(0, 1);
      $("#striped tbody tr." + row).removeClass("highlight");
    });	

    // Load dialog on click
    $('#basic-modal .basic').click(function (e) {
      $('#basic-modal-content').modal();
      return false;
    });
  });

  window.onload=function(){
    Nifty("ul.button a", "transparent");
    Nifty("a.button", "transparent");
    Nifty("div.modelstatus", "transparent"); 
    Nifty("div.versions-list", "transparent");
  }

  function DoNav(url)
  {
    document.location.href = url;
  }
})(jQuery);
