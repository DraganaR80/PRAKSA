

    //PRETRAGA ZAPOSLENIH
    $(document).ready(function() {
      $("#search").on("keyup", function(e) {
          $("#table").trigger("reset");
          var search_query = $(this).val();
          $.ajax({
              url: "../contorller/search.php",
              type: "POST",
              data: {
                  search: search_query
              },
              success: function($data) {
                  $("#table").html($data);
              }
          });
      });
  });