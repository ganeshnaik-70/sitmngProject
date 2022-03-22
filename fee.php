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


    /*REGISTERATION FEE TABLE FOR WIDE SCREENS*/

    echo '
    <div class="container">
        <br>
        <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Registration Fees</h5>
        <br>
        <table class="table table1">
            <thead>
                <tr class="border">
                    <th class="border font1" rowspan="2">Registration Catagory</th>
                    <th class="border font1" >Indian Participants</th>
                    <th class="border font1" colspan="2">International Participants</th>
                </tr>
                <tr class="border">
                    <th class="border font1 text-danger">Early bird *<br>On or Before 15/4/2022</th>
                    
                    <th class="border font1 text-danger">Early bird **<br>On or Before 15/4/2022</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border font1">Delegates(Without Paper)</td>
                    <td class="border font1">INR 2,000 #</td>
                    
                    <td class="border font1">USD 75</td>
                    
                </tr>
                <tr class="border">
                    <td class="border">Faculty Delegates(Main Author)</td>
                    <td class="border">INR 6,000</td>
                    
                    <td class="border">USD 150</td>
                    
                </tr>
                <tr class="border">
                    <td class="border">Faculty Delegates(co-Author(s)</td>
                    <td class="border">INR 3,000</td>
                    
                    <td class="border">USD 75</td>
                    
                </tr>
                <tr class="border">
                    <td class="border">Additional paper(s)</td>
                    <td class="border">INR 3,500</td>
                    
                    <td class="border">USD 100</td>
                    
                </tr>
                <tr class="border">
                    <td class="border">Students/Research Scholars</td>
                    <td class="border">INR 5,000</td>
                    
                    <td class="border">USD 100</td>
                    
                </tr>
                <tr class="border">
                    <td class="border">Industry Delegates</td>
                    <td class="border">INR 8,000</td>
                    
                    <td class="border">USD 250</td>
                    
                </tr>
            </tbody>
        </table>
	    <div class="container">
            <p>
	    		<table class="table table1"> 
	    			<tr class="border">
                        		<td class="border font10 text-danger">* INR 500 & ** USD 25 extra after 15/04/2022</td>
                        		<td class="border font10 text-danger"># INR 750 for student delegates</td>
                    		</tr>
	    		</table>
	    	</p>
        </div> 

        ';


        /*REGISTERATION FEE TABLE FOR MOBILE SCREENS - INDIAN PARTICIPANTS*/

        echo '
        <table class="table table2">
            <thead>
                <tr class="border">
                    <th class="border text-center bg-light font5" colspan="3">Indian Participants</th>
                </tr>
                <tr class="border">
                    <th class="border font10">Registration Catagory</th>
                    <th class="border font10 text-danger">Early bird *<br>(upto 30/6/2020)</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border font10">Delegates (Without Paper)</td>
                    <td class="border font10">INR 2,000 #</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Faculty Delegates (Main Author)</td>
                    <td class="border font10">INR 6,000</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Faculty Delegates (co-Author(s)</td>
                    <td class="border font10">INR 3,000</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Additional paper(s)</td>
                    <td class="border font10">INR 3,500</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Students(PG)/ Research Scholar(s)</td>
                    <td class="border font10">INR 5,000</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Industry Delegates</td>
                    <td class="border font10">INR 8,000</td>
                    
                </tr>
                <tr>
                    		<td class="border font10 text-danger">* INR 500 extra after 30/06/2020</td>
                    		<td class="border font10 text-danger" colsapan="2"># INR 750 for student delegates</td>
                		</tr>
		    </tbody>
			
        </table>
        ';
        

        /*REGISTERATION FEE TABLE FOR MOBILE SCREENS - INTERNATIONAL PARTICIPANTS*/

        echo '
        <table class="table table3">
            <thead>
                <tr class="border">
                    <th class="border text-center font5 bg-light" colspan="3">International Participants</th>
                </tr>
                <tr class="border">
                    <th class="border font10">Registration Catagory</th>
                    <th class="border font10 text-danger">Early bird **<br>(upto 30/6/2020)</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border font10">Delegates (Without Paper)</td>
                    <td class="border font10">USD 75</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Faculty Delegates (Main Author)</td>
                    <td class="border font10">USD 150</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Faculty Delegates (co-Author(s)</td>
                    <td class="border font10">USD 75</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Additional paper(s)</td>
                    <td class="border font10">USD 100</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Students(PG)/ Research Scholar(s)</td>
                    <td class="border font10">USD 100</td>
                    
                </tr>
                <tr class="border">
                    <td class="border font10">Industry Delegates</td>
                    <td class="border font10">USD 250</td>
                    
                </tr>
		        <tr>
                    <td  colspan="2" class="border font10 text-danger">** USD 25 extra after 30/06/2020</td>
                    		
                	</tr>
            </tbody>
        </table>
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
