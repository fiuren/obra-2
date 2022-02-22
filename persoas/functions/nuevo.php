<?php
require '../../conexion/conexion.php';
require '../../conexion/sesion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nueva Persona</title>
  <!-- esto no sirve no? -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- ESTILOS DE LAS PESTAÑAS Y SU CONTENIDO -> MODIFICAR CON BOOTSTRAP O LO QUE SEA -->
  <link rel="stylesheet" href="../../tabs.css">
</head>

<body>

  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <h2 style="text-align:center">Prueba de lo que se abriría al clicar "Novo Rexistro" de Persoas</h2><br>

  <div class="t-container">

    <ul class="t-tabs">
      <li class="t-tab">Datos Personales</li>
      <li class="t-tab">Formación</li>
      <li class="t-tab">Experiencia</li>
      <li class="t-tab">Acciones</li>
      <li class="t-tab">Ofertas</li>
      <li class="t-tab"><a href="../../login/logout.php">Saír da sesión</a></li>
    </ul>

    <ul class="t-contents">
      <h3 class="p-5 text-center">NOVO REXISTRO</h3>
      <li class="t-content">
        <!-- <p>Contenido Datos</p> -->

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
          <div class="col-md-4">
            <label for="nome" class=" control-label">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="primeiro_apelido" class=" control-label">Primeiro Apelido:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="primeiro_apelido" placeholder="Primeiro Apelido" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="segundo_apelido" class="control-label">Segundo Apelido:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="segundo_apelido" placeholder="Segundo Apelido" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="nif" class=" control-label">DNI / NIF:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="nif" name="nif" placeholder="Número do DNI" pattern="[0-9]{8}+[A-Z]{1}" maxlength="9" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="data_nacemento" class="control-label">Data de nacemento:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="data_nacemento" name="data_nacemento" placeholder="dd-mm-aa" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="sexo" class="control-label">Sexo:</label>
            <div class="col-sm-10">
              <select class="form-control" id="sexo" name="sexo">
                <option value="HOME">HOME</option>
                <option value="MULLER">MULLER</option>
                <option value="OUTRO">NON DEFINIDO</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="codigo_postal" class="control-label">Código postal:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal" maxlength="5" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">Teléfono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="email" class="control-label">Correo electrónico:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
        <p>FORMACION</p>

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
          <div class="col-md-4">
            <label for="nome" class=" control-label">Formacion Reglada:</label>
            <div class="col-sm-10">
              <select class="form-control" id="" name="">
                <option value="text">Bacharelato</option>
                <option value="text">COU</option>
                <option value="text">ESO</option>
                <option value="text">Universidade</option>
              </select>
              <select class="form-control" id="" name="">
                <option value="text"></option>
                <option value="text">Doutorado</option>
                <option value="text">Grao</option>
                <option value="text">Máster</option>
              </select>
              <select class="form-control" id="" name="">
                <option value=""></option>
                <option value="text">Administración e Empresas</option>
                <option value="text">Educación Primaria</option>
                <option value="text">Ciencias Medioambientáis</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="fp" class=" control-label">Formacion Profesional:</label>
            <div class="col-sm-10">
              <select class="form-control" id="" name="">
                <option value="text">Superior</option>
                <option value="text">Certificados de Profesionalidade</option>
                <option value="text">Media</option>
                <option value="text">Básica</option>
              </select>
              <select class="form-control" id="" name="">
                <ol type="A">
                  <option value=""></option>
                  <option value="text">Administración e Xestión</option>
                  <option value="text">Enerxía e Auga</option>
                  <option value="text">Imaxe Persoal</option>
                  <option value="text">Informática e Comunicaións</option>
                  <option value="text">Madeira, moble e corcho</option>
                </ol>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="segundo_apelido" class="control-label">Formación Complementaria:</label>
            <div class="col-sm-10">


            </div>
          </div>
          <div class="col-md-4">
            <label for="nif" class=" control-label">DNI / NIF:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="nif" name="nif" placeholder="Número do DNI" pattern="[0-9]{8}+[A-Z]{1}" maxlength="9" required>
            </div>
          </div>


          <div class="col-md-4">
            <label for="sexo" class="control-label">Idioma</label>
            <div class="col-sm-10">
              <select class="form-control" id="sexo" name="sexo" placeholder="Selecione o nivel">
                <option value=""></option>
                <option value="MULLER">Galego</option>
                <option value="OUTRO">Castelán</option>
                <option value="MULLER">Inglés</option>
                <option value="OUTRO">Francés</option>
                <option value="MULLER">Alemán</option>
                <option value="OUTRO">Italianini</option>
              </select>
              <select class="form-control" id="sexo" name="sexo" placeholder="curso">
                <option value="text">Curso</option>
                <option value="text">CELGA3</option>
                <option value="text">CELGA4</option>
                <option value="text">CELGA5</option>
                <option value="text">B1</option>
                <option value="text">B2</option>
                <option value="text">C1</option>
                <option value="text">C2</option>
                <option value="text">Nativo</option>
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox">
                  <label class="form-check-label" for="defaultCheck1">
                    Viviu no estranxeiro </label>
                </div>
                <div class="form-check">
                  <p>Homologado</p>
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Si
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Non
                </div>

                <div class="input-group">
                  <span class="input-group-text">Notas</span>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
              </select>
            </div>
          </div>

          <br> <br> <br>
          <br>
          <div class="col-md-4">
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>
      </li>
      <li class="t-content">
        <p>Contenido Experiencia</p>
      </li>
      <li class="t-content">
        <p>Contenido Acciones</p>
      </li>
      <li class="t-content">
        <p>Contenido Ofertas</p>
      </li>
    </ul>
  </div>

  <script src="../../tabs.js"></script>

</body>

</html>