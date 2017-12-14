$(document).ready(function(){
    $("#export").click((e)=> {
        e.preventDefault();
        var data = encodeURIComponent($("#html-data").html());
        console.log(data);
        $.post("src/app.php",{html: data},function(response){
            var blob = new Blob([response], {type: 'application/pdf'});
            var pdfurl = window.URL.createObjectURL(blob)+"#view=FitW";
            $("#pdf-preview").attr("data",pdfurl);
            //console.log(response);
        });
    });

    /*$("#export").click((e) => {
        e.preventDefault();
        var html = encodeURIComponent($("#html-data").html());
        console.log(html);
        $("#html").val(html);
        $("#export-pdf").submit();
    });*/
});