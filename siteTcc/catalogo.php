
<!-- Start Content -->
<div class="container py-5">
	<div class="row">

		<div class="col-lg-3">
			<h1 class="h2 pb-4">Categorias</h1>
			<ul class="list-unstyled templatemo-accordion">
				<li class="pb-3"><a
					class="collapsed d-flex justify-content-between h3 text-decoration-none"
					href="#"> Para todos os estilos<i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
				</a>
					<ul class="collapse show list-unstyled pl-3">
						<li><a class="text-decoration-none" href="#">Masculino</a></li>
						<li><a class="text-decoration-none" href="#">Feminino</a></li>
					</ul></li>
				
				<li class="pb-3"><a
					class="collapsed d-flex justify-content-between h3 text-decoration-none"
					href="#"> Produtos variados <i
						class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
				</a>
					
			</ul>
		</div>

		<div class="col-lg-9">
			<div class="row">
				<div class="col-md-6">
					<ul class="list-inline shop-top-menu pb-3 pt-1">
						
						<li class="list-inline-item"><a
							class="h3 text-dark text-decoration-none" href="#">Estilo e conforto</a></li>
					</ul>
				</div>
				<div class="col-md-6 pb-4">
					<div class="d-flex">
						<select class="form-control">
							<option>Categorias</option>
							<option>de A Z</option>
							<option>Diversos itens</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					$conn = new PDO('mysql:host=localhost;dbname=bodyfitness', 'root', '');

					$query = "SELECT * FROM produtos;";
					$resultSet = $conn->query($query);
					
					$result = $resultSet->fetchAll(PDO::FETCH_ASSOC);
					
					foreach ($result as $linha) {
						$img = $linha['arquivo'];
						$id = $linha['id'];
						$nome = $linha['nome'];
						$desc = $linha['descricao'];
						$valor = $linha['preco'];
					echo "<div class='col-md-4'>
						<div class='card mb-4 product-wap rounded-0'>
							<div class='card rounded-0'>
								<img class='card-img rounded-0 img-fluid'
									src='uploads/$img'>
							</div>
							<div class='card-body'>
								<h3 class='h3 text-decoration-none'>ID: $id</br>$nome</h3>
								<ul
									class='w-100 list-unstyled d-flex justify-content-between mb-0'>
									<li>$desc</li>
									<li class='pt-2'><span
										class='product-color-dot color-dot-red float-left rounded-circle ml-1'></span>
										<span
										class='product-color-dot color-dot-blue float-left rounded-circle ml-1'></span>
										<span
										class='product-color-dot color-dot-black float-left rounded-circle ml-1'></span>
										<span
										class='product-color-dot color-dot-light float-left rounded-circle ml-1'></span>
										<span
										class='product-color-dot color-dot-green float-left rounded-circle ml-1'></span>
									</li>
								</ul>
									<li><i class='text-warning fa fa-star'></i> <i
										class='text-warning fa fa-star'></i> <i
										class='text-warning fa fa-star'></i> <i
										class='text-warning fa fa-star'></i> <i
										class='text-warning fa fa-star'></i></li>
								</ul>
								<p class='text-center mb-0'>R$ $valor</p>
							</div>
						</div>
					</div>";
					}
				?>
			</div>
		</div>

	</div>
</div>
<!-- End Content -->

<!-- Start Brands -->
<section class="bg-light py-5">
	<div class="container my-4">
		<div class="row text-center py-3">
			<div class="col-lg-6 m-auto">
				<h1 class="h1">Sobre nossas peças</h1>
				<hr><p style="text-align:justify " >
				 Com tecidos de alta tecnologia, diferentes níveis de compressão e muito conforto, você não vai mais querer tirar o seu look de academia. Temos opções de várias cores, desde as tradicionais como o preto e o cinza, até cores mais divertidas como o rosa, roxo, verde e vermelho. 
				 </p>
						<hr><p style="text-align:justify " >
				 Os conjuntos fitness também viram opções para aqueles dias que você está indecisa com a roupa, afinal é só juntar o top e a legging com a mesma estampa e não precisa mais se preocupar. É perfeito!
                     </p>
					 <hr><p style="text-align:justify " >
E para quem tem medo de usar roupas fitness transparentes, isso não ocorre com as nossas peças. Aqui você encontra peças com tecnologia Zero Transparência e de durabilidade e resistência, além de garantir a sua segurança durante os seus treinos. Assim, aproveite para conhecer a nossa linha completa de roupa de treino, com tops, shorts, bermudas, calças e muito mais.es e receber no conforto da sua casa. </p>
			</div>
			<div class="col-lg-9 m-auto tempaltemo-carousel">
				<div class="row d-flex flex-row">
					<!--Controls-->
					<div class="col-1 align-self-center">
						<a class="h1" href="#multi-item-example" role="button"
							data-bs-slide="prev"> <i class="text-light fas fa-chevron-left"></i>
						</a>
					</div>
					<!--End Controls-->

					<!--Carousel Wrapper-->
					<div class="col">
						<div class="carousel slide carousel-multi-item pt-2 pt-md-0"
							id="multi-item-example" data-bs-ride="carousel">
							<!--Slides-->
							<div class="carousel-inner product-links-wap" role="listbox">

								<!--First slide-->
								<div class="carousel-item active">
									<div class="row">
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img"
												src="imagens/fitness.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img"
												src="imagens/qualidade.png" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img"
												src="imagens/comida.jpg" alt="Brand Logo"></a>
										</div>
										<div class="col-3 p-md-5">
											<a href="#"><img class="img-fluid brand-img"
												src="imagens/carro.png" alt="Brand Logo"></a>
										</div>
									</div>
								</div>
								<!--End First slide-->

								

							

							</div>
							<!--End Slides-->
						</div>
					</div>
					<!--End Carousel Wrapper-->

					<!--Controls-->
					<div class="col-1 align-self-center">
						<a class="h1" href="#multi-item-example" role="button"
							data-bs-slide="next"> <i class="text-light fas fa-chevron-right"></i>
						</a>
					</div>
					<!--End Controls-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Brands-->