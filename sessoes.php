<?php
    session_start();

    if(isset($_SESSION['utilizador'])){ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'assets/main/docHead.html' ?>
  
  <script src="src/js/contentFunctions/sessoes.js"></script>

</head>

<body>
  <?php include_once 'assets/main/navbar.php' ?>


  <div class="container my-5">
    <div class="card">
      <div class="card-header">
        Nova Filme
      </div>
      <div class="mx-5 my-5">
        <form class="row g-3">

          <div class="col-md-3">
            <label for="dataHora" class="form-label">Data/Hora</label>
            <input type="date" class="form-control" id="dataHoradate">
            <input type="time" class="form-control" id="dataHoratime">
          </div>
          
          <div class="col-md-3">
              <label for="codigoSala" class="form-label">Cinema</label>
              <select class="form-select select2" aria-label="Default select example" id="codigoSala">
              </select>
            </div>
          <div class="col-md-3">
              <label for="idImbdFilme" class="form-label">Filme</label>
              <select class="form-select select2" aria-label="Default select example" id="idImbdFilme">
              </select>
            </div>
         
         


          <div class="col-12">
            <button type="button" class="btn btn-primary" onclick="regista_Sessao()">Registar</button>
          </div>
        </form>
      </div>
    </div>

    


</body>
</html>

<?php 
}else{
    echo "sem permissão!";
}
?>