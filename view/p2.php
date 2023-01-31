<!doctype html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="bg"></div>
  <div class="container">

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
          <button role="tab" aria-controls="p1">Julgamento Profissional</button>
          <button role="tab" aria-controls="p2" aria-selected="true">Questionário pós-experimento</button>
          <button role="tab" aria-controls="p3">Informações Sociodemográficas</button>
        </menu>

        <form method="POST" action="../controller/p2form.php" onsubmit="return validateFormP2()">
          <div id="question1">
            <article role="tabpanel" id="p2q1">
              <p>
                1) Considerando a sua atuação profissional, qualifique as assertivas abaixo de acordo com o nível de intensidade sobre o quão se sente responsável em relação à adequação das demonstrações contábeis, sendo (1) nível mínimo e (7) nível máximo.
              </p>
              <fieldset>
                <div class="row">
                  <div class="col-md-7"></div>
                  <div class="col-md-5">
                    <legend>Nível de responsabilidade</legend>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    1.Sinto-me responsável pelo reconhecimento da constituição da Provisão para Créditos de Liquidação Duvidosa (PCLD) da Inspira Tecnologia S.A.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item1" type="radio" value="1" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item2" type="radio" value="2" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item3" type="radio" value="3" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item4" type="radio" value="4" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item5" type="radio" value="5" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item6" type="radio" value="6" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest1item7" type="radio" value="7" name="p2q1quest1">
                      <label class="form-check-label" for="p2q1quest1item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    2.Sinto-me responsável por garantir o melhor julgamento contábil para as demonstrações contábeis da Inspira Tecnologia S.A.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item1" type="radio" value="1" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item2" type="radio" value="2" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item3" type="radio" value="3" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item4" type="radio" value="4" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item5" type="radio" value="5" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item6" type="radio" value="6" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest2item7" type="radio" value="7" name="p2q1quest2">
                      <label class="form-check-label" for="p2q1quest2item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    3.Sinto-me responsável pela adequação das demonstrações contábeis, mesmo que não dependa apenas do meu julgamento contábil, mas também dos meus superiores.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item1" type="radio" value="1" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item2" type="radio" value="2" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item3" type="radio" value="3" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item4" type="radio" value="4" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item5" type="radio" value="5" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item6" type="radio" value="6" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest3item7" type="radio" value="7" name="p2q1quest3">
                      <label class="form-check-label" for="p2q1quest3item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    4.Sinto-me responsável pela adequação das demonstrações contábeis, mesmo que não dependa apenas do meu julgamento contábil, mas também dos meus pares.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item1" type="radio" value="1" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item2" type="radio" value="2" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item3" type="radio" value="3" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item4" type="radio" value="4" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item5" type="radio" value="5" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item6" type="radio" value="6" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q1quest4item7" type="radio" value="7" name="p2q1quest4">
                      <label class="form-check-label" for="p2q1quest4item7">7</label>
                    </div>
                  </div>
                </div>
              </fieldset>
            </article>
            <section class="field-row" style="justify-content: flex-end">
              <button>< Voltar</button>
              <button onclick="showQuestionP2(1,2); return false;" class="default">Avançar ></button>
            </section>
          </div>

          <div id="question2" style="display:none;">
            <article role="tabpanel" id="p2q2">
              <p>
                2) Sobre as normas sociais organizacionais da Inspira, qualifique as assertivas abaixo de acordo com o nível de intensidade, sendo (1) nível mínimo e (7) nível máximo.
              </p>
              <fieldset>
                <div class="row">
                  <div class="col-md-7"></div>
                  <div class="col-md-5">
                    <legend>Nível de responsabilidade</legend>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    1.Os superiores desta empresa já deixaram claro que a utilização de práticas contábeis que não representem fielmente o desempenho da empresa não será tolerada.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item1" type="radio" value="1" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item2" type="radio" value="2" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item3" type="radio" value="3" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item4" type="radio" value="4" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item5" type="radio" value="5" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item6" type="radio" value="6" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest1item7" type="radio" value="7" name="p2q2quest1">
                      <label class="form-check-label" for="p2q2quest1item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    2.Os meus pares nesta empresa já deixaram claro que a utilização de práticas contábeis que não representem fielmente o desempenho da empresa não será tolerada.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item1" type="radio" value="1" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item2" type="radio" value="2" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item3" type="radio" value="3" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item4" type="radio" value="4" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item5" type="radio" value="5" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item6" type="radio" value="6" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest2item7" type="radio" value="7" name="p2q2quest2">
                      <label class="form-check-label" for="p2q2quest2item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    3.Os superiores já informaram que se for descoberto algum envolvimento com práticas contábeis que não representem fielmente o desempenho da empresa, o funcionário será prontamente penalizado.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item1" type="radio" value="1" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item2" type="radio" value="2" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item3" type="radio" value="3" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item4" type="radio" value="4" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item5" type="radio" value="5" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item6" type="radio" value="6" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest3item7" type="radio" value="7" name="p2q2quest3">
                      <label class="form-check-label" for="p2q2quest3item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    4.Os meus pares nesta empresa já informaram que se for descoberto algum envolvimento com práticas contábeis que não representem fielmente o desempenho da empresa, o funcionário será prontamente repreendido.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item1" type="radio" value="1" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item2" type="radio" value="2" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item3" type="radio" value="3" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item4" type="radio" value="4" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item5" type="radio" value="5" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item6" type="radio" value="6" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest4item7" type="radio" value="7" name="p2q2quest4">
                      <label class="form-check-label" for="p2q2quest4item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    5.Os superiores desta empresa têm, por padrão, adotarem práticas contábeis que representem fielmente o desempenho da empresa.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item1" type="radio" value="1" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item2" type="radio" value="2" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item3" type="radio" value="3" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item4" type="radio" value="4" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item5" type="radio" value="5" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item6" type="radio" value="6" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest5item7" type="radio" value="7" name="p2q2quest5">
                      <label class="form-check-label" for="p2q2quest5item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    6.Os meus pares nesta empresa têm, por padrão, adotarem práticas contábeis que representem fielmente o desempenho da empresa
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item1" type="radio" value="1" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item2" type="radio" value="2" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item3" type="radio" value="3" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item4" type="radio" value="4" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item5" type="radio" value="5" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item6" type="radio" value="6" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest6item7" type="radio" value="7" name="p2q2quest6">
                      <label class="form-check-label" for="p2q2quest6item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    7. Os superiores desta empresa não costumam adotar práticas contábeis que não representem fielmente o desempenho da empresa para atender as expectativas da alta gestão.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item1" type="radio" value="1" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item2" type="radio" value="2" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item3" type="radio" value="3" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item4" type="radio" value="4" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item5" type="radio" value="5" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item6" type="radio" value="6" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest7item7" type="radio" value="7" name="p2q2quest7">
                      <label class="form-check-label" for="p2q2quest7item7">7</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-7">
                    8.Os meus pares nesta empresa não costumam adotar práticas contábeis que não representem fielmente o desempenho da empresa para atender as expectativas da alta gestão.
                  </div>
                  <div class="col-md-5">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item1" type="radio" value="1" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item1">1</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item2" type="radio" value="2" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item2">2</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item3" type="radio" value="3" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item3">3</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item4" type="radio" value="4" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item4">4</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item5" type="radio" value="5" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item5">5</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item6" type="radio" value="6" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item6">6</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q2quest8item7" type="radio" value="7" name="p2q2quest8">
                      <label class="form-check-label" for="p2q2quest8item7">7</label>
                    </div>
                  </div>
                </div>
              </fieldset>
            </article>
            <section class="field-row" style="justify-content: flex-end">
              <button>< Voltar</button>
              <button onclick="showQuestionP2Q2(2,3); return false;" class="default">Avançar></button>
            </section>
          </div>

          <div id="question3" style="display:none;">
            <article role="tabpanel" id="p2q3">
              <p>
                3) Dois dilemas estão listados e você precisa julgá-los. Siga as instruções abaixo.
              </p>
              <fieldset>
                <div class="row">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          João e o Remédio
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Num país da Europa, havia uma mulher que estava quase à morte porque sofria de câncer. Existia só um remédio que podia salvá-la, tendo sido inventado recentemente por um farmacêutico local. Mas saia um tanto caro para fazer esse medicamento, além disso, o farmacêutico cobrava dez vezes mais do que lhe custava. João, o marido daquela mulher doente, tomou dinheiro emprestado para comprar o remédio, mas só conseguiu a metade. Pediu abatimento ou que lhe deixasse pagar mais tarde, pois sua mulher precisava mesmo do remédio, mas o farmacêutico disse que não vendia por menos, nem vendia fiado, pois queria ganhar dinheiro. Então, João ficou desesperado e começou a pensar em arrombar a farmácia e roubar o remédio para sua esposa.
                          <hr>
                          <div class="mt-3">
                            <h6>João deveria roubar aquele remédio?</h6>
                            <div class="form-check form-check-inline p-0">
                              <input class="form-check-input" id="p2q3quest0item1" type="radio" value="sim" name="p2q3quest0">
                              <label class="form-check-label" for="p2q3quest0item1">Sim</label>
                            </div>
                            <div class="form-check form-check-inline p-0">
                              <input class="form-check-input" id="p2q3quest0item2" type="radio" value="nao" name="p2q3quest0">
                              <label class="form-check-label" for="p2q3quest0item2">Não</label>
                            </div>
                            <div class="form-check form-check-inline p-0">
                              <input class="form-check-input" id="p2q3quest0item3" type="radio" value="nao-sei" name="p2q3quest0">
                              <label class="form-check-label" for="p2q3quest0item3">Não sei</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <h4>As afirmativas a seguir são possíveis justificativas da sua resposta anterior. Atribua um grau de importância a cada uma delas:</h4>
                  <hr>
                  <div class="col-md-6">
                    1. As leis da sociedade devem ser obedecidas.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest1item1" type="radio" value="maxima" name="p2q3quest1">
                      <label class="form-check-label" for="p2q3quest1item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest1item2" type="radio" value="grande" name="p2q3quest1">
                      <label class="form-check-label" for="p2q3quest1item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest1item3" type="radio" value="media" name="p2q3quest1">
                      <label class="form-check-label" for="p2q3quest1item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest1item4" type="radio" value="pequena" name="p2q3quest1">
                      <label class="form-check-label" for="p2q3quest1item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest1item5" type="radio" value="nenhuma" name="p2q3quest1">
                      <label class="form-check-label" for="p2q3quest1item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    2. É natural que um marido amoroso chegue a roubar para atender a sua esposa.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest2item1" type="radio" value="maxima" name="p2q3quest2">
                      <label class="form-check-label" for="p2q3quest2item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest2item2" type="radio" value="grande" name="p2q3quest2">
                      <label class="form-check-label" for="p2q3quest2item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest2item3" type="radio" value="media" name="p2q3quest2">
                      <label class="form-check-label" for="p2q3quest2item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest2item4" type="radio" value="pequena" name="p2q3quest2">
                      <label class="form-check-label" for="p2q3quest2item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest2item5" type="radio" value="nenhuma" name="p2q3quest2">
                      <label class="form-check-label" for="p2q3quest2item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    3. João deveria pensar que manter sua esposa viva seria útil para ele.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest3item1" type="radio" value="maxima" name="p2q3quest3">
                      <label class="form-check-label" for="p2q3quest3item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest3item2" type="radio" value="grande" name="p2q3quest3">
                      <label class="form-check-label" for="p2q3quest3item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest3item3" type="radio" value="media" name="p2q3quest3">
                      <label class="form-check-label" for="p2q3quest3item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest3item4" type="radio" value="pequena" name="p2q3quest3">
                      <label class="form-check-label" for="p2q3quest3item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest3item5" type="radio" value="nenhuma" name="p2q3quest3">
                      <label class="form-check-label" for="p2q3quest3item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    4. João deve considerar que é importante a dualidade da vida.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest4item1" type="radio" value="maxima" name="p2q3quest4">
                      <label class="form-check-label" for="p2q3quest4item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest4item2" type="radio" value="grande" name="p2q3quest4">
                      <label class="form-check-label" for="p2q3quest4item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest4item3" type="radio" value="media" name="p2q3quest4">
                      <label class="form-check-label" for="p2q3quest4item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest4item4" type="radio" value="pequena" name="p2q3quest4">
                      <label class="form-check-label" for="p2q3quest4item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest4item5" type="radio" value="nenhuma" name="p2q3quest4">
                      <label class="form-check-label" for="p2q3quest4item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    5. João deveria pensar em beneficiar alguém que ele gosta.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest5item1" type="radio" value="maxima" name="p2q3quest5">
                      <label class="form-check-label" for="p2q3quest5item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest5item2" type="radio" value="grande" name="p2q3quest5">
                      <label class="form-check-label" for="p2q3quest5item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest5item3" type="radio" value="media" name="p2q3quest5">
                      <label class="form-check-label" for="p2q3quest5item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest5item4" type="radio" value="pequena" name="p2q3quest5">
                      <label class="form-check-label" for="p2q3quest5item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest5item5" type="radio" value="nenhuma" name="p2q3quest5">
                      <label class="form-check-label" for="p2q3quest5item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    6. Os direitos do farmacêutico, quanto ao seu invento, devem ser respeitados.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest6item1" type="radio" value="maxima" name="p2q3quest6">
                      <label class="form-check-label" for="p2q3quest6item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest6item2" type="radio" value="grande" name="p2q3quest6">
                      <label class="form-check-label" for="p2q3quest6item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest6item3" type="radio" value="media" name="p2q3quest6">
                      <label class="form-check-label" for="p2q3quest6item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest6item4" type="radio" value="pequena" name="p2q3quest6">
                      <label class="form-check-label" for="p2q3quest6item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest6item5" type="radio" value="nenhuma" name="p2q3quest6">
                      <label class="form-check-label" for="p2q3quest6item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    7. A essência de viver, conta tanto individualmente como socialmente, quanto o destino de morrer.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest7item1" type="radio" value="maxima" name="p2q3quest7">
                      <label class="form-check-label" for="p2q3quest7item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest7item2" type="radio" value="grande" name="p2q3quest7">
                      <label class="form-check-label" for="p2q3quest7item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest7item3" type="radio" value="media" name="p2q3quest7">
                      <label class="form-check-label" for="p2q3quest7item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest7item4" type="radio" value="pequena" name="p2q3quest7">
                      <label class="form-check-label" for="p2q3quest7item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest7item5" type="radio" value="nenhuma" name="p2q3quest7">
                      <label class="form-check-label" for="p2q3quest7item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    8. Nas relações sociais, as pessoas devem se regular por princípios.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest8item1" type="radio" value="maxima" name="p2q3quest8">
                      <label class="form-check-label" for="p2q3quest8item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest8item2" type="radio" value="grande" name="p2q3quest8">
                      <label class="form-check-label" for="p2q3quest8item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest8item3" type="radio" value="media" name="p2q3quest8">
                      <label class="form-check-label" for="p2q3quest8item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest8item4" type="radio" value="pequena" name="p2q3quest8">
                      <label class="form-check-label" for="p2q3quest8item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest8item5" type="radio" value="nenhuma" name="p2q3quest8">
                      <label class="form-check-label" for="p2q3quest8item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    9. O farmacêutico está se valendo de uma lei inútil, que só protege os ricos.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest9item1" type="radio" value="maxima" name="p2q3quest9">
                      <label class="form-check-label" for="p2q3quest9item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest9item2" type="radio" value="grande" name="p2q3quest9">
                      <label class="form-check-label" for="p2q3quest9item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest9item3" type="radio" value="media" name="p2q3quest9">
                      <label class="form-check-label" for="p2q3quest9item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest9item4" type="radio" value="pequena" name="p2q3quest9">
                      <label class="form-check-label" for="p2q3quest9item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest9item5" type="radio" value="nenhuma" name="p2q3quest9">
                      <label class="form-check-label" for="p2q3quest9item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    10. A lei, neste caso, atrapalha a mais profunda aspiração de qualquer membro da sociedade.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest10item1" type="radio" value="maxima" name="p2q3quest10">
                      <label class="form-check-label" for="p2q3quest10item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest10item2" type="radio" value="grande" name="p2q3quest10">
                      <label class="form-check-label" for="p2q3quest10item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest10item3" type="radio" value="media" name="p2q3quest10">
                      <label class="form-check-label" for="p2q3quest10item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest10item4" type="radio" value="pequena" name="p2q3quest10">
                      <label class="form-check-label" for="p2q3quest10item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest10item5" type="radio" value="nenhuma" name="p2q3quest10">
                      <label class="form-check-label" for="p2q3quest10item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    11. A atitude do farmacêutico é mesquinha e cruel.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest11item1" type="radio" value="maxima" name="p2q3quest11">
                      <label class="form-check-label" for="p2q3quest11item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest11item2" type="radio" value="grande" name="p2q3quest11">
                      <label class="form-check-label" for="p2q3quest11item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest11item3" type="radio" value="media" name="p2q3quest11">
                      <label class="form-check-label" for="p2q3quest11item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest11item4" type="radio" value="pequena" name="p2q3quest11">
                      <label class="form-check-label" for="p2q3quest11item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest11item5" type="radio" value="nenhuma" name="p2q3quest11">
                      <label class="form-check-label" for="p2q3quest11item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    12. Roubar, num caso como este, traria benefícios para a sociedade inteira.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest12item1" type="radio" value="maxima" name="p2q3quest12">
                      <label class="form-check-label" for="p2q3quest12item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest12item2" type="radio" value="grande" name="p2q3quest12">
                      <label class="form-check-label" for="p2q3quest12item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest12item3" type="radio" value="media" name="p2q3quest12">
                      <label class="form-check-label" for="p2q3quest12item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest12item4" type="radio" value="pequena" name="p2q3quest12">
                      <label class="form-check-label" for="p2q3quest12item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q3quest12item5" type="radio" value="nenhuma" name="p2q3quest12">
                      <label class="form-check-label" for="p2q3quest12item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <hr>
              <p>
                Da lista das 12 questões escolha as 4 mais importantes:
              </p>
              <fieldset>
                <div class="row">
                  <div class="col-md-7">
                    A 1ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q3quest13item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    A 2ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q3quest14item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    A 3ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q3quest15item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    A 4ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q3quest16item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
              </fieldset>
            </article>
            <section class="field-row" style="justify-content: flex-end">
              <button>< Voltar</button>
              <button onclick="showQuestionP2Q3(3,4); return false;" class="default">Avançar ></button>
            </section>
          </div>

          <div id="question4" style="display:none;">
            <article role="tabpanel" id="p2q4">
              <fieldset>
                <div class="row">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          O Prisioneiro Foragido
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Um homem foi condenado à prisão por 10 anos. Depois de um ano, porém, ele fugiu da cadeia, mudou-se para uma região nova do País, e tomou o nome de Andrade. Durante oito anos, ele trabalhou duro, tanto que conseguiu economizar dinheiro suficiente para ter seu próprio negócio. Ele era muito gentil com seus fregueses, pagava altos salários aos seus empregados e dava muito dos seus lucros pessoais para obras de caridade. Um certo dia, dona Cida, uma velha vizinha, reconheceu-o como o homem que tinha fugido da prisão, e a quem a polícia estava procurando. 
                          <hr>
                          <div class="mt-3">
                            <h6>Dona Cida deveria entregar o Sr. Andrade polícia?</h6>
                            <div class="form-check form-check-inline p-0">
                              <input class="form-check-input" id="p2q4quest0item1" type="radio" value="sim" name="p2q4quest0">
                              <label class="form-check-label" for="p2q4quest0item1">Sim</label>
                            </div>
                            <div class="form-check form-check-inline p-0">
                              <input class="form-check-input" id="p2q4quest0item2" type="radio" value="nao" name="p2q4quest0">
                              <label class="form-check-label" for="p2q4quest0item2">Não</label>
                            </div>
                            <div class="form-check form-check-inline p-0">
                              <input class="form-check-input" id="p2q4quest0item3" type="radio" value="nao-sei" name="p2q4quest0">
                              <label class="form-check-label" for="p2q4quest0item3">Não sei</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <h4>As afirmativas a seguir são possíveis justificativas da sua resposta anterior. Atribua um grau de importância a cada uma delas:</h4>
                  <hr>
                  <div class="col-md-6">
                    1. Oito anos não são suficientes para provar que o Sr. Andrade é uma boa pessoa.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest1item1" type="radio" value="maxima" name="p2q4quest1">
                      <label class="form-check-label" for="p2q4quest1item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest1item2" type="radio" value="grande" name="p2q4quest1">
                      <label class="form-check-label" for="p2q4quest1item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest1item3" type="radio" value="media" name="p2q4quest1">
                      <label class="form-check-label" for="p2q4quest1item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest1item4" type="radio" value="pequena" name="p2q4quest1">
                      <label class="form-check-label" for="p2q4quest1item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest1item5" type="radio" value="nenhuma" name="p2q4quest1">
                      <label class="form-check-label" for="p2q4quest1item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    2. O não cumprimento de uma lei estimula a desobediência dos sistemas legais.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest2item1" type="radio" value="maxima" name="p2q4quest2">
                      <label class="form-check-label" for="p2q4quest2item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest2item2" type="radio" value="grande" name="p2q4quest2">
                      <label class="form-check-label" for="p2q4quest2item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest2item3" type="radio" value="media" name="p2q4quest2">
                      <label class="form-check-label" for="p2q4quest2item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest2item4" type="radio" value="pequena" name="p2q4quest2">
                      <label class="form-check-label" for="p2q4quest2item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest2item5" type="radio" value="nenhuma" name="p2q4quest2">
                      <label class="form-check-label" for="p2q4quest2item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    3. Melhor seria uma sociedade sem leis, sem a opressão dos sistemas legais.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest3item1" type="radio" value="maxima" name="p2q4quest3">
                      <label class="form-check-label" for="p2q4quest3item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest3item2" type="radio" value="grande" name="p2q4quest3">
                      <label class="form-check-label" for="p2q4quest3item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest3item3" type="radio" value="media" name="p2q4quest3">
                      <label class="form-check-label" for="p2q4quest3item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest3item4" type="radio" value="pequena" name="p2q4quest3">
                      <label class="form-check-label" for="p2q4quest3item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest3item5" type="radio" value="nenhuma" name="p2q4quest3">
                      <label class="form-check-label" for="p2q4quest3item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    4. O Sr. Andrade deve cumprir o que determina a lei.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest4item1" type="radio" value="maxima" name="p2q4quest4">
                      <label class="form-check-label" for="p2q4quest4item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest4item2" type="radio" value="grande" name="p2q4quest4">
                      <label class="form-check-label" for="p2q4quest4item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest4item3" type="radio" value="media" name="p2q4quest4">
                      <label class="form-check-label" for="p2q4quest4item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest4item4" type="radio" value="pequena" name="p2q4quest4">
                      <label class="form-check-label" for="p2q4quest4item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest4item5" type="radio" value="nenhuma" name="p2q4quest4">
                      <label class="form-check-label" for="p2q4quest4item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    5. As ações devem ser julgadas a partir de princípios universais de justiça.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest5item1" type="radio" value="maxima" name="p2q4quest5">
                      <label class="form-check-label" for="p2q4quest5item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest5item2" type="radio" value="grande" name="p2q4quest5">
                      <label class="form-check-label" for="p2q4quest5item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest5item3" type="radio" value="media" name="p2q4quest5">
                      <label class="form-check-label" for="p2q4quest5item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest5item4" type="radio" value="pequena" name="p2q4quest5">
                      <label class="form-check-label" for="p2q4quest5item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest5item5" type="radio" value="nenhuma" name="p2q4quest5">
                      <label class="form-check-label" for="p2q4quest5item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    6. Não é vantagem fazer prisões isoladas quando se trata de um homem caridoso.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest6item1" type="radio" value="maxima" name="p2q4quest6">
                      <label class="form-check-label" for="p2q4quest6item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest6item2" type="radio" value="grande" name="p2q4quest6">
                      <label class="form-check-label" for="p2q4quest6item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest6item3" type="radio" value="media" name="p2q4quest6">
                      <label class="form-check-label" for="p2q4quest6item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest6item4" type="radio" value="pequena" name="p2q4quest6">
                      <label class="form-check-label" for="p2q4quest6item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest6item5" type="radio" value="nenhuma" name="p2q4quest6">
                      <label class="form-check-label" for="p2q4quest6item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    7. Só uma pessoa cruel e sem coração denunciaria o Sr. Andrade.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest7item1" type="radio" value="maxima" name="p2q4quest7">
                      <label class="form-check-label" for="p2q4quest7item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest7item2" type="radio" value="grande" name="p2q4quest7">
                      <label class="form-check-label" for="p2q4quest7item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest7item3" type="radio" value="media" name="p2q4quest7">
                      <label class="form-check-label" for="p2q4quest7item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest7item4" type="radio" value="pequena" name="p2q4quest7">
                      <label class="form-check-label" for="p2q4quest7item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest7item5" type="radio" value="nenhuma" name="p2q4quest7">
                      <label class="form-check-label" for="p2q4quest7item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    8. O correto seria que Dona Cida se comportasse com base no que dita a lei.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest8item1" type="radio" value="maxima" name="p2q4quest8">
                      <label class="form-check-label" for="p2q4quest8item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest8item2" type="radio" value="grande" name="p2q4quest8">
                      <label class="form-check-label" for="p2q4quest8item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest8item3" type="radio" value="media" name="p2q4quest8">
                      <label class="form-check-label" for="p2q4quest8item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest8item4" type="radio" value="pequena" name="p2q4quest8">
                      <label class="form-check-label" for="p2q4quest8item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest8item5" type="radio" value="nenhuma" name="p2q4quest8">
                      <label class="form-check-label" for="p2q4quest8item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    9. Dona Cida deve pensar na sua amizade com o Sr. Andrade.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest9item1" type="radio" value="maxima" name="p2q4quest9">
                      <label class="form-check-label" for="p2q4quest9item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest9item2" type="radio" value="grande" name="p2q4quest9">
                      <label class="form-check-label" for="p2q4quest9item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest9item3" type="radio" value="media" name="p2q4quest9">
                      <label class="form-check-label" for="p2q4quest9item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest9item4" type="radio" value="pequena" name="p2q4quest9">
                      <label class="form-check-label" for="p2q4quest9item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest9item5" type="radio" value="nenhuma" name="p2q4quest9">
                      <label class="form-check-label" for="p2q4quest9item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    10.Um cidadão tem obrigação de entregar um criminoso foragido, não importando as circunstâncias.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest10item1" type="radio" value="maxima" name="p2q4quest10">
                      <label class="form-check-label" for="p2q4quest10item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest10item2" type="radio" value="grande" name="p2q4quest10">
                      <label class="form-check-label" for="p2q4quest10item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest10item3" type="radio" value="media" name="p2q4quest10">
                      <label class="form-check-label" for="p2q4quest10item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest10item4" type="radio" value="pequena" name="p2q4quest10">
                      <label class="form-check-label" for="p2q4quest10item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest10item5" type="radio" value="nenhuma" name="p2q4quest10">
                      <label class="form-check-label" for="p2q4quest10item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    11. Decisões deste tipo devem ser tomadas considerando-se o bem comum.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest11item1" type="radio" value="maxima" name="p2q4quest11">
                      <label class="form-check-label" for="p2q4quest11item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest11item2" type="radio" value="grande" name="p2q4quest11">
                      <label class="form-check-label" for="p2q4quest11item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest11item3" type="radio" value="media" name="p2q4quest11">
                      <label class="form-check-label" for="p2q4quest11item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest11item4" type="radio" value="pequena" name="p2q4quest11">
                      <label class="form-check-label" for="p2q4quest11item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest11item5" type="radio" value="nenhuma" name="p2q4quest11">
                      <label class="form-check-label" for="p2q4quest11item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    12. O cumprimento de uma lei deve estar subordinado aos interesses e necessidades sociais.
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest12item1" type="radio" value="maxima" name="p2q4quest12">
                      <label class="form-check-label" for="p2q4quest12item1">Máxima</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest12item2" type="radio" value="grande" name="p2q4quest12">
                      <label class="form-check-label" for="p2q4quest12item2">Grande</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest12item3" type="radio" value="media" name="p2q4quest12">
                      <label class="form-check-label" for="p2q4quest12item3">Média</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest12item4" type="radio" value="pequena" name="p2q4quest12">
                      <label class="form-check-label" for="p2q4quest12item4">Pequena</label>
                    </div>
                    <div class="form-check form-check-inline p-0">
                      <input class="form-check-input" id="p2q4quest12item5" type="radio" value="nenhuma" name="p2q4quest12">
                      <label class="form-check-label" for="p2q4quest12item5">Nenhuma</label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <hr>
              <p>
                Da lista das 12 questões escolha as 4 mais importantes:
              </p>
              <fieldset>
                <div class="row">
                  <div class="col-md-7">
                    A 1ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q4quest13item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    A 2ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q4quest14item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    A 3ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q4quest15item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    A 4ª questão mais importante:
                  </div>
                  <div class="col-md-5">
                    <select name="p2q4quest16item1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
              </fieldset>
            </article>
            <hr>
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
        <p class="status-bar-field">33% concluído</p>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>

  <script src="../assets/js/scripts.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>