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


    /*PAYMENT*/

    echo '
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-2 shadow mx-1 size pt-4 border rounded">
                <h5 class="first-bdr rounded pl-2 ml-2 font-weight-bold mb-3 text-dark">Demand Draft (DD):</h5>
                <hr>
                <p class="pl-4 font9">In favor of<br><b>‘SIT CONFERENCE’</b> payable at Adyar, Mangaluru<br>Karnataka State,
                    India
                    <br>ETSEM-2020 on the back-side of DD along with paper ID </p>
            </div>

            <div class="mt-2 shadow mx-1 size pt-4 border rounded">
                <h5 class="first-bdr rounded pl-2 ml-2 font-weight-bold mb-3 text-dark">Online Transfer </h5>
                <hr>
                <p class="pl-4 font9"><b>A/C Name:</b> SIT CONFERENCE<br>
                    <b>A/C No: 60354927218</b><br>
                    <b>Bank: Bank of Maharashtra</b><br>
                    <b>IFSC: MAHB0001451</b><br>
                    <b>MICR code: 575014003</b><br>
                    <b>Branch: Adyar, Mangaluru(1451)</b><br>
                </p>
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
