<?php require  ($_SERVER['DOCUMENT_ROOT'].'/grandoceanpark/application/views/main/navigation.php');?>


<header class="header-aboutus">
	<div class="header__text-box">
		<h1 class="heading-primary">
			<span class="heading-primary--main heading-primary--main--reservation">Reservations</span>
		</h1>
	</div>
</header>

<main>
	<div class="section-reservation">
		<div class="row">
			<div class="book-table__box-2">
				<h1 class="book-table__title">Book a Table</h1>
				<div class="book-table__form-2">
					<form action="#" class="form-2">
						<div class="form-rows">
							<div class="input-field">
								<input id="beginDate" type="text" class="datepicker">
								<label for="beginDate" class="book-table__label">Date</label>
							</div>
							<div class="input-field">
								<input id="name" type="text">
								<label for="name" class="book-table__label">Name</label>
							</div>
						</div>
						<div class="form-rows">
							<div class="input-field">
								<input id="time" type="text" class="timepicker">
								<label for="time" class="book-table__label">Time</label>
							</div>
							<div class="input-field">
								<input id="name" type="text">
								<label for="name" class="book-table__label">Phone</label>
							</div>
						</div>
						<div class="form-rows">
							<div class="input-field">
								<select>
									<option value="" disabled selected class="book-table__label">People</option>
									<option value="1">1 Person</option>
									<option value="2">2 People</option>
									<option value="3">3 People</option>
									<option value="4">4 People</option>
									<option value="5">5 People</option>
									<option value="6">6 People</option>
									<option value="7">7 People</option>
									<option value="8">8 People</option>
								</select>
								<!-- <label>People</label> -->
							</div>
							<div class="input-field">
								<input id="emai" type="email">
								<label for="emai" class="book-table__label">Email</label>
							</div>
						</div>

						<div class="from__group book-table__button-2">
							<button class="btnx btnx-green ">
								Book now &rarr;
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
