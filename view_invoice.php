<?php
require_once('config.php');
require_once("headeradmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <title>View Invoices</title>
</head>
<body>
    <div class="wrapper"> 
        <div class="alert alert-light text-center fw-bold" role="alert" style="font-size: 24px; color: goldenrod;">
            View Saleorder Dashboard
        </div>
        <br>
        <div class="table-container">
            <table class="table table-dark table-striped">
                <tr>
                    <th>referenceID</th>
                    <th>invoice_date</th>
                    <th>due_date</th>
                    <th>PO_date</th>
                    <th>PO_reference</th>
                </tr>
                <?php
                $sql = "SELECT * FROM invoice";
                $result = mysqli_query($connect, $sql);
                if (!$result) {
                    echo "<tr><td colspan='4'>Error: " . mysqli_error($connect) . "</td></tr>";
                } elseif (mysqli_num_rows($result) == 0) {
                    echo "<tr><td colspan='4'>No invoices found</td></tr>";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                        <td><?= $row['invoiceId'] ?></td>
                            <td><?= isset($row['invoice_date']) ? $row['invoice_date'] : '' ?></td>
                            <td><?= isset($row['due_date']) ? $row['due_date'] : '' ?></td>
                            <td><?= isset($row['PO_date']) ? $row['PO_date'] : '' ?></td>
                            <td><?= isset($row['PO_date']) ? $row['PO_reference'] : '' ?></td>
                        </tr>
                <?php
                    }
                }
                mysqli_close($connect);
                ?>
            </table>
        </div>
        <div class="alert alert-primary" role="alert">
            <a href="admin.php" class="alert-link">Back to adminpage</a>.
        </div>
    </div>
</body>
</html>
