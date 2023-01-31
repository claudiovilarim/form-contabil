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

  <!-- Sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <title>Bodega</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="bg"></div>
  <div class="container">
    <h1 class="text-center text-white text-shadow" style="font-size: 68px;">Quest</h1>
    <h1 class="text-center text-white text-shadow mt-2" style="font-size: 30px;">Questionário Contábil</h1>
    <h5 class="text-center text-white text-shadow">Lorem ipsum, dolor sit amet consectetur adipisicing elit</h5>
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <div class="row justify-content-md-center bg-white p-4 m-3" style="border-radius: 40px; max-width: 800px;">
              <div class="col col-md-5" style="min-width: 200px;">
                <h2 class="text-pink fw-bold mb-0">Questionário</h2>
                <h2 class="text-pink fst-italic">Bolado</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum hic deleniti quidem natus necessitatibus facere enim assumenda quibusdam temporibus quaerat consequatur accusamus repellat, cumque aperiam ea fuga rerum dolores modi.</p>
                <p class="fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque commodi</p>
              </div>
              <div class="col col-md-7" style="min-width: 200px;">
                <form id="formDados" method="POST" action="./gravaDados.php">
                  <div class="form-floating mb-3 shadow-sm">
                    <input type="text" class="form-control bg-light" id="name" name="nome" placeholder=" " required>
                    <label for="floatingInput">Nome Completo</label>
                  </div>
                  <div class="form-floating mb-3 shadow-sm">
                    <input type="text" class="form-control bg-light" id="phone" name="telefone" placeholder=" " required>
                    <label for="floatingInput">Telefone</label>
                  </div>
                  <div class="form-floating mb-3 shadow-sm">
                    <input type="email" class="form-control bg-light" id="email" name="email" placeholder=" " required>
                    <label for="floatingInput">E-mail</label>
                  </div>
                  <div class="form-floating mb-3 shadow-sm">
                    <input type="text" class="form-control bg-light" id="city" name="cidade" placeholder=" " required>
                    <label for="floatingInput">Cidade</label>
                  </div>
                  <div class="form-floating mb-3 shadow-sm">
                    <input type="text" class="form-control bg-light" id="instagram" name="instagram" placeholder=" ">
                    <label for="floatingInput">Instagram</label>
                  </div>
                  <label class="form-check-label" style="font-size: 10px;">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim facere aliquam magni voluptate! Corrupti ex repellat reiciendis incidunt a, illum atque obcaecati vero asperiores modi, nam, doloremque tempora nulla cumque.
                  </label>
                  <div class="form-check">
                    <input name="recebimento" class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck" style="font-size: 10px;">
                      Aceito/Autorizo...
                    </label>
                  </div>
                  <button class="btn btn-cont mt-2" id="btnEnviar" type="submit">ENVIAR</button>
                </form>
              </div>
            </div>
          </div>
        </div>
  </div>

  <div id="popUpCookie" class="eupopup-container">
    <div class="eupopup-head"></div>
    <div class="eupopup-body">O nosso site coleta cookies para proporcionar uma experiência personalizada ao usuário, apresentar publicidade relevante de acordo com o seu perfil e melhorar a qualidade do nosso site.</div>
    <span class="eupopup-buttons">
      <button id="btnEuPopUp" class="eupopup-button">Entendido</button>
      <div class="clearfix"></div>
    </span>
    <!-- <a href="#" class="eupopup-closebutton">x</a> -->
  </div>
  
  <footer class="footer navbar-fixed-bottom p-2 mt-auto">
    <div class="row container">
      <div class="col title">
        <span class="me-3 h4"><img src="./assets/images/b-footer2.png" class="me-3" width="110px" srcset=""></span>
      </div>
      <div class="col mt-3 text-cont">
        Copyright © 2023 Contábil. Todos os direitos reservados.
      </div>
    </div>
  </footer>

  <script>
    // altera o botao do formulario apos ser submetido
    $('#formDados').submit(function(e) {
      document.getElementById('btnEnviar').innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
      setTimeout(() => {
        document.getElementById('btnEnviar').setAttribute('disabled', 'disabled');
      }, 0500);
      setTimeout(() => {
        document.getElementById('btnEnviar').textContent = 'ENVIAR';
        document.getElementById('btnEnviar').removeAttribute('disabled')
      }, 17000);
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
  <script>
    // Get btn SIM that closes the modal
    let btnEuPopUp = document.getElementById('btnEuPopUp');
    let cookieName2 = 'popUpClosed';
    // Get the modal
    let popUpCookie = document.getElementById("popUpCookie");
    // Executar função quando carregar a página, Exibe o modal
    onload = function() {
      // popUpCookie.style.display = "block";
    }
    // Se o cookie já existir no navegador, remova o modal para o usuário não vê-lo
    if (typeof Cookies.get(cookieName2) !== 'undefined') {
      popUpCookie.style.display = "none";
    }
    // Get the <span> element that closes the modal
    // let spanPopUp = document.getElementsByClassName("eupopup-closebutton")[0];
    // Quando clica no botão ENTENDIDO, fecha o modal e grava o Cookie no navegador
    btnEuPopUp.onclick = function() {
      popUpCookie.style.display = "none";
      // O cookie expira no navegador do cliente a cada 1 dia
      Cookies.set(cookieName2, 'fechado', {
        expires: 1
      });
    }
    // When the user clicks on <span> (x), close the modal
    // spanPopUp.onclick = function() {
    //     popUpCookie.style.display = "none";
    // }
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>