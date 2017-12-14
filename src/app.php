<?php
    require __DIR__."/../vendor/autoload.php";

    use Dompdf\Dompdf;
    
    if(filter_has_var(INPUT_POST,"html")) {
        //echo urldecode(filter_input(INPUT_POST,"html"));
        $dompdf = new Dompdf();
        $dompdf->loadHtml(urldecode(filter_input(INPUT_POST,"html")));
        $dompdf->render();
        $dompdf->stream("table.pdf",["Attachtment"=>0]);
    }
