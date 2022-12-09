   <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow ">
        <div class="container d-flex justify-content-between align-items-center">

            <a href="index.php" style="text-decoration-line: none;"><span class="navbar-brand text-success logo h1 align-self-center">
                Body<span class="navbar-brand text-dark logo h1 align-self-center" href="index.php">Fitness</span>
            </span></a>

            <button class="navbar-toggler border-0 bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav nav-tabs nav-stacked navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item ">
                            <a class="nav-link text-dark"  id="home" href="">Home</a></li>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link text-dark"  id="catalogo" href="">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="sobre" href="">Sobre</a>
                        </li>
                        <li class="nav-iteme">
                            <a class="nav-link text-dark" id="contato" href="">Loja Física</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    
                       
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="principal.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <script type="text/javascript">
    $(document).ready(function() {
		$("#home").click(function( event ) {
			$("#content").load("home.php");
			event.preventDefault(); // cancela o evento original do link
		});
	});
	$(document).ready(function() {
		$("#catalogo").click(function( event ) {
			$("#content").load("catalogo.php");
			event.preventDefault(); // cancela o evento original do link
		});
	});
	$(document).ready(function() {
		$("#contato").click(function( event ) {
			$("#content").load("contato.php");
			event.preventDefault(); // cancela o evento original do link
		});
	});
	$(document).ready(function() {
		$("#sobre").click(function( event ) {
			$("#content").load("sobre.php");
			event.preventDefault(); // cancela o evento original do link
		});
	});

    </script>
    <!-- Close Header -->