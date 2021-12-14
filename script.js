$('.form').on('submit', function(e) {
    var $form = $(this);
    e.preventDefault();
    var $data = $form.serialize();
    $.ajax({
        type: "POST",
        url: "/mail.php",
        data: $data,
        success: function() {
            alert('Success'); 

        },
        error: function() {
            alert('Error');
        },
    });
  });


