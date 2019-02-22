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
				<div class="book-table__msg--red"></div>
				<div class="book-table__msg--green"></div>
				<div class="book-table__msg--white">
					<img src="<?php echo base_url();?>assets/img/rolling.gif" alt=""  class="book-table__msg--white-gif">
				</div>
				<div class="book-table__form-2">
					 <form action="reservation/makereservation" method="post" class="form-2" id="form">
                                    <div class="form-rows">
                                        <div class="input-field">
                                            <input id="beginDate" type="text" class="datepicker" name="date" required>
                                            <label for="beginDate" class="book-table__label">Date</label>
                                        </div>
                                        <div class="input-field">
                                            <input id="name" type="text" name="name" class="name" required >
                                            <label for="name" class="book-table__label">Name</label>
                                        </div>
                                    </div>
                                    <div class="form-rows">
                                        <div class="input-field">
                                            <input id="time" type="text" class="timepicker" name="time" required >
                                            <label for="time" class="book-table__label">Time</label>
                                        </div>
                                        <div class="input-field">
                                            <input id="phone" type="text" name="phone" class="phone" required >
                                            <label for="phone" class="book-table__label">Phone</label>
                                        </div>
                                    </div>
                                    <div class="form-rows">
                                        <div class="input-field">
                                            <select name="people" class="people" required >
                                                <option value="0" disabled selected class="book-table__label">People</option>
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
                                            <input id="emai" type="email" name="email" class="email" required>
                                            <label for="emai" class="book-table__label">Email</label>
                                        </div>
                                    </div>

						<div class="from__group book-table__button-2">
							<input class="btnx btnx-green" id="submit" type="submit" value="Book now &rarr;" >
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/book-table.js"></script>
