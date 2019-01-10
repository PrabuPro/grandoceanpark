<?php require  ($_SERVER['DOCUMENT_ROOT'].'/grandoceanpark/application/views/main/navigation.php');?>

<header class="header-aboutus">
	<div class="header__text-box">
		<h1 class="heading-primary">
			<span class="heading-primary--main heading-primary--main--contact-us ">Contact Us</span>
		</h1>
	</div>
</header>
<main>
	<div class="contact-us">
		<div class="contact-us__section">
			<svg class="contact-us__img">
				<use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-volume-control-phone"></use>
			</svg>
			<h4 class="contact-us__text">Lorem ipsum dolor sit</h4>
		</div>
		<div class="contact-us__section">
			<svg class="contact-us__img">
				<use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-home"></use>
			</svg>
			<h1 class="contact-us__text">011223355446</h1>
		</div>
		<div class="contact-us__section">
			<svg class="contact-us__img">
				<use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-comments-o"></use>
			</svg>
			<h4 class="contact-us__text">Lorem ipsum dolor sit</h4>
		</div>
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1979.0142403556943!2d79.84129922346031!3d7.23759076239605!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64d095806b9e9f46!2sGrand+Oceanpark!5e0!3m2!1sen!2slk!4v1546225390981"
	 width="100%" height="450" frameborder="0" style="border:none; display: block;" allowfullscreen></iframe>

	<section class="section-bookTable">
		<div class="book-table">
			<div class="row">
				<div class="book-table__box">
					<h1 class="book-table__title">Send Us a Mail</h1>
					<div class="book-table__form">
						<form action="#" class="form">
							<div class="form-rows-3">
								<div class="input-field">
									<input id="name" type="text" class="input-field__contact-us">
									<label for="name" class="book-table__label">Your Name</label>
								</div>
							</div>
							<div class="form-rows-3">
								<div class="input-field">
									<input id="email" type="email" class="input-field__contact-us">
									<label for="email" class="book-table__label">Your Email</label>
								</div>
							</div>
							<div class="form-rows-3">
								<div class="input-field">
									<textarea id="message" class="materialize-textarea input-field__message"></textarea>
									<label for="message" class="book-table__label">Message</label>
								</div>
							</div>

							<div class="from__group book-table__button">
								<button class="btnx btnx-green ">
									Book now &rarr;
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
