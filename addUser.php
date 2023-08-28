<?php
include('database/include.php');
if (!isset($_SESSION['accessApprove'])) {
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User</title>
    <style>
         body {
            background: #39846b8c !important;
        }

        input,select,textarea {
            background: #1525624f !important;
            color: white !important;
            outline: 1px solid black !important;
        }

        .form-control {
            border-color: #4b5454 !important;
            color: white;
        }

        table {
            border-collapse: collapse;
            table-layout: fixed;
        }

        th {
            text-align: center !important;
        }


        td {
            text-align: center;
            word-wrap: break-word !important;
            width: 200px !important;
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
</head>
<body>
    <?php include 'navbar.php' ?>
    
    <center class="mt-5"><h2>Add Data</h2></center>
    <form action="backend/addUserDetails.php" method="post"  enctype="multipart/form-data">
        <div id="page1" class="page container">
            <div class="col-md-10 mx-auto my-5">
                <div class="px-3 mb-4 pt-3 apply" style="border: 1px solid #003865">
                        <div class="row">
                            <div class="headingsall col-md-4">
                                <label for="name" class="col-form-label">Account Holder Name :</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name" pattern="[a-zA-Z][a-zA-Z\s]*" title="Name contains only character(s)." maxlength="50" />
                            </div>
                            <div class="headingsall col-md-4">
                                <label for="email" class="col-form-label">Email :</label>
                                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Enter valid Email Id." class="form-control" maxlength="50" id="email" placeholder="Enter Email ID">
                            </div>
                            <div class="headingsall col-md-4">
                                <label for="usr" class="col-form-label">Contact :</label>
                                <input type="text" name="contact" class="form-control" id="contact"  title="Enter valid Contact No." maxlength="30" placeholder="Enter Contact No">
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-6 my-2">
                                <label for="accNumber" class="col-form-label">Account Number :</label>
                                <input type="text" class="form-control" name="accNumber" id="accNumber" maxlength="30" />
                            </div>
                            <div class="headingsall col-md-6 my-2">
                                <label for="paymentType" class="col-form-label">Payment Type :</label>
                                <input type="text" name="paymentType" required class="form-control" maxlength="50" id="paymentType" placeholder="SB">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" headingsall col-md-6 my-2">
                                <label for="lastTrNo" class="col-form-label">Last Transaction Number:</label>
                                <input type="text" name="lastTrNo" class="form-control" id="lastTrNo">
                            </div>
                            <div class="headingsall col-md-6 my-2">
                                <label for="transcation" class="col-form-label">Last Transacation Date:</label><br>
                                <?php $bmyear=(int)date("Y"); $bmyear=(String)$bmyear; $bmyear=$bmyear.'-'.date("m").'-'.date("d");  ?>
                                <input type="date" max="<?php echo $bmyear; ?>"  class="form-control" id="transcation" name="transcationDate" style="width: inherit;color: #495057; border: 1px solid #ced4da;"  />
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-12 my-2">
                                <label for="email" class="col-form-label">Address: </label><br>
                                <textarea id="res" class="form-control" name="address" required maxlength="200" style="width: inherit;color: #495057; border: 1px solid #ced4da;" placeholder="Enter Address"></textarea>
                            </div>
                        </div>


                        <div class="row">
                            <div class="headingsall col-md-6 my-2">
                                <label for="pincode" class="col-form-label">Pincode :</label>
                                <input type="text" class="form-control" placeholder="zipcode" name="pincode" id="pincode" title="pincode only have numbers" maxlength="10" />
                            </div>
                            <div class="headingsall col-md-6 my-2">
                                <label for="payout" class="col-form-label">Payout :</label>
                                <input type="text" class="form-control" placeholder="Ex. 0" name="payout" id="payout" title="enter valid payout" maxlength="30" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-4 my-2">
                                <label for="payto1" class="col-form-label">Pay to Id 1:</label>
                                <input type="text" class="form-control" placeholder="ex. 11" name="payto1" id="payto1" maxlength="30" />
                            </div>
                            <div class="headingsall col-md-4 my-2">
                                <label for="payto2" class="col-form-label">Pay to Id 2:</label>
                                <input type="text" class="form-control" placeholder="ex. 5" name="payto2" id="payto2" maxlength="30" />
                            </div>
                            <div class="headingsall col-md-4 my-2">
                                <label for="typeofnode" class="col-form-label">Type of Node</label>
                                <input type="text" class="form-control" placeholder="Ex. X_1" name="typeofnode" id="typeofnode" maxlength="30" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-6 my-2">
                                <label for="parentId" class="col-form-label">Parent Id :</label>
                                <input type="text" class="form-control" placeholder="Ex. 5" name="parentId" id="parentId" maxlength="10" />
                            </div>
                            <div class="headingsall col-md-6 my-2">
                                <label for="isActive" class="col-form-label">Is Active :</label>
                                <select name="isActive" id="isActive" class="form-control">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-5 my-2">
                                <label for="accountBranch" class="col-form-label">Account Branch Name:</label>
                                <input type="text" class="form-control" placeholder="branch name" name="accountBranch" id="accountBranch" maxlength="50" />
                            </div>
                            <div class="headingsall col-md-3 my-2">
                                <label for="accountIFSC" class="col-form-label">Account IFSC :</label>
                                <input type="text" class="form-control" placeholder="ifsc code" name="accountIFSC" id="accountIFSC" maxlength="30" />
                            </div>
                            <div class="headingsall col-md-4 my-2">
                                <label for="accountUPINo" class="col-form-label">Account UPI Number :</label>
                                <input type="text" class="form-control" placeholder="upi number" name="accountUPINo" id="accountUPINo" maxlength="30" />
                            </div>
                        </div>

                         <div class="row">
                            <div class="headingsall col-md-4 my-2">
                                <label for="aadharcardname" class="col-form-label">Aadhar Card Name:</label>
                                <input type="text" class="form-control" placeholder="aadhar name" name="aadharcardname" id="aadharcardname" maxlength="50" />
                            </div>
                            <div class="headingsall col-md-4 my-2">
                                <label for="aadharcardno" class="col-form-label">Aadhar Card No. :</label>
                                <input type="text" class="form-control" placeholder="aadhar number" name="aadharcardno" id="aadharcardno" maxlength="30" />
                            </div>
                            <div class="headingsall col-md-4 my-2">
                                <label for="pancardno" class="col-form-label">Pan Card No. :</label>
                                <input type="text" class="form-control" placeholder="pan number" name="pancardno" id="pancardno" maxlength="30" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-6 my-2">
                                <label for="passbooklink" class="col-form-label">Passbook Link:</label>
                                <input type="text" class="form-control" placeholder="link of passbook" name="passbooklink" id="passbooklink" />
                            </div>
                            <div class="headingsall col-md-6 my-2">
                                <label for="aadharcardlink" class="col-form-label">Aadhar Card Link :</label>
                                <input type="text" class="form-control" placeholder="link of aadhar card" name="aadharcardlink" id="aadharcardlink" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="headingsall col-md-6 my-2">
                                <label for="pancardlink" class="col-form-label">Pan Card Link :</label>
                                <input type="text" class="form-control" placeholder="link of pancard" name="pancardlink" id="pancardlink" />
                            </div>
                            <div class="headingsall col-md-6 my-2">
                                <label for="remark" class="col-form-label">Remark :</label>
                                <input type="text" class="form-control" placeholder="Remark if any" name="remark" id="remark" />
                            </div>
                        </div>

                        <br>
                        <center id="submitBtn" > <button type="submit" class="btn btn-success btn-md py-2 px-3 fw-bold" id="addDetailbtn" name="addUserDetails" > Submit </button></center>
                        <br>

                </div>
            </div>
        </div>
    </form>

    <?php include 'footer.php' ?>
</body>
</html>