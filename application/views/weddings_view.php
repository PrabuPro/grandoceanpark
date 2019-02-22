<?php require  ($_SERVER['DOCUMENT_ROOT'].'/grandoceanpark/application/views/main/navigation.php');?>


<header class="header header__weddings">
	<div class="header__text-box">
		<h1 class="heading-primary">
			<span class="heading-primary--main">Weddings & Parties</span>
		</h1>
	</div>
</header>
<main>
	<div class="wedding">
		<div class="wedding__grid">
			<figure class="effect-ruby">
				<img src="<?php echo base_url();?>assets/img/birthday-party.jpg" alt="img13" />
				<figcaption>
					<h2>BirthDay <span>Party</span></h2>
					<p>Whether it is a surprised birthday party or a milestone birthday party, Grand ocean Park
                            serves with the occupancy
                            for a small private gatherings in the restaurant. We will show you off with magical themes
                            that represents you and
                            set you to give the time of joy and all while celebrating </p>
				</figcaption>
			</figure>
			<figure class="effect-ruby">
				<img src="<?php echo base_url();?>assets/img/birthdaycake.jpg" alt="img14" />
				<figcaption>
					<h2>Cheer while you <span>celebrate</span></h2>
					<p>A specialist events team has been developed to accommodate all event inquiries. Events
                            constitute a large element of
                            business in an extremely competitive field. Our policy is to provide instant
                            acknowledgement of inquiries then
                            provide detailed proposals, site inspections and client tastings.</p>
				</figcaption>
			</figure>
			<figure class="effect-ruby">
				<img src="<?php echo base_url();?>assets/img/bg_4.jpg" alt="img14" />
				<figcaption>
					<h2>Weddings & anniversary <span>Party</span></h2>
                        <p> Grand Ocean Park is the ideal destination to celebrate your weddings and anniversaries
                            armed with Indoor A/C
                            Banquet hall, Outdoor banquet hall with creative interiors and a beach front. Celebrate
                            your togetherness or
                            rekindle your love with Grand Ocean Park to sparkle your day with magical sunset. </p>
				</figcaption>
			</figure>
			<figure class="effect-ruby">
				<img src="<?php echo base_url();?>assets/img/balloon2.jpg" alt="img14" />
				<figcaption>
					<h2>Co – operate <span>events</span></h2>
                        <p>Grand Ocean Park is the best place for the companies to celebrate hold periodic events, like
                            an annual company
                            conference or an yearend get together internal meetings, parties and team building events,
                            client events,
                            conferences , product launch events and awards ceremonies. We ensure that our service is in
                            the best condition to
                            satisfy your requirements with high standard.</p>
				</figcaption>
			</figure>
		</div>
	</div>

	<div class="section-reservation">
            <div class="row">
                <div class="book-table__box-2">
                    <h1 class="book-table__title">Book a Hall</h1>
                    <div class="book-table__msg--red"></div>
                    <div class="book-table__msg--green"></div>
                    <div class="book-table__msg--white">
                        <img src="<?php echo base_url();?>assets/img/rolling.gif" alt=""  class="book-table__msg--white-gif">
                    </div>
                    <div class="book-table__form-2">
                        <form action="reservation/bookhall" class="form-2" method="post">
                            <div class="form-rows">
                                <div class="input-field">
                                    <input id="beginDate" type="text" class="datepicker" name="date">
                                    <label for="beginDate" class="book-table__label">Date</label>
                                </div>
                                <div class="input-field">
                                    <input id="name" type="text" class="name" name="name">
                                    <label for="name" class="book-table__label">Name</label>
                                </div>
                            </div>
                            <div class="form-rows">
                                <div class="input-field">
                                    <input id="time" type="text" class="timepicker" name="time">
                                    <label for="time" class="book-table__label">Time</label>
                                </div>
                                <div class="input-field">
                                    <input id="phone" type="text" name="phone" >
                                    <label for="phone" class="book-table__label">Phone</label>
                                </div>
                            </div>
                            <div class="form-rows">
                                <div class="input-field">
                                    <select name="hall_type" class="hall_type">
                                        <option value="" disabled selected class="book-table__label">Hall Type</option>
                                        <option value="wedding holls">Wedding Holls</option>
                                        <option value="banquet holls">Banquet Holls</option>
                                    </select>
                                    <!-- <label>People</label> -->
                                </div>
                                <div class="input-field" >
                                    <input id="emai" type="email" name="email" >
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
<script src="<?php echo base_url(); ?>assets/js/book-hall.js"></script>
