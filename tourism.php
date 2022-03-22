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
    <!-- About Mangaluru-->
    <div class=" mt-5 container border rounded shadow pt-4">
        <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-primary">About Mangaluru</h5>
        <hr>
        <p class="sizer text-justify">Mangaluru, is the chief port city of the Indian state of Karnataka. It is located
            about 352 km west of the state capital Bangalore, between the Arabian Sea and the Western Ghats
            mountain range. It is known as the Gateway of Karnataka and the Rome of the East. It is the largest city in the Tulu Nadu
            region of Karnataka. Mangaluru is well connected by air, road and rail. The Bajpe, International airport is around 13 km 
            northeast of Mangaluru city. The city is extensively connected by railways and roadways to all major parts of India.
        </p>
    </div>
    <!--Places to visit in and around Mangaluru-->
    <div class=" mt-5 container border rounded shadow pt-4">
        <h5 class="second-bdr rounded pl-2 font-weight-bold">Places to visit in and around Mangaluru
        </h5>
        <hr>
        <p class="sizer text-justify"><span class="span1 font-weight-bold">Mangaluru</span> offers a lot to its tourists
            from its
            amusement parks, boating
            clubs,zoological parks, museums and art galleries, historic monuments including temples,churches, forts.
            Famous temple towns Udupi, Kolluru, Dharmasthala and Kukke Subrahmanya are within 130km radius from Mangalore.
        </p>
    </div>
    <!--IMAGE BOX-->
    <div class="container border rounded shadow mt-5 p-5">
        <div class="row  d-flex justify-content-between">
            <div class="size border rounded mb-2">
                <img src="img/temple.png" alt="" class="rounded image-size">
            </div>

            <div class="size border rounded mb-2">
                <img src="img/sea.png" alt="" class="rounded image-size">
            </div>
        </div>
    </div>

    <!--DESCRIPTION-->
    <div class=" mt-5 container border rounded shadow pt-4">
        <p class="sizer text-justify"><span class="span1 font-weight-bold">Udupi- </span> It is situated 60Km south of
            Mangaluru. It houses Lord Krishna Temple established by His holiness Madhwacharya a Dwaitha Philonthropist.
            Udupi is nearer to St Mary’s Island.
        </p>
    </div>
    <!--IMAGE BOX-->
    <div class="container border rounded shadow mt-5 p-5">
        <div class="row  d-flex justify-content-between">
            <div class="size border rounded mb-2">
                <img src="img/kollur.png" alt="" class="rounded image-size">
            </div>

            <div class="size border rounded mb-2">
                <img src="img/sea1.png" alt="" class="rounded image-size">
            </div>
        </div>
    </div>

    <!--DESCRIPTION-->
    <div class=" mt-5 container border rounded shadow pt-4">
        <p class="sizer text-justify"><span class="span1 font-weight-bold">Kollur- </span> It is situated at a distance
            of 130 Km from Mangaluru. It houses Mookambika Temple which is a famous pilgrimage site.
        </p>
        <p class="sizer text-justify"><span class="span1 font-weight-bold">Dharmasthala- </span> It is situated 90km
            from Mangaluru. It houses a famous Lord Manjunatha Temple.
        </p>
    </div>
    <!--IMAGE BOX-->
    <div class="container border rounded shadow mt-5 p-5">
        <div class="row  d-flex justify-content-between">
            <div class="size border rounded mb-2">
                <img src="img/temple2.png" alt="" class="rounded image-size">
            </div>

            <div class="size border rounded mb-2">
                <img src="img/temple3.png" alt="" class="rounded image-size">
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
