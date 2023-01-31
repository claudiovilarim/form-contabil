<?php

if (isset($_POST['usuario']) && ($_POST['usuario'] == 'admin' || $_POST['usuario'] == 'Admin') && isset($_POST['senha']) && $_POST['senha'] == 'bodega@2023#bea') {
  $logado = true;
  $_SESSION['logado'] = true;

  include_once('controller/connection.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="icon" type="image/png" href="./assets/images/mini-logo.png">

  <title>Bodega</title>
</head>

<body class="d-flex flex-column min-vh-100">

  <div class="bg"></div>
  <div class="container">
    <h1 class="text-center text-white text-shadow title" style="font-size: 74px;">Admin</h1>
    <div class="row justify-content-md-center">
      <div class="col-md-auto">

        <?php if ($logado != true) { ?>
          <div class="row justify-content-md-center bg-white p-4 m-3" style="border-radius: 40px;">
            <div class="col col-md-7" style="min-width: 200px;">
              <h2 class="text-pink fw-bold">Entrar</h2>
              <form action="" method="post">
                <div class="form-floating mb-3 shadow-sm">
                  <input type="text" class="form-control bg-light" id="usuario" name="usuario" placeholder=" " required>
                  <label for="floatingInput">Usuário</label>
                </div>
                <div class="form-floating mb-3 shadow-sm">
                  <input type="password" class="form-control bg-light" id="senha" name="senha" placeholder=" " required>
                  <label for="floatingInput">Senha</label>
                </div>
                <button type="submit" class="btn btn-pink">Entrar</button>
              </form>
            </div>
          </div>
        <?php } ?>

        <?php
        $pdo_statement = $pdo->prepare("SELECT * FROM tb_landing ORDER BY id ASC");
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
        ?>

        <?php if ($logado == true) { ?>

          <div class="bg-white p-4 m-3" style="border-radius: 40px;">
            <iframe id="txtArea1" style="display:none"></iframe>
            <button id="btnExport" class="btn btn-success" onclick="fnExcelReport();"> <i class="fas fa-file-excel"></i> Exportar Para Excel </button>
            <form action="./sorteio.php" method="post">
              <input type="hidden" name="sorteio">
              <button type="submit" class="btn btn-success mt-2"> <i class="fa-solid fa-clover"></i></i> Realizar Sorteio </button>
            </form>
          </div>

          <table id="headerTable" class="table table-striped bg-white rounded">
            <thead>
              <tr>
                <th scope="col" class="text-capitalize">Número</th>
                <th scope="col" class="text-capitalize">nome</th>
                <th scope="col" class="text-capitalize">telefone</th>
                <th scope="col" class="text-capitalize">email</th>
                <th scope="col" class="text-capitalize">cidade</th>
                <th scope="col" class="text-capitalize">instagram</th>
                <th scope="col" class="text-capitalize">Autoriza receber emails</th>
                <th scope="col" class="text-capitalize">Data cadastro</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (!empty($result)) {
                foreach ($result as $row) {
              ?>
                  <tr>
                    <td><?= $row["id"]; ?></td>
                    <td><?= $row["nome"]; ?></td>
                    <td><?= $row["telefone"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["cidade"]; ?></td>
                    <td><?= $row["instagram"]; ?></td>
                    <td><?php echo $row["recebimento"] == 'on' ? 'sim' : '' ?></td>
                    <td><?= $row["dataCriacao"]; ?></td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
        <?php } ?>
        <div>

        </div>
      </div>
    </div>
  </div>
  <footer class="footer navbar-fixed-bottom text-light p-2 mt-auto">
    <div class="row container">
      <div class="col title">
        <span class="me-3 h4"><img src="./assets/images/b-footer2.png" class="me-3" width="110px" srcset=""></span>
      </div>
      <div class="col text-end mt-3">
        Copyright © 2022 Bodega. Todos os direitos reservados.
      </div>
    </div>
  </footer>

  <script>
    // Gerar planilha excel
    function fnExcelReport() {
      var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
      var textRange;
      var j = 0;
      tab = document.getElementById('headerTable'); // id of table

      for (j = 0; j < tab.rows.length; j++) {
        tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
        //tab_text=tab_text+"</tr>";
      }

      tab_text = tab_text + "</table>";
      tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
      tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
      tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

      var ua = window.navigator.userAgent;
      var msie = ua.indexOf("MSIE ");

      if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
      {
        txtArea1.document.open("txt/html", "replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus();
        sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
      } else //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

      return (sa);
    }
  </script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>