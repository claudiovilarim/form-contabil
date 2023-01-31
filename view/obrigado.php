<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <?php include("head.php"); ?> 
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="bg"></div>
  <div class="container">

    <div class="window active" style="max-width: 800px">
      <div class="title-bar">
        <div class="title-bar-text">Questões contábil</div>
        <div class="title-bar-controls">
          <button aria-label="Minimize"></button>
          <button aria-label="Maximize"></button>
          <button aria-label="Close"></button>
        </div>
      </div>
      <div class="window-body has-space">
        <menu role="tablist">
          <button role="tab" aria-controls="p1" aria-selected="true">Parte 1</button>
          <button role="tab" aria-controls="p2">Parte 2</button>
          <button role="tab" aria-controls="p3">Parte 3</button>
        </menu>

        <div>
          Obrigado!
        </div>

      </div>
      <div class="status-bar">
        <p class="status-bar-field">Press F1 for see message again | CTBL v1.00</p>
        <p class="status-bar-field">25/01/2023</p>
        <p class="status-bar-field">14% concluído</p>
      </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="../assets/js/scripts.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>