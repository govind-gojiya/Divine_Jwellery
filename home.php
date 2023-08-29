<?php
include('database/include.php');
if (!isset($_SESSION['accessApprove'])) {
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
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
    
    <center class="mt-5"><h2>List Of All Entries</h2></center>
    <div id="table-wrapper" class="container">
        <div class="main mt-5" id="table-scroll"  style="height: auto;margin-bottom: 5rem;">
            <table id="myTable1" class="myTable">
                <thead style="background-color: #003975; color:white">
                    <tr>
                        <th scope="col" class="text-center">Sr No.</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Mobile</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Edit</th>
                        <th scope="col" class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `divine_jwellery_payout_data` where `isactive` = '0'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $srno = 1;

                    foreach ($data as $user) {
                        echo "<tr>
                        <th scope='row'>" . $srno . "</th>
                        <td>" . $user['AccountHolderName'] . "</td>
                        <td>" . $user['contact'] . "</td>
                        <td>" . $user['EmailId'] . "</td>
                        <td><form action='./backend/edit_user.php' id='editUser' method='post'> <input type='hidden' name='editid' value='" . $user['id'] . "'>";
                            
                        ?>
                         

                            <input name='EditUser' value='Edit' type='submit'
                             class='btn text-center my-3 bg-success text-light'/> </form></td>
                        <?php
                            echo "
                            <td><form action='./backend/edit_user.php' method='post' id='delUser'> <input type='hidden' name='deleteid' value='" . $user['id'] . "'>";
                            ?> 
                            <input name = "hiddenMsg" 
                            type="hidden" 
                            id="userInfo"
                            >
                            <input name="Delete" onclick="return confirm('Are you sure want to delete account?');" value="Delete" type="submit" class="btn text-center my-3 text-light bg-danger" /> 
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
            $('#myTable1').DataTable({
                responsive: true,
            });
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