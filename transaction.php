<?php
include('database/include.php');
if (!isset($_SESSION['accessApprove'])) {
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction Page</title>
    <style>
        /* ***************datatable css*****************  */

        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: auto !important;
        }

        th {
            text-align: center !important;
            padding-left: 0.5rem;
        }


        td {
            text-align: center;
            word-wrap: break-word !important;
            min-width: 200px !important;
            border-bottom: 2px solid #f2f2f2;
            align-items: center;
        }

        td.action {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        td:hover {
            background-color: #b6d5f5;
        }

        #table-wrapper {
            position: relative;
        }

        #table-scroll {
            height: 590px;
            overflow: auto;
            margin-top: 20px;
        }

        #table-wrapper table {
            width: 100%;
            padding-top: 1rem;
        }
    </style>
    <?php include 'meta.php' ?>
    <style>
         body {
            background: #39846b8c;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    
    <center class="mt-5"><h2>List Of All Transaction</h2></center>
    <div id="table-wrapper" class="container">
        <div class="main mt-5" id="table-scroll"  style="height: auto;margin-bottom: 5rem;">
            <table id="myTable1" class="myTable">
                <thead style="background-color: #003975; color:white">
                    <tr>
                        <th scope="col" class="text-center">Sr No.</th>
                        <th scope="col" class="text-center">Sold By</th>
                        <th scope="col" class="text-center">Buyer</th>
                        <th scope="col" class="text-center">Product</th>
                        <th scope="col" class="text-center">Pay Out Amount</th>
                        <th scope="col" class="text-center">Active</th>
                        <th scope="col" class="text-center">Deactive</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `divine_transaction`";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $srno = 1;

                    foreach ($data as $transaction) {

                        $searchBuyQuery = "SELECT * FROM `customer_master` WHERE `customer_id` = ?";
                        $stmt1 = $conn->prepare($searchBuyQuery);
                        $stmt1->execute([$transaction['sold_by_id']]);
                        $soldBy = $stmt1->fetch(PDO::FETCH_ASSOC);
                        $soldByName = $soldBy['customer_name'];

                        $searchSoldQuery = "SELECT * FROM `customer_master` WHERE `customer_id` = ?";
                        $stmt2 = $conn->prepare($searchSoldQuery);
                        $stmt2->execute([$transaction['pay_to_id']]);
                        $buyer = $stmt2->fetch(PDO::FETCH_ASSOC);
                        $buyerName = $buyer['customer_name'];

                        $searchProductQuery = "SELECT * FROM `product_master` WHERE `product_id` = ?";
                        $stmt3 = $conn->prepare($searchProductQuery);
                        $stmt3->execute([$transaction['product_id']]);
                        $product = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $productName = $product['product_name'];

                        if ($transaction['is_active'] == 1) {
                            $transactionStatus = "#b8f5b6";
                        } else {
                            $transactionStatus = "#f5b6b6";
                        }

                        echo "<tr style='background: " . $transactionStatus . "'>
                        <th scope='row'>" . $srno . "</th>
                        <td>" . $soldByName . "</td>
                        <td>" . $buyerName . "</td>
                        <td>" . $productName . "</td>
                        <td>" . $transaction['pay_out_amount'] . "</td>
                        <td><form action='./backend/udateTransaction.php' id='activeTr' method='post'> <input type='hidden' name='transactionIdActive' value='" . $transaction['transaction_id'] . "'>";
                            
                        ?>
                         

                            <input name='activeTransaction' value='Active' type='submit'
                             class='btn text-center my-3 bg-success text-light' onclick="return confirm('Are you sure want to active transaction ?');"/> </form></td>
                        <?php
                            echo "
                            <td><form action='./backend/udateTransaction.php' method='post' id='deactiveTr'> <input type='hidden' name='transactionIdDeactive' value='" . $transaction['transaction_id'] . "'>";
                            ?> 
                            <input name = "deactiveTransaction" value = "Deactive" type = "submit" class = "btn text-center my-3 bg-danger text-light" onclick="return confirm('Are you sure want to deactive transaction ?');"/>
                            <?php
                            echo "</form></td></tr>";
                        $srno++;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <?php include 'footer.php' ?>
    <script>
        $(document).ready(function() {
            $('#myTable1').DataTable();
        });
    
    function delFunction(){
        let text;
        let user = prompt("Please eneter DELETE");
        if(user == "DELETE"){
            text = "DELETE";
            document.getElementById("userInfo").value = text;
            document.getElementById("delUser").submit();
        }
        else{
            text = "";
            alert("User Not Deleted");
            return false;
        }
    }

    </script>
</body>
</html>