<?php
$css =  "css/";
$js =  "js/";
if (@$_GET['reset']) {
    $handle = fopen(".htaccess", 'w');
    fwrite($handle, '');
    fclose($handle);
}

$commands = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $css ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= $css ?>jquery.dataTables.css">
    <title>HTACCESS</title>
</head>

<body>
    <div class="d-flex flex-column container" style="padding: 10px 0;">
        <h1 class="text-center">Learn All About Htaccess</h1>
        <div class="d-flex flex-column">
            <button class="btn btn-primary" style="align-self:flex-end;margin-bottom:20px;">Reset Htaccess File</button>
            <table id="htaccess">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Command</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($commands as $i) {
                        echo '<tr>';
                        foreach ($i as $j) {
                            echo "<td>$j</td>";
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<script src="<?= $js ?>jquery.min.js"></script>
<script src="<?= $js ?>bootstrap.min.js"></script>
<script src="<?= $js ?>jquery.dataTables.js"></script>

<script>
    $("#htaccess").dataTable();
</script>