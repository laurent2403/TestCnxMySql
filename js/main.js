
      $(function() {
        $('#action').click(function() {
          $.get('./php/testBdd.php', function(data) {
            alert(data);
          });    
        });  
      });
    
