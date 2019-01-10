        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>
            <div class="navigation__background">&nbsp;</div>
            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="<?php echo base_url(); ?>home" class="navigation__link">Home</a></li>
                    <li class="navigation__item"><a href="<?php echo base_url(); ?>about-us" class="navigation__link">About Us</a></li>
                    <li class="navigation__item"><a href="<?php echo base_url(); ?>weddings" class="navigation__link">Weddings & Parties</a></li>
                    <li class="navigation__item"><a href="<?php echo base_url(); ?>reservations" class="navigation__link">Reservation</a></li>
                    <li class="navigation__item"><a href="<?php echo base_url(); ?>contact-us" class="navigation__link">Contact Us</a></li>
                </ul>
                <hr width="60%" style="margin: 35px auto 5px auto;">
                <p class="navigation__submenu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto,
                    blanditiis.</p>
                <p class="navigation__submenu--follow" style="margin-top:5px;">Follow us on</p>
                <div class="navigation__social">
                    <svg class="navigation__social--icon">
                        <a href="#" class="navigation__social--link">
                            <use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-facebook"></use>
                        </a>
                    </svg>
                    <svg class="navigation__social--icon">
                        <a href="#" class="navigation__social--link">
                            <use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-instagram"></use>
                        </a>
                    </svg>
                    <svg class="navigation__social--icon">
                        <a href="#" class="navigation__social--link">
                            <use xlink:href="<?php echo base_url();?>assets/img/sprite.svg#icon-twitter"></use>
                        </a>
                    </svg>
                </div>
            </nav>
        </div>

        <nav class="navbartoggle navbarx">
            <div class="row">
                <div class="logo-box">
                    <img src="<?php echo base_url();?>assets/img/logo2.jpg" alt="Logo" class="logo">
                </div>
                <ul class="list">
                    <li class="navitem"><a href="<?php echo base_url(); ?>home" class="navlink">Home</a></li>
                    <li class="navitem"><a href="<?php echo base_url(); ?>about-us" class="navlink">About Us</a></li>
                    <li class="navitem"><a href="<?php echo base_url(); ?>weddings" class="navlink">Weddings & Parties</a></li>
                    <li class="navitem"><a href="<?php echo base_url(); ?>reservations" class="navlink">Reservation</a></li>
                    <li class="navitem"><a href="<?php echo base_url(); ?>contact-us" class="navlink">Contact Us</a></li>
                </ul>
            </div>
        </nav>