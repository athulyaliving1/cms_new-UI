<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include('./include/config.php');


    if (isset($_POST['submit'])) {
        $Vendor = $_POST['vendor'];
        $Department = $_POST['department'];
        $Departmentcode = $_POST['departmentcode'];
        $DeviceType = $_POST['devicetype'];
        $Description = $_POST['desc'];
        $Qty = $_POST['qty'];
        $HSNSAC = $_POST['hsn'];
        $InvoiceNo = $_POST['invoiceno'];
        $InvoiceDate = $_POST['invoicedate'];
        $Amount = $_POST['amt'];
        $CGST9 = $_POST['cgst'];
        $SGST9 = $_POST['sgst'];
        $Warranty = $_POST['warranty'];
        $ExpiryDate = $_POST['expiry'];
        $EmpCode = $_POST['empcode'];
        $EmpName = $_POST['empname'];
        $SupRefNo = $_POST['supref'];
        $State = $_POST['state'];
        $Location = $_POST['location'];
        $Place = $_POST['place'];
        $Branchcode = $_POST['branchcode'];

        $query = "INSERT INTO `products`(Vendor,department,departmentcode,DeviceType,Description,Qty,HSNSAC,InvoiceNo,InvoiceDate,Amount,CGST,SGST,Warranty,ExpiryDate,EmpCode,EmpName,SupRefNo,state,location,place,branchcode) VALUES 
       ('$Vendor','$Department','$Departmentcode','$DeviceType','$Description','$HSNSAC','$InvoiceNo','$InvoiceDate','$Qty','$Amount','$CGST9','$SGST9','$Warranty','$ExpiryDate','$EmpCode','$EmpName','$SupRefNo','$State','$Location','$Place','$Branchcode')";

        if (mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='product.php'; </script>";
        } else {
            echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='product.php';</script>";
        }
    }

    // if(isset($_POST['update']))
    // {
    //     echo"File working";
    // }





    ?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>


        <script>
            function getCat(val) {
                // alert('val');

                $.ajax({
                    type: "POST",
                    url: "depentdb.php",
                    data: 'branch_state=' + val,
                    success: function(data) {
                        console.log(data);
                        $("#branch_city").html(data);

                    }
                });
            }

            function getCat1(val1) {
                // alert('val');

                $.ajax({
                    type: "POST",
                    url: "depentdb1.php",
                    data: 'branch_city=' + val1,
                    success: function(data1) {
                        $("#branch_name").html(data1);
                        console.log("data");
                    }
                });

            }
        </script>


        <script>
            function getDep(val) {
                // alert('val');

                $.ajax({
                    type: "POST",
                    url: "productsub.php",
                    data: 'stateName=' + val,
                    success: function(data) {
                        console.log(data);
                        $("#state_id").html(data);

                    }
                });
            }
        </script>
        <script>
            function getBrncode(val2) {
                // alert('val');

                $.ajax({
                    type: "POST",
                    url: "branchcodesub.php",
                    data: 'branch_name=' + val2,
                    success: function(data2) {
                        console.log(data2);
                        $("#branch_code").html(data2);

                    }
                });
            }
        </script>



    </head>

    <body>
        <div>
            <div class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-black bg-zinc-100 ">
                <?php
                include('./include/sidebar.php');

                ?>
                <div class="h-full mb-10 ml-14 mt-14 md:ml-64 md:px-20 xl:px-12">
                    <div class="h-2 bg-amber-400 rounded-t-md"></div>

                    <form class="min-w-full p-10 bg-white rounded-lg shadow-xl xl:px-10" method="post" action="">
                        <h1 class="mb-6 font-sans text-2xl font-bold text-center text-gray-600">Register Your Requirements</h1>

                        <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">


                            <div>
                                <label class="block my-3 font-semibold text-gray-800 text-md" for="username">Category</label>

                                <!-- Display the dropdown menu -->
                                <select class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                    <option value="">Select Vendor</option>

                                </select>
                            </div>

                            <div class=''>
                                <label for="department" class="block my-3 font-semibold text-gray-800 text-md">Sub Category
                                </label>

                                <select type="text" name="department" readonly class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" id="department" onChange="getDep(this.value);">
                                    <option value="">Select Category</option>

                                </select>
                            </div>
                            <div class=''>
                                <label for="departmentcode" class="block my-3 font-semibold text-gray-800 text-md">Complaint
                                    Type
                                </label>
                                <div>
                                    <select name="departmentcode" id="state_id" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                        <option value="">Select Subcategory</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                            <div>
                                <label class="block my-3 font-semibold text-gray-800 text-md" for="username">Complaint Type
                                </label>
                                <select class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                    <option value="">Select Complaint</option>

                                </select>


                            </div>

                            <div>
                                <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Department</label>
                                <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="desc" id="desc" placeholder="Description" />
                            </div>

                            <div>
                                <label class="block my-3 font-semibold text-gray-800 text-md" for="email">Department
                                    Code</label>
                                <input class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" type="text" name="desc" id="desc" placeholder="Description" />
                            </div>

                        </div>

                        <div class="grid grid-cols-1 gap-4 xl:grid-cols-4">
                            <div class="">
                                <label for="state" class="block my-3 font-semibold text-gray-800 text-md ">State
                                </label>

                                <select type="text" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none" id="state" name="state" onChange="getCat(this.value);">
                                    <option value="">Select Category</option>
                                    <?php

                                    // $conn = mysqli_connect("localhost", "root", "", "athul9z1_cms");


                                    $sql = mysqli_query($conn, "select distinct branch_state from master_branches");
                                    while ($rw = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <option value="<?php echo htmlentities($rw['branch_state']); ?>">
                                            <?php echo htmlentities($rw['branch_state']); ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class=''>
                                <label for="location" class="block my-3 font-semibold text-gray-800 text-md ">Location</label>

                                <select name="location" id="branch_city" onChange="getCat1(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                    <option value="">Select Subcategory</option>
                                </select>
                            </div>

                            <div class=''>
                                <label for="place" class="block my-3 font-semibold text-gray-800 text-md ">Place
                                </label>

                                <select name="place" id="branch_name" onChange="getBrncode(this.value);" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                    <option value="">Select Subcategory</option>
                                </select>

                            </div>
                            <div class=''>
                                <label for="branchcode" class="block my-3 font-semibold text-gray-800 text-md ">Branch
                                    Code
                                </label>

                                <select name="branchcode" id="branch_code" class="w-full px-4 py-2 rounded-lg bg-zinc-100 focus:outline-none">
                                    <option value="">Branch Code</option>
                                </select>

                            </div>

                        </div>


                        <div class='grid grid-cols-1 xl:grid-cols-1'>
                            <label for="branchcode" class="block w-8/12 my-3 font-semibold text-gray-800 ext-md">Complaint
                                Details (max 2000 words)

                            </label>

                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Your message..."></textarea>

                        </div>


                        <div class="grid grid-cols-3 place-content-center">
                            <div>
                                <label for="branchcode" class="block w-full my-3 font-semibold text-gray-800 text-md">Complaint Related Doc(if
                                    any)
                                </label>
                                <span class="sr-only">Choose File</span>
                                <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-amber-400 file:text-amber-50 " />

                            </div>
                        </div>


                        <div class="grid place-items-center">

                            <!-- <div>
                            <button type="submit" name="edit"
                                class="px-4 py-2 mt-6 mb-3 font-sans text-lg font-semibold tracking-wide text-white bg-pink-500 rounded-lg hover:bg-sky-800">Edit</button>
                        </div> -->
                            <div class="">
                                <button type="submit" name="submit" class="px-4 py-2 mt-6 mb-3 font-sans text-lg font-semibold tracking-wide text-white rounded-lg bg-amber-400 hover:bg-amber-500">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
    </body>

    </html>
</body>

</html>