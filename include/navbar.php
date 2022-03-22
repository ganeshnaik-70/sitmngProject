<!-- NAVIGATION BAR-->
<?php
echo '
<nav id="conf" class="navbar navbar-expand-lg navbar-light bg-primary mt-5 mb-3 sticky-top">
        <div class="container">
            <a href="index.php" class="navbar-brand text-white font10 font-weight-bold p-2">ETSEM 2020 </a>
            <button class="navbar-toggler border-info" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Conference
                            Details</a>
                        <div class="dropdown-menu bg-primary border-0">
                            <a href="index.php#dates" class=" dropdown-item text-white bg-primary border-bottom">Important
                                Dates</a>
                            <a href="tracks.php#conf" class="dropdown-item text-white bg-primary border-bottom">Conference
                                Tracks</a>
                            <a href="#conf" class="dropdown-item text-white bg-primary border-bottom">Registration</a>
                            <a href="fee.php#conf" class="dropdown-item text-white bg-primary border-bottom">Registration
                                Fees</a>
                            <a href="#conf" class="dropdown-item text-white bg-primary border-bottom">Program Schedule</a>
                            <a href="#conf" class="dropdown-item text-white bg-primary border-bottom">Venue</a>
                            <a href="program.php#conf" class="dropdown-item text-white bg-primary border-bottom">Conference
                                Patrons</a>
                            <a href="#conf" class="dropdown-item text-white bg-primary border-bottom">Conference
                                Brochure</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Call for
                            Papers</a>
                        <div class="dropdown-menu bg-primary border-0">
                            <a href="callforpapers.php#conf" class="dropdown-item text-white bg-primary border-bottom">Paper
                                Submission</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Speakers</a>
                        <div class="dropdown-menu bg-primary border-0">
                            <a href="keynotespeakers.php#conf"
                                class="dropdown-item text-white bg-primary border-bottom">Keynote Speakers</a>
                            <a href="invited.php#conf" class="dropdown-item text-white bg-primary border-bottom">Invited speakers</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Committees</a>
                        <div class="dropdown-menu bg-primary border-0">
                            <a href="committe.php#conf" class="dropdown-item text-white bg-primary border-bottom">Organizing
                                Committee</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown">Travel &
                            Accommodation</a>
                        <div class="dropdown-menu bg-primary border-0">
                            <a href="travel.php#conf"
                                class="dropdown-item text-white bg-primary border-bottom">Accommodation</a>
                            <a href="tourism.php#conf" class="dropdown-item text-white bg-primary border-bottom">Tourism</a>
                            <a href="campusinfo.php#conf" class="dropdown-item text-white bg-primary border-bottom">Campus
                                Information</a>
                            <a href="#conf" class="dropdown-item text-white bg-primary border-bottom">City
                                Transportation</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#conf" class="nav-link text-white">Sponsorship</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.php#conf" class="nav-link text-white">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
    ?>