<?php require_once 'config.php'; ?>
<?php include(HEADER_CONTATO); ?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Contatos</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Início</a>
				<span class="sb-item active">Contatos</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section end -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Fale Conosco</h2>
						<p>A Virtual Broker é a número 1 em atendimento, então nessa página deixaremos nossos meios de comunicação.  Você também pode nos mandar uma mensagem, seja uma reclamação, crítica ou sugestão. Basta preencher o formulário ao lado. </p>
						<ul>
							<li><i class="flaticon-032-placeholder"></i>1661  Country Club, Poços de Caldas, MG</li>
							<li><i class="flaticon-029-telephone-1"></i>+55 (35) 9 9898 - 9520</li>
							<li><i class="flaticon-025-arroba"></i>1118416@sga.pucminas.br</li>
							<li><i class="flaticon-038-wall-clock"></i>Todo dia: 06:00 -22:00</li>
						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" method="post" action="processaContact.php">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Seu Nome" name="nome">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Seu E-mail" name="email">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Assunto" name="assunto">
								<textarea placeholder="Sua mensagem" name="mensagem"></textarea>
								<button class="site-btn">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.5091209037128!2d-46.60071468558874!3d-21.799251404767016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9db66b5f8901b%3A0xc4bccba21b48f3bc!2sPUC%20Minas%20Po%C3%A7os%20de%20Caldas!5e0!3m2!1spt-BR!2sbr!4v1588795564386!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</section>
	<!-- Contact Section end -->
	<!-- Score Section end -->
<?php include(FOOTER_TEMPLATE); ?>