<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <meta charset="utf-8">
    <title>Reverse Qvf</title>
    <script type="text/javascript">
      function reverse() {
        var rec = $(".desc").val().toString();
        console.log((String) rec);
        $(".result").html(rec.replace("Argamassa", "Porcellanato"));
      }
    </script>
  </head>
  <body>
    <textarea class="desc" name="name" rows="8" cols="40"></textarea><br />
    <button onclick="reverse()" type="button" name="button">Reverse</button>
    <p class="result">

    </p>
  </body>
</html>
