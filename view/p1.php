<?php

require '../controller/P1controller.class.php';
require_once '../connection.php';

?>

<!doctype html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="bg"></div>
  <div class="container">

    <?php
/*
    $statusPage = new P1controller();
    $statusPage->showMessagePopUp();
*/
    ?>

    <div class="window active mt-4" style="max-width: 1000px">
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
          <button role="tab" aria-controls="p1" aria-selected="true">Julgamento Profissional</button>
          <button role="tab" aria-controls="p2">Questionário pós-experimento</button>
          <button role="tab" aria-controls="p3">Informações Sociodemográficas</button>
        </menu>

        <form method="POST" action="../controller/p1form.php">
          <div id="question1">
            <article role="tabpanel" id="p1q1">
              <p>1) Analisando esse cenário, que julgamento você teria em relação ao registro da Provisão para Créditos de Liquidação Duvidosa (PCLD)*?</p>
              <fieldset>
                <legend>(*) Utilize a escala de 1-7, em que 1 representa "Não recomendo fortemente o registro" e 7 representa "Recomendo fortemente o registro. E o 4 indicando um posicionamento neutro. </legend>
                <div class="field-row">
                  <input id="radio30" type="radio" value="1" name="p1q1quest1">
                  <label for="radio30">1 - Não recomendo fortemente o registro</label>
                </div>
                <div class="field-row">
                  <input id="radio31" type="radio" value="2" name="p1q1quest1">
                  <label for="radio31">2 - Não recomendo o registro</label>
                </div>
                <div class="field-row">
                  <input id="radio32" type="radio" value="3" name="p1q1quest1">
                  <label for="radio32">3 - Não recomendo parcialmente o registro</label>
                </div>
                <div class="field-row">
                  <input id="radio33" type="radio" value="4" name="p1q1quest1">
                  <label for="radio33">4 - Neutro</label>
                </div>
              </fieldset>
            </article>
            <section class="field-row" style="justify-content: flex-end">
              <button disabled>< Voltar</button>
              <button onclick="showQuestion(1,2, 'p1q1quest1'); return false;" class="default">Avançar ></button>
            </section>
          </div>

          <div id="question2" style="display:none;">
            <article role="tabpanel" id="p1q2">
              <p>2) Após realizar o julgamento contábil acerca da recomendação ou não do registro, em valores, descreva qual o valor da Provisão para Créditos de Liquidação Duvidosa (PCLD) que você recomendaria reconhecer (A variação pode ir de zero R$ 210.000,00)?</p>
              <fieldset>
                <legend>No espaço abaixo escreva a recomendação de registro da Provisão para Créditos de Liquidação Duvidosa (PCLD)</legend>
                <textarea required name="p1q2quest1" id="" cols="80" rows="7" maxlength="5000"></textarea>
              </fieldset>
            </article>
            <section class="field-row" style="justify-content: flex-end">
              <button>< Voltar</button>
              <button type="submit" class="default">Avançar ></button>
            </section>
          </div>
        </form>

      </div>
      <div class="status-bar">
        <p class="status-bar-field">Press F1 for see message again | CTBL v1.00</p>
        <p class="status-bar-field"><?= date("d/m/Y"); ?> </p>
        <p class="status-bar-field">5% concluído</p>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>

  <script src="../assets/js/scripts.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>