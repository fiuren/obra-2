<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css-obra/modificar-nuevo.css">
<script src="../js/header.js"></script>
<script src="../js/footer.js"></script>

<body>
	<!-- MENU SUPERIOR -->
	<header-component></header-component>

	<!-- MAIN -->

	<div class="container">
		<div class="row">
			<h3 style="text-align:center">NOVO REXISTRO</h3>
		</div>

        <form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Estudos</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="estudos">
        <option selected>Escolle...</option>
        <option value="1">ESO</option>
        <option value="2">COU</option>
        <option value="2">Universidade</option>

      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-4" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="estudos2">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  
    
  </div>
</form>
		
	</div>
	<!-- FOOTER -->
	<footer-component></footer-component>
	<!-- FOOTER -->
</body>

</html>