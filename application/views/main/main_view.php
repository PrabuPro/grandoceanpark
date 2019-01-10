<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icon-font.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- Compiled and minified CSS -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">

	<title>Grand Oceanpark</title>
</head>

<body>

	<?php $this->load->view($site_view); ?>


	<footer class="footer">
		<div class="footer__logo-box">
			<img src="<?php echo base_url();?>assets/img/logo2.jpg" alt="Full logo" class="footer__logo">
		</div>
		<div class="row">
			<div class="col-1-of-2">
				<div class="footer__navigation">
					<ul class="footer__list">
						<li class="footer__item"><a href="#" class="footer__link">Company</a></li>
						<li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
						<li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
						<li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
						<li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
					</ul>
					<div class="footer__social">
						<svg class="footer__social--icon">
							<a href="#" class="footer__social--link">
								<use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-facebook"></use>
							</a>
						</svg>
						<svg class="footer__social--icon">
							<a href="#" class="footer__social--link">
								<use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-instagram"></use>
							</a>
						</svg>
						<svg class="footer__social--icon">
							<a href="#" class="footer__social--link">
								<use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-twitter"></use>
							</a>
						</svg>
					</div>
				</div>
			</div>
			<div class="col-1-of-2">
				<p class="footer__copyright">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ducimus quam. Modi
					adipisci,
					veritatis odit ipsum quibusdam nam sequi debitis, blanditiis, est ratione vel soluta!
				</p>
			</div>
		</div>
	</footer>
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- <script src="js/parallax.js"></script> -->
	<!-- <script src="js/materialize.min.js"></script> -->
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script>
		$(function () {
			$(".preload").fadeOut(2000, function () {
				$(".content").fadeIn(1000);

				const calander = document.querySelector('.datepicker');
				M.Datepicker.init(calander, {
					format: 'dd-mm-yy'
				});

				const time = document.querySelector('.timepicker');
				M.Timepicker.init(time, {});

				const select = document.querySelector('select');
				M.FormSelect.init(select, {});

				AOS.init();

				$(document).ready(function () {
					$('.parallax').parallax();
				});

				setTimeout(function () {
					self.location.href = '#popup'
				}, 4000);

			});

		});

		$(window).on('scroll', function () {
			if ($(window).scrollTop()) {
				$('.navbartoggle').addClass('navbary');
			} else {
				$('.navbartoggle').removeClass('navbary');
			}
		});

	</script>
	</div>

</body>

</html>
