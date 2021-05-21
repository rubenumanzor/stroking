<?PHP
     session_start();
     if(!isset($_SESSION['vsID'])){
          header('location:../../pages/404.php');
     }

     if($_SESSION['vsTipoU']!='1'){
         header('location:../../pages/404.php');
     }
?>
<?PHP header('Content-Type: text/html; charset=UTF-8');
      include('../componentes/header_a.html'); ?>

<div class="container mt-5 mb-5" style="width: 70%;">
   <h3>Reporte de usuarios</h3>
    <hr>
    <form action="" method="POST">
    <div class="row">
        <div class="col">
        <div class="form-group">
    <label for="example1">Nickname</label>
    <select class="custom-select" id="tipo" name="tipo">
    <option selected>Elegir...</option>
    <option value="libro">Libro</option>
  </select>
  </div>
        </div>
        <div class="col">
        <div class="form-group">
    <label for="exampleInputEmail1">Tipo de usuario</label>
    <select class="custom-select" id="idioma" name="idioma">
    <option selected>Elegir...</option>
    <option value="ingles">Administrador</option>
    <option value="español">Normal</option>
  </select>
    
  </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-info">Consultar</button>
       <button type="reset" class="btn btn-dark">Cancelar</button>
        </div>
    </div>
    </form>
   </div>

<?PHP include '../componentes/footer_2.html';?>