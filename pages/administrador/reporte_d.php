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
   <h3>Reporte de documentos</h3>
    <hr>
    <form action="" >
    <div class="row" method="POST">
        <div class="col">
        <div class="form-group">
    <label for="example1">Tipo</label>
    <select class="custom-select" id="tipo" name="tipo">
    <option selected>Elegir...</option>
    <option value="libro">Libro</option>
    <option value="documento">Documento</option>
    <option value="revista">Revista</option>
  </select>
  </div>
        </div>
        <div class="col">
        <div class="form-group">
    <label for="exampleInputEmail1">Idioma</label>
    <select class="custom-select" id="idioma" name="idioma">
    <option selected>Elegir...</option>
    <option value="ingles">Inglés</option>
    <option value="español">Español</option>
    <option value="portugues">Portugues</option>
    <option value="frances">Francés</option>
    <option value="ruso">Ruso</option>
    <option value="mandarin">Mandarín</option>
    <option value="japones">Japonés</option>
  </select>
    
  </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="form-group">
    <label for="exampleInputEmail1">Autor</label>
    <select class="custom-select" id="idioma" name="idioma">
    <option selected>Elegir...</option>
    <option value="ingles">Miguel Cervantes</option>
 
  </select>
    
  </div>
        </div>
        <div class="col">
        <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <select class="custom-select" id="idioma" name="idioma">
    <option selected>Elegir...</option>
    <option value="ingles">Terror</option>

  </select>
    
  </div>
        </div>
    </div>
    <div class="row">
          <div class="col">
          <div class="form-group">
    <label for="exampleInputEmail1">Editorial</label>
    <select class="custom-select" id="idioma" name="idioma">
    <option selected>Elegir...</option>

  </select>
    
  </div>
          </div>
          <div class="col">

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