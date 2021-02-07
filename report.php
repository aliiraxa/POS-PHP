<?php
include_once "classes/session.php";
include_once "classes/database.php";


Session::CheckSession();
if ($_GET['date']==NULL ) {
    echo "<script>window.location='NewReport.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border:1px solid black;
        }
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);

        body{
            font-family: 'Source Sans Pro';
        }

        .container{
            width: 400px;
            margin: 0 auto;
        }

        a.print{
            text-decoration: none;
            display: inline-block;
            width: 75px;
            margin: 20px auto;
            background: #dc143c;
            background: linear-gradient(#e3647e, #DC143C);
            text-align: center;
            color: #fff;
            padding: 3px 6px;
            border-radius: 3px;
            border: 1px solid #e3647e;
        }

        i.fa.fa-print{
            margin-right: 5px;
        }
    </style>
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="text-align: center">
    <input id="printpagebutton" type="button" value="Print Report"  onclick="printpage()"/>
    <h2>Sales Report</h2>
    <?php
    $date=$_GET['date'];
    $eDate=$_GET['eDate'];
    ?>
    <p><?php if($eDate==null){ $ydate=date_create($date); $xdate=date_format($ydate,"m/d/y"); echo "Starting From $xdate To $xdate";}else { $ydate=date_create($date); $xdate=date_format($ydate,"m/d/y"); $idate=date_create($eDate); $uDate=date_format($idate,"m/d/y"); echo "Starting From $xdate To $uDate";}  ?> </p>
</div>
<table>
    <tr>
        <th>Product</th>
        <th>Order Date</th>
    </tr>

</table>

<script>
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden'
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>

</body>
</html>
