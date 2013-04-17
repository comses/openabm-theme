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
  
  // This jQuery function is called when the document is ready
  $(function() {
    // Hurry up and hide the comment form, if present.  In most browsers, this
    //    will be done before the page is fully drawn, so you shouldn't see a flash
    //    of the form before it disappears.
    $('#comments form.comment-form').hide();

    // The "Add New Comment" heading will be turned into a toggle to
    //     open/close the comments
    $('h2.title.comment-form').addClass('closed').bind('click', function() {
      var $self = $(this),
          $form = $self.siblings('form.comment-form'),
          speed = 250; // speed of animation, change to suit, larger = slower

      if ($self.hasClass('open')) {
        $self.addClass('transition').removeClass('open');
        $form.hide(speed, function() {
          $self.addClass('closed').removeClass('transition');
        });
      }
      else {
        $self.addClass('transition').removeClass('closed');
        $form.show(speed, function() {
          $self.addClass('open').removeClass('transition');
        });
      }
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
