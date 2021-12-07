<!-- 1.0. Single Payment Modal-->
<div class="modal fade" id="singlePayment" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Initate Single Payment</strong></h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>What wallet are you paying into?</h6>
              
                <div class="d-grid gap-2 mt-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#sendsampay">Sampay Account</button>
                </div>
              
                <div class="d-grid gap-2 mt-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#sendlocalbank">Local Bank</button>
                </div>
              
                <div class="d-grid gap-2 mt-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#sendsampaybusiness">Sampay Business Account</button>
                </div>
              
                <div class="d-grid gap-2 my-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#goMobileCashout">Mobile Money Account</button>
                </div>
            </div>
            <!--<div class="modal-footer">-->
            <!--    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
            <!--    <button type="button" class="btn btn-primary">Save changes</button>-->
            <!--</div>-->
        </div>
    </div>
</div><!-- /Single Payment Modal -->

<!-- 1.1. Send to Sampay Account Modal -->
<div class="modal fade" id="sendsampay" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>You are paying to a Sampay Account</strong></h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Send to Sampay Account Form -->
                <form class="row g-3" method="POST" action="sampayforms/initiate_sampay.php" enctype="multipart/form-data">
                    <input type="hidden" name="companyaccount" value="<?php //echo $acc_no ?>" required readonly>
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                    <input type="hidden" name="paymenttype" value="<?php //echo $paymenttype ?>" required readonly>
                    <input type="hidden" name="sendsamid" value="<?php //echo $sendsamid ?>" required readonly>
                    <input type="hidden" name="sendsampay" value="<?php //echo true or false ?>" required readonly>
                  
                    <div class="col-12 mb-1">
                        <label for="receipient Number" class="form-label">Recepient Number</label>
                        <input class="form-control shadow-none" type="text" name="recepient" id="recipientNumber" value="" required placeholder="+26**********">
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="receipient Number" class="form-label">Amount</label>
                        <input class="form-control" type="number" name="amount" id="jsamount" value="" min="0.01" max="" step="any" onkeyup="doprice()" autocomplete="off" required>
                        <small><p class="text-muted">You will be charged K <span id="pricecharge"></span></p></small>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <!--<label class="form-label">Select Category</label>-->
                          <select class="form-select" name="transaction" aria-label="">
                            <option selected>What is this transaction for?</option>
                            <option value="salary">Salary</option>
                            <option value="loan">Loan</option>
                            <option value="other">Other</option>
                          </select>
                    </div>
                    
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#singlePayment">Back</button>
                        <button type="submit" class="btn btn-success shadow-none" name="masspay">Send Money</button>
                    </div>
                </form><!-- End Send to Sampay Account Form -->
                
            </div>
        </div>
    </div>
</div><!-- Send to Sampay Account Modal -->

<!-- 1.2. Send to Local Bank Account Modal -->
<div class="modal fade" id="sendlocalbank" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>You are paying to a Local Bank Account</strong></h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Send to Sampay Account Form --> 
                <form class="row g-3" method="POST" action="sampayforms/initiate_local_bank.php">   
                    <div class="col-12 mb-1">
                        <label class="form-label">Purpose of payment</label>
                          <select class="form-select" name="transaction" aria-label="">  
                            <option value="salary" selected>Salary</option>
                            <option value="other">Other</option>
                          </select>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="amount" class="form-label">Amount</label>
                        <input class="form-control" type="number" name="amount" id="jsamount" value="" placeholder="Enter Amount" min="0.01" max="" step="any" onkeyup="doprice2()" autocomplete="off" required>
                        <small><p class="text-muted">You will be charged K <span id="pricecharge2"></span></p></small>
                    </div>
                  
                    <div class="col-12 mb-1 mt-0">
                        <label for="nameOnCard" class="form-label">Name on Account</label>
                        <input class="form-control" type="text" name="accountname" id="name" value="" placeholder="Enter Name" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="bankName" class="form-label">Bank Name</label>
                        <input class="form-control" type="text" name="bankname" id="bankname" value="" placeholder="Enter Bank Name" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="branchName" class="form-label">Branch Name</label>
                        <input class="form-control" type="text" name="branchname" id="branchname" value="" placeholder="Enter Bank Name" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="accountNumber" class="form-label">Account Number</label>
                        <input class="form-control" type="text" name="accountnumber" id="accountnumber" value="" placeholder="Enter Account Number" required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label for="accountNumber" class="form-label">Sort Code</label>
                        <input class="form-control" type="text" name="sortcode" id="sortcode" value="" placeholder="Enter Bank Sort Code" required>
                    </div>
                    
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                    <input type="hidden" name="payid" value="<?php //echo $payid ?>" required readonly>
                    <input type="hidden" name="send2bank" value="<?php //yes or no ?>" required readonly>
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>" required readonly>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#singlePayment">Back</button>
                        <button type="submit" class="btn btn-success shadow-none" name="masspay">Send Money</button>
                    </div>
                </form><!-- Send to Sampay Account Form -->
            </div>
        </div>
    </div>
</div><!-- End Send to Local Bank Account Modal -->


<!-- 1.3. Send to Sampay Business Account Modal -->
<div class="modal fade" id="sendsampaybusiness" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>You are paying into a Sampay Business Account</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Send to Sampay Bussiness Account Form -->
                <form class="row g-3" method="POST" action="sampayforms/initiate_payment.php" enctype="multipart/form-data">
                    <input type="hidden" name="companyaccount" value="<?php //echo $acc_no ?>" required readonly>
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                    <input type="hidden" name="paymenttype" value="<?php //echo $paymenttype ?>" required readonly>
                    <input type="hidden" name="sendsamid" value="<?php //echo $sendsamid ?>" required readonly>
                    <input type="hidden" name="sendsampaybusiness" value="<?php //echo true or false ?>" required readonly>
                    <input type="hidden" name="sendingaccount" value="<?php //echo sendingaccount ?>" required readonly>
                  
                    <div class="col-12 mb-1">
                        <label for="receipient Number" class="form-label">Recepient Number</label>
                        <input class="form-control" type="text" name="recepient" id="recipientNumber" value="" required placeholder="+26**********">
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="receipient Number" class="form-label">Amount</label>
                        <input class="form-control" type="number" name="amount" id="jsamount3" value="" placeholder="Enter Amount" min="0.01" max="" step="any" onkeyup="doprice3()" autocomplete="off" required>
                        <small><p class="text-muted">You will be charged K <span id="pricecharge3"></span></p></small>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <!--<label class="form-label">Select Category</label>-->
                          <select class="form-select" name="transaction" aria-label="">
                            <option selected>What is this transaction for?</option>
                            <option value="salary">Salary</option>
                            <option value="loan">Loan</option>
                            <option value="other">Other</option>
                          </select>
                    </div>
                    
                    <script>
                        function doprice3() {
                            var amount = document.getElementById("jsamount3").value;
                            var floatAmount = parseFloat(amount);
                            var charge = parseFloat(floatAmount * 0.01);
                            var z = parseFloat(0 + y);
                            
                            if (z + 0 > 30) {
                                var c = 30;
                                document.getElementById("pricecharge3").innerHTML = c;
                            } else {
                                document.getElementById("pricecharge3").innerHTML = z;
                            }
                        }
                    </script>
                    
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#singlePayment">Back</button>
                        <button type="submit" class="btn btn-success shadow-none" name="masspay">Send Money</button>
                    </div>
                </form><!-- End Send to Sampay Bussiness Account Form -->
                
            </div>
        </div>
    </div>
</div><!-- Send to Sampay Business Account Modal -->

<!-- 1.4. Send to Mobile Money Account Modal -->

<!-- 2. Bulk Payment Modal -->
<div class="modal fade" id="bulkPayment" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Make Bulk Payment</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Bulk Payment Form -->
                <form class="row g-3" method="POST" action="sampayforms/bulk_payment.php" enctype="multipart/form-data">
                    <input class="form-control" type="hidden" name="companyaccount" placeholder="Sampay Account Number" value="<?php //echo $acc_no ?>" required readonly>
                    <a target="_blank" href="https://samafricaonline.com/sam_pay/public/businesshome">Download template</a>
                  
                    <div class="col-12 mb-1">
                        <label class="form-label">Select Category</label>
                          <select name="transaction" class="form-select" aria-label="">
                            <option value="salary" selected>Salary</option>
                            <option value="other">Other</option>
                          </select>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label for="fileUpload" class="form-label">Choose File</label>
                        <input class="form-control" name="upload" type="file" id="formFile">
                    </div>
                    
                    <input type="hidden" name="_token" value="<?php //echo $token_no ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="masspay">Upload Sheet</button>
                    </div>
                </form><!-- End Bulk Payment Form -->
                
            </div>
        </div>
    </div>
</div><!-- Bulk Payment Modal -->

<!-- 3.0. International Payment Modal -->
<div class="modal fade" id="internationalPayment" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>International Payment</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- International Payment Form -->
                <form class="row g-3" method="POST" action="sampayforms/initiate_international.php" enctype="multipart/form-data">
                  
                    <div class="col-12 mb-1 mt-0">
                        <label for="beneficiaryName" class="form-label">Beneficiary Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="" placeholder="Enter Name" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="amount" class="form-label">Amount</label>
                        <input class="form-control" type="number" name="amount" id="amount" value="" placeholder="Enter Amount" min="0.01" max="" step="any" onkeyup="doprice2()" autocomplete="off" required>
                        <small><p class="text-muted mb-0">You will be charged K <span id="pricecharge2"></span></p></small>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label class="form-label">Currency</label>
                          <select class="form-select" name="currency" aria-label="">
                            <option selected>Select Currency</option>
                            <option value="ZMW">ZMW</option>
                            <option value="USD">USD</option>
                          </select>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="bankName" class="form-label">Bank Name</label>
                        <input class="form-control" type="text" name="bankname" id="bankname" value="" placeholder="Enter Bank Name" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="branchName" class="form-label">Swift Code</label>
                        <input class="form-control" type="text" name="swiftcode" id="swiftcode" value="" placeholder="Enter Swift Code" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="accountNumber" class="form-label">Account Number</label>
                        <input class="form-control" type="text" name="bankaccount" id="accountnumber" value="" placeholder="Enter Account Number" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="branchName" class="form-label">Sort Code</label>
                        <input class="form-control" type="text" name="sortcode" id="sortcode" value="" placeholder="Enter Sort Code" required>
                    </div>
                    
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                    <input type="hidden" name="payid" value="<?php //echo $payid ?>" required readonly>
                    <input type="hidden" name="send2bank" value="<?php //yes or no ?>" required readonly>
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>" required readonly>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#singlePayment">Back</button>
                        <button type="submit" class="btn btn-success shadow-none" name="masspay">Send Money</button>
                    </div>
                </form><!-- Send to Sampay Account Form -->
                
            </div>
        </div>
    </div>
</div><!-- End Send to Local Bank Account Modal -->

<!-- 4.0  Add New Vendor Modal -->
<div class="modal fade" id="addNewVendor" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Add New Vendor</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Send to Sampay Account Form -->
                <form class="row g-3" method="POST" action="sampayforms/add_new_vendor.php" enctype="multipart/form-data">
                    <div class="col-12 mb-1">
                        <label for="vendorNumber" class="form-label">Vendor Name</label>
                        <input class="form-control" type="text" name="vendorname" id="vendorName" value="" required placeholder="Enter Vendors Name">
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label class="form-label">Account Type</label>
                          <select class="form-select" name="transaction" aria-label="">
                            <option value="salary" selected>--Select Type--</option>
                            <option value="Airtel">Airtel</option>
                            <option value="MTN">MTN</option>
                            <option value="Zamtel">Zamtel</option>
                          </select>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="vendorAccountNumber" class="form-label">Vendor Account (09/07********)</label>
                        <input class="form-control" type="text" name="vendoraccount" id="vendorAccountNumber" value="" placeholder="Enter Vendors Account Number" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="vendorcharge" class="form-label">Vendor Charge (%)</label>
                        <input class="form-control" type="number" name="vendorcharge" id="vendorCharge" value="" placeholder="Enter Percent Share" min="0.01" max="" step="any" onkeyup="doprice2()" autocomplete="off" required>
                        <!--<p class="text-muted">You will be charged K<span id="pricecharge2"></span></p>-->
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label for="vendorId" class="form-label">Bank Name</label>
                        <input class="form-control" type="text" name="bankname" id="bankName" value="" placeholder="Enter Bank Name" required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label for="vendorId" class="form-label">Vendor ID</label>
                        <input class="form-control" type="text" name="vendorid" id="vendorId" value="" placeholder="Enter Unique Vendor ID" required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label class="form-label">Payment Type</label>
                          <select class="form-select" name="transaction_two" aria-label="">
                            <option value="salary" selected>--Select Type--</option>
                            <option value="Batch Payment">Batch Payment</option>
                            <option value="Instant Payment">Instant Payment</option>
                          </select>
                    </div>
                    
                    <input type="hidden" name="companyaccount" value="<?php //echo $acc_no ?>" required readonly>
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>" required readonly>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success shadow-none" name="add_vendor">Add Vendor</button>
                    </div>
                </form><!-- End General Form Elements -->
                
            </div>
        </div>
    </div>
</div><!-- End Add New Vendor Modal -->

<!-- 5.0  Bank Deposits Modal -->
<div class="modal fade" id="bankDeposits" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Load your Sampay Using Bank Deposits</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please note that when you use this option, it may take up to 24 Hours for funds to reflect on your wallet.</p>
              
                <div class="d-grid gap-2 mt-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#fnbBankDeposit">FNB</button>
                </div>
              
                <div class="d-grid gap-2 mt-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#zanacoBankDeposit">ZANACO</button>
                </div>
              
                <div class="d-grid gap-2 mt-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#ubaBankDeposit">UBA</button>
                </div>
              
                <div class="d-grid gap-2 my-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#absaBankDeposit">Absa</button>
                </div>
              
                <div class="d-grid gap-2 my-3 w-75 mx-auto">
                  <button class="btn theme-btn" type="button" data-bs-toggle="modal" data-bs-target="#atlasmaraBankDeposit">Atlas Mara</button>
                </div>
                <hr>
                <p>Have you deposited already? Upload your Proof of Payment <a href="" data-bs-toggle="modal" data-bs-target="#depositPOP">here</a></p>
            </div>
        </div>
    </div>
</div><!-- Bank Deposits Modal -->

<!-- 5.1. FNB Bank Deposit Modal -->
<div class="modal fade" id="fnbBankDeposit" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Bank Deposit: FNB</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please note that when you use this option, it may take up to 24 Hours for funds to reflect on your wallet.</p>
                
                <!-- FNB Table -->
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Bank</th>
                            <td>FNB</td>
                        </tr>
                        <tr>
                            <th>A/C Number</th>
                            <td>62868203185</td>
                        </tr>
                        <tr>
                            <th>Currency</th>
                            <td>ZMW</td>
                        </tr>
                        <tr>
                            <th>Branch Name</th>
                            <td>FIRNZMLX</td>
                        </tr>
                        <tr>
                            <th>Branch Number</th>
                            <td>260035</td>
                        </tr>
                        <tr>
                            <th>Swift Code</th>
                            <td>FIRNZMLX</td>
                        </tr>
                        <tr>
                            <th>Details Required</th>
                            <td>Sampay Acc No: (+260********) <br/> Beneficiary Details: SampayLimited</td>
                        </tr>
                    </tbody>
                </table>
              <!-- FNB Example -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#bankDeposits">Back</button>
                <!--<button type="submit" class="btn theme-btn" name="upload_pop">Upload POP</button>-->
            </div>
        </div>
    </div>
</div><!-- FNB Bank Deposit Modal -->

<!-- 5.2. ZANACO Bank Deposit Modal -->
<div class="modal fade" id="zanacoBankDeposit" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Bank Deposit: ZANACO</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please note that when you use this option, it may take up to 24 Hours for funds to reflect on your wallet.</p>
                
                <!-- FNB Table -->
                <table class="table">
                    <tbody> 
                        <tr>
                            <th>Bank</th>
                            <td>ZANACO</td>
                        </tr>
                        <tr>
                            <th>A/C Number</th>
                            <td>5763022500191</td>
                        </tr>
                        <tr>
                            <th>Currency</th>
                            <td>ZMW</td>
                        </tr>
                        <tr>
                            <th>Branch Name</th>
                            <td>Ndola Business Center</td>
                        </tr>
                        <tr>
                            <th>Branch Code</th>
                            <td>042</td>
                        </tr>
                        <tr>
                            <th>Sort Code</th>
                            <td>010142</td>
                        </tr>
                        <tr>
                            <th>Swift Code</th>
                            <td>ZNCOZMU</td>
                        </tr>
                        <tr>
                            <th>Details Required</th>
                            <td>Depositor: Sampay Account No.(+260********) <br/> Beneficiary Details: SampayLimited</td>
                        </tr>
                    </tbody>
                </table>
              <!-- ZANACO Table -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#bankDeposits">Back</button>
                <!--<button type="submit" class="btn theme-btn" name="upload_pop">Upload POP</button>-->
            </div>
        </div>
    </div>
</div><!-- END ZANACO Bank Deposit Modal -->

<!-- 5.3. UBA Bank Deposit Modal -->
<div class="modal fade" id="ubaBankDeposit" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Bank Deposit: UBA</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please note that when you use this option, it may take up to 24 Hours for funds to reflect on your wallet.</p>
                
                <!-- UBA Table -->
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Bank</th>
                            <td>United Bank of Africa</td>
                        </tr>
                        <tr>
                            <th>Branch</th>
                            <td>Ndola Branch</td>
                        </tr>
                        <tr>
                            <th>A/C Number</th>
                            <td>9050030000829</td>
                        </tr>
                        <tr>
                            <th>Currency</th>
                            <td>ZMW</td>
                        </tr>
                        <tr>
                        <tr>
                            <th>Branch Code</th>
                            <td>370001</td>
                        </tr>
                        <tr>
                            <th>Swift Code</th>
                            <td>UNAFZMLU</td>
                        </tr>
                        <tr>
                            <th>Details Required</th>
                            <td>Sampay Acc No: (+260********) <br/> Beneficiary Details: SampayLimited</td>
                        </tr>
                    </tbody>
                </table>
              <!-- /UBA Table -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#bankDeposits">Back</button>
                <!--<button type="submit" class="btn theme-btn" name="upload_pop">Upload POP</button>-->
            </div>
        </div>
    </div>
</div><!-- UBA Bank Deposit Modal -->

<!-- 5.4. ABSA Bank Deposit Modal -->
<div class="modal fade" id="absaBankDeposit" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Bank Deposit: ABSA</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please note that when you use this option, it may take up to 24 Hours for funds to reflect on your wallet.</p>
                
                <!-- ABSA Table -->
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Bank</th>
                            <td>Absa Bank Zambia Limited</td>
                        </tr>
                        <tr>
                            <th>Branch</th>
                            <td>Barclays Business Center Industrial</td>
                        </tr>
                        <tr>
                            <th>A/C Number</th>
                            <td>1068917</td>
                        </tr>
                        <tr>
                            <th>Currency</th>
                            <td>ZMW</td>
                        </tr>
                        <tr>
                            <th>Swift Code</th>
                            <td>BARCZMLX</td>
                        </tr>
                        <tr>
                            <th>Details Required</th>
                            <td>Sampay Acc No: (+260********) <br/> Beneficiary Details: SampayLimited</td>
                        </tr>
                    </tbody>
                </table>
                <!-- /ABSA Table -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#bankDeposits">Back</button>
                <!--<button type="submit" class="btn theme-btn" name="upload_pop">Upload POP</button>-->
            </div>
        </div>
    </div>
</div><!-- ABSA Bank Deposit Modal -->

<!-- 5.5. ATLASMARA Bank Deposit Modal -->
<div class="modal fade" id="atlasmaraBankDeposit" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Bank Deposit: Atlas Mara</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Please note that when you use this option, it may take up to 24 Hours for funds to reflect on your wallet.</p>
                
                <!-- ATLASMARA Table -->
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Bank</th>
                            <td>Atlas Mara</td>
                        </tr>
                        <tr>
                            <th>A/C Number</th>
                            <td>0035933683019</td>
                        </tr>
                        <tr>
                            <th>Currency</th>
                            <td>ZMW</td>
                        </tr>
                        <tr>
                            <th>Branch Name</th>
                            <td>Kitwe Branch</td>
                        </tr>
                        <tr>
                            <th>Branch Code</th>
                            <td>003</td>
                        </tr>
                        <tr>
                            <th>Swift Code</th>
                            <td>FMBZZMLX</td>
                        </tr>
                        <tr>
                            <th>Details Required</th>
                            <td>Sampay Acc No: (+260********) <br/> Beneficiary Details: SampayLimited</td>
                        </tr>
                    </tbody>
                </table>
              <!-- ATLASMARA Table -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#bankDeposits">Back</button>
                <!--<button type="submit" class="btn theme-btn" name="upload_pop">Upload POP</button>-->
            </div>
        </div>
    </div>
</div><!-- ATLASMARA Bank Deposit Modal -->

<!-- 5.6. Deposit Proof of Payment -->
<div class="modal fade" id="depositPOP" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold"><strong>Proof of Payment</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Send to Sampay Bussiness Account Form -->
                <form class="row g-3" method="POST" action="sampayforms/proof_bank_deposit.php" enctype="multipart/form-data">
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="companyaccount" value="<?php //echo $companyaccount ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="number" name="depositamount" id="depositamount" value="" placeholder="How much did you deposit?" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <!--<label class="form-label">Select Category</label>-->
                          <select class="form-select" name="bank" aria-label="">
                            <option selected>What bank did you use to deposit?</option>
                            <option value="ABSA">ABSA</option>
                            <option value="ATLASMARA">ATLASMARA</option>
                            <option value="UBA">UBS</option>
                            <option value="FNB">FNB</option>
                            <option value="ZANACO">ZANACO</option>
                          </select>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="text" name="bankref" id="bankRef" value="" placeholder="What reference did you use?" required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="date" name="depositdate" id="depositdate" value="" required>
                        <input type="hidden" name="dateref" value="<?php //echo $dateref ?>" required readonly>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="depositslip" class="form-label">Upload Deposit Slip or POP</label>
                        <input class="form-control" type="file" name="upload" id="depositfile" value="" autocomplete="off" required>
                    </div>
                    
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#bankDeposits">Back</button>
                        <button type="submit" class="btn btn-success" name="upload_pop">Upload POP</button>
                    </div>
                </form><!-- End General Form Elements -->
                
            </div>
        </div>
    </div>
</div><!-- Deposit Proof of Payment -->

<!-- 6.0. Sampay Developer Modal -->
<div class="modal fade" id="sampayDeveloper" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Sampay Developer</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div col-md-12 align="left">
                        <button type="button" class="btn theme-btn btn-sm" data-bs-toggle="modal" data-bs-target="#generateKey">Generate New Credentials</button>
                        <br>
                        <p class="mt-3">Each Application or Website has its own unique set of keys. Keys are not transferable.</p>
                    </div>
                    <div col-md-12>
                        <div align="">
                            <!-- API Table -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><img class="w-50 h-50" src="https://samafricaonline.com/sam_pay/public/uploads/applogos/1761637587935logo.png"></td>
                                        <td>
                                            <p class="mb-0">https://www.samtickets_demo.com</p>
                                            <p><strong>Status:</strong> Pending</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                             <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            API KEY <button type="button" onclick="copykey40()" class="btn btn-warning btn-sm py-0">COPY</button>
                                            <input type="text" value="408D25E22299CFECC9A787E820A17D4FF1A17272730359A66D3ED6FF6672488509FEF5E16750E220474A82DA0047CA22" style="background:none;border:none;width:100%;font-size:9px;" id="appkey_40">
                                            <script>
                                                function copykey40() {
                                                    var copyText = document.getElementbyId("appkey_40");
                                                    copyText.select();
                                                    copyText.setSelectionRange(0, 999999999999999999);
                                                    document.execCommand("copy");
                                                    alert("Copied the text: " + copyText.value);
                                                }
                                            </script>
                                            <br/><br/>
                                            API AUTH <button type="button" onclick="copyauth40()" class="btn btn-warning btn-sm py-0">COPY</button>
                                            <input type="text" value="F6F470FC5AB5C23DDB37932E2E4D902E09FEF5E16750E220474A82DA0047CA227E85CFF546B4C9EE41FD1691C65BF89912B8BC56" style="background:none;border:none;width:100%;font-size:9px;" id="authkey_40">
                                            <script>
                                                function copyauth40() {
                                                    var copyText = document.getElementbyId("appkey_40");
                                                    copyText.select();
                                                    copyText.setSelectionRange(0, 999999999999999999);
                                                    document.execCommand("copy");
                                                    alert("Copied the text: " + copyText.value);
                                                }
                                            </script>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /API Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Sampay Developer Modal -->

<!-- 6.1. Add an App or Website -->
<div class="modal fade" id="generateKey" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold"><strong>Add an App or Website</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add an App or Website -->  
                <form class="row g-3" method="POST" action="sampayforms/developer_add_credentials.php" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php //echo $token_value ?>">
                    <input type="hidden" name="newtoken" value="<?php //echo $newtoken ?>" required readonly>
                    <input type="hidden" name="businessid" value="<?php //echo $businessid ?>" required readonly>
                     
                    <div class="col-12 mb-1">
                        <input class="form-control" type="text" name="websitename" id="appname" value="" placeholder="Enter App Name" autofocus required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="text" name="mainurl" id="mainurl" value="" placeholder="Enter Main URL" autofocus required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="text" name="returnurl" id="returnurl" value="" placeholder="Enter Return URL" autofocus required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="text" name="tcurl" id="termsurl" value="" placeholder="Enter Terms And Conditions URL" autofocus required>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <input class="form-control" type="text" name="refundurl" id="refundPolicyUrl" value="" placeholder="Enter Refund Policy URL" autofocus required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="logo" class="form-label">Logo (512x512)</label>
                        <input class="form-control" type="file" name="upload" id="logo" value="" autocomplete="off" required>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none"  data-bs-toggle="modal" data-bs-target="#sampayDeveloper">Back</button>
                        <button type="submit" name="add_app" class="btn btn-success shadow-none">Submit</button>
                    </div>
                </form><!-- End General Form Elements -->
                
            </div>
        </div>
    </div>
</div><!-- Add an App or Website -->

<!-- 7.0 Add New User -->
<div class="modal fade" id="addNewUser" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Add New User</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add New User Form -->
                <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-12 mb-1">
                        <label for="userName" class="form-label">User Name</label>
                        <input class="form-control" type="text" name="username" id="userName" value="" required placeholder="Enter User Name">
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label class="form-label">User Role</label>
                          <select class="form-select" name="transaction" aria-label="">
                            <option selected>--Select Role--</option>
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                          </select>
                    </div>
                    
                    <div class="col-12 mb-1">
                        <label for="emailId" class="form-label">Email</label>
                        <input class="form-control" type="text" name="emailId" id="emailId" value="" placeholder="Enter User Email ID" required>
                    </div>
                  
                    <div class="col-12 mb-1">
                        <label for="userNumber" class="form-label">Mobile Number (09/07********)</label>
                        <input class="form-control" type="text" name="mobileno" id="userNumber" value="" placeholder="Enter User Mobile Number" required>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success shadow-none" name="add_user">Add User</button>
                    </div>
                </form><!-- End General Form Elements -->
                
            </div>
        </div>
    </div>
</div><!-- End Add New Vendor Modal -->


<!--
    ========== Index ============
    1.0. Single Payment Modal
        1.1. Send to Sampay Account Modal
        1.2. Send to Local Bank Account Modal
        1.3. Send to Sampay Business Account Modal
        1.4. Send to Mobile Money Account Modal
    2.0. Bulk Payment Modal
    3.0. International Payment Modal
    4.0. Add New Vendor Modal
    5.0. Bank Deposits Modal
        5.1. FNB Bank Deposit Modal 
        5.2. ZANACO Bank Deposit Modal
        5.3. UBA Bank Deposit Modal
        5.4. Absa Bank Deposit Modal
        5.5. AtlasMara Bank Deposit Modal 
        5.6. Deposit Proof of Payment 
    6.0 Sampay Developer Modal
        6.1. Add an App or Website
    7.0 Add New User
    
-->