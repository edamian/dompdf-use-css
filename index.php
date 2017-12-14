<?php
require __DIR__."/vendor/autoload.php";

    use Dompdf\Dompdf;
 $html = <<<'ENDHTML'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dompdf - experiment</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
</head>
<body>
    <div id="html-data" class="container">
        <table class="table table-bordered">
            <thead>
                <th>Name</th>
                <th>Age</th>
            </thead>
            <tbody>
                <tr>
                    <td>Erick</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>Omar</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>Alejandra</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Damaris</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>Norma</td>
                    <td>18</td>
                </tr>
            </tbody>
        </table>
    </div>
   <!--  <div class="container">
        <object data="" type="application/pdf" id="pdf-preview"
        class="col-md-12"></object>
    </div>
    <div class="container">
        <form action="src/app.php" method="post" id="export-pdf">
            <input type="hidden" name="html">
            <button id="export" class="btn btn-success">Export</button>
        </form>
    </div> -->
    <script src="public/js/jquery-3.2.1.js"></script>
    <script src="public/js/bootstrap.bundle.js"></script>
    <script src="public/js/app.js"></script>
</body>
</html>
ENDHTML;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream("table.pdf",["Attachtment"=>0]);