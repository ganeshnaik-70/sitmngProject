<!DOCTYPE html>
<html lang="en">

<?php
    /*HEAD*/
    include 'include/head.php';
?>


<body>
<?php
    /*HEADER*/
    include 'include/header.php';

    /*NAVIGATION BAR*/
    include 'include/navbar.php';

    echo '

    <!--TRACKS-->


    <div class="container shadow text-dark border rounded text-center">
        <h3 class="text-center text-black-70 font-weight-bold font7 p-2">TRACKS TO BE COVERED</h3>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 mx-1 size shadow pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track1: Mechanical Engineering</h5>
                <hr>
                <ul>
                    <li>Non-conventional Energy sources</li>
                    <li>Material Science and Advanced Manufacturing </li>
                    <li>Fluid Dynamics, Heat Transfer, Applied Thermal Engineering</li>
                    <li>Machine Design, Vibrations and Applications</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 2: Automobile Engineering</h5>
                <hr>
                <ul>
                    <li>Bio-fuels and Alternative fuels</li>
                    <li>IC Engine and combustion</li>
                    <li>Automobile Engineering and Applications</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 3: Aeronautical Engineering</h5>
                <hr>
                <ul>
                    <li>Aero engines and combustion</li>
                    <li>Aircraft Propulsion</li>
                    <li>Navigation, stability and control</li>
                    <li>Aeronautics</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 4: Marine Engineering</h5>
                <hr>
                <ul>
                    <li>Marine materials and Applications</li>
                    <li>Marine Engines</li>
                    <li>Sea pollution and control </li>
                </ul>
            </div>
        </div>
    </div>
    ';

    /*USEFULL LINKS*/
    include 'include/section.php';

     /*FOOTER*/
     include 'include/footer.php';
?>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
