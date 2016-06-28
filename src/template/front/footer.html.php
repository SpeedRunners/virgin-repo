</body>
<script>
    $( document ).ready(function() {
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    });
    
  document.onkeypress = function myFunction(event) {
      if(event.keyCode == 37 || event.keyCode == 39)  $("#wrapper").toggleClass("toggled");
  }
    </script>
</html>