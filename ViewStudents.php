<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/ViewStudent.css">
    <title>Students</title>
</head>
<body>
    <h2>STUDENTS TABLE</h2>
    <div class="container mt-5 px-2">
        <div class="mb-2 d-flex justify-content-between align-items-center">
            <div class="position-relative">
                <a class="btn" href="AddNew.php" name="add-new-student"><i class="fa-duotone fa-plus"> Add new Student</i></a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive table-borderless">
                <thead>
                <tr class="bg-light">
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">Date</th>
                    <th scope="col" width="10%">Status</th>
                    <th scope="col" width="20%">Customer</th>
                    <th scope="col" width="20%">Purchased</th>
                    <th scope="col" class="text-end" width="20%"><span>Revenue</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>12</td>
                    <td>1 Oct, 21</td>
                    <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                    <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                    <td>Wirecard for figma</td>
                    <td class="text-end"><span class="fw-bolder">$0.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
<!--                    detele and edit button-->
                </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</html>
