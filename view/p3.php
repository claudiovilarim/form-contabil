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
          <button role="tab" aria-controls="p2">Questionário pós-experimento</button>
          <button role="tab" aria-controls="p3" aria-selected="true">Informações Sociodemográficas</button>
        </menu>

        <form method="POST" action="../controller/p3form.php">
          <h4>Informações Sociodemográficas</h4>
          <fieldset>
            <div class="field-row">Gênero:</div>
            <div class="field-row">
              <input id="radioGenero1" type="radio" name="genero" value="masculino" required>
              <label for="radioGenero1">Masculino</label>
            </div>
            <div class="field-row">
              <input id="radioGenero2" type="radio" name="genero" value="feminino">
              <label for="radioGenero2">Feminino</label>
            </div>
          </fieldset>
          <fieldset>
            <div class="field-row">
              <label for="textIdade">Qual a sua idade (em anos completos)? </label>
              <input id="textIdade" name="idade" type="number" required />
            </div>
            <div class="field-row">
              <label for="texttempoContabil">Tempo de atuação na área contábil (em anos completos)? </label>
              <input id="texttempoContabil" name="tempoContabil" type="number" required />
            </div>
            <div class="field-row">
              <label for="texttempoEmpresa">Tempo de atuação na atual empresa (em anos completos)? </label>
              <input id="texttempoEmpresa" name="tempoEmpresa" type="number" required />
            </div>
          </fieldset>
          <fieldset>
            <div class="field-row">Posição ocupacional dentro da empresa em que trabalha atualmente:</div>
            <div class="field-row">
              <input id="radioposicao1" type="radio" name="posicao" value="gestao-topo" required>
              <label for="radioposicao1">Gestão do Topo (Presidente, Vice-Presidente, Chefe Executivo, Chefe Financeiro e afins)</label>
            </div>
            <div class="field-row">
              <input id="radioposicao2" type="radio" name="posicao" value="gestao-intermediaria">
              <label for="radioposicao2">Gestão Intermediária (Diretor Regional e/ou de filiais, Diretor de Departamento e afins)</label>
            </div>
            <div class="field-row">
              <input id="radioposicao3" type="radio" name="posicao" value="gestao-operacional">
              <label for="radioposicao3">Gestão Operacional (Diretamente envolvido apenas com o processo de produção da informação, sem interferir nos aspectos decisórios, apenas na elaboração, por exemplo, auxiliar e afins)</label>
            </div>
          </fieldset>
          <fieldset>
            <div class="field-row">Qual o porte da empresa em que atua:</div>
            <div class="field-row">
              <input id="radioporteEmpresa1" type="radio" name="porteEmpresa" value="microempresa" required>
              <label for="radioporteEmpresa1">Microempresa (faturamento até R$ 360 mil por ano)</label>
            </div>
            <div class="field-row">
              <input id="radioporteEmpresa2" type="radio" name="porteEmpresa" value="pequena">
              <label for="radioporteEmpresa2">Pequena empresa (de R$ 360 mil a R$ 4,8 milhões)</label>
            </div>
            <div class="field-row">
              <input id="radioporteEmpresa3" type="radio" name="porteEmpresa" value="media">
              <label for="radioporteEmpresa3">Média empresa (entre R$ 4,8 milhões e R$ 300 milhões)</label>
            </div>
            <div class="field-row">
              <input id="radioporteEmpresa4" type="radio" name="porteEmpresa" value="grande">
              <label for="radioporteEmpresa4">Grande empresa (mais de R$ 300 milhões)</label>
            </div>
          </fieldset>
          <fieldset>
            <div class="field-row">Quantos níveis hierárquicos existem entre você e o(a) principal executivo(a)</div>
            <div class="field-row">
              <input id="radioniveisHierarquicos1" type="radio" name="niveisHierarquicos" value="entre-1e2" required>
              <label for="radioniveisHierarquicos1">Entre 1 e 2</label>
            </div>
            <div class="field-row">
              <input id="radioniveisHierarquicos2" type="radio" name="niveisHierarquicos" value="entre-3e4">
              <label for="radioniveisHierarquicos2">Entre 3 e 4</label>
            </div>
            <div class="field-row">
              <input id="radioniveisHierarquicos3" type="radio" name="niveisHierarquicos" value="entre-5e6">
              <label for="radioniveisHierarquicos3">Entre 5 e 6</label>
            </div>
            <div class="field-row">
              <input id="radioniveisHierarquicos4" type="radio" name="niveisHierarquicos" value="entre-6e7">
              <label for="radioniveisHierarquicos4">Entre 7 e 8</label>
            </div>
            <div class="field-row">
              <input id="radioniveisHierarquicos5" type="radio" name="niveisHierarquicos" value="entre-9e10">
              <label for="radioniveisHierarquicos5">Entre 9 e 10</label>
            </div>
            <div class="field-row">
              <input id="radioniveisHierarquicos6" type="radio" name="niveisHierarquicos" value="mais de 10">
              <label for="radioniveisHierarquicos6">Mais de 10</label>
            </div>
          </fieldset>
          <fieldset>
            <div class="field-row">Qual a sua maior titulação concluída:</div>
            <div class="field-row">
              <input id="radiotitulacaoConcluida1" type="radio" name="titulacaoConcluida" value="graduacao" required>
              <label for="radiotitulacaoConcluida1">Graduação</label>
            </div>
            <div class="field-row">
              <input id="radiotitulacaoConcluida2" type="radio" name="titulacaoConcluida" value="especializacao">
              <label for="radiotitulacaoConcluida2">Especialização</label>
            </div>
            <div class="field-row">
              <input id="radiotitulacaoConcluida3" type="radio" name="titulacaoConcluida" value="mestrado">
              <label for="radiotitulacaoConcluida3">Mestrado</label>
            </div>
            <div class="field-row">
              <input id="radiotitulacaoConcluida4" type="radio" name="titulacaoConcluida" value="doutorado">
              <label for="radiotitulacaoConcluida4">Doutorado</label>
            </div>
          </fieldset>
          <fieldset>
            <div class="field-row">
              <label for="textestadoAtuacao">Qual o seu estado de atuação: </label>
              <input id="textestadoAtuacao" name="estadoAtuacao" type="text" required />
            </div>
          </fieldset>

          <section class="field-row" style="justify-content: flex-end">
            <button>< Voltar</button>
            <button type="submit" class="default">Avançar ></button>
          </section>
        </form>

      </div>
      <div class="status-bar">
        <p class="status-bar-field">Press F1 for see message again | CTBL v1.00</p>
        <p class="status-bar-field"><?= date("d/m/Y"); ?> </p>
        <p class="status-bar-field">66% concluído</p>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>

  <script src="../assets/js/scripts.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>