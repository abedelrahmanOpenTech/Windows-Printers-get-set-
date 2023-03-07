<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>


    <div class="container shadow rounded p-2 my-5 col-12 col-md-8">
        <button class="btn btn-lg btn-dark w-100" onclick="get_printerList()">
            <span>
                Get Printer List
            </span>
            <span id="printers_list_spinner" class="spinner-border spinner-border-sm" style="display: none;"></span>
        </button>
    </div>
    <div class="container text-center">
        <div id="print_spinner" class="spinner-border" style="display: none;"></div>
    </div>
    <div id="printers_list" class="container">

    </div>


    <script>
        var otc_windows_printer_url = "http://localhost:90/test/otc_windows_printer1/";

        function get_printerList() {
            var $spinner = $("#printers_list_spinner");
            $spinner.show();

            $.ajax({
                type: "post",
                url: otc_windows_printer_url,
                data: {
                    action: "get_printers_list"
                },
                success: function(response) {
                    $spinner.hide();
                    response = JSON.parse(response);
                    if(response.length==0){
                        alert("exe not found");
                        return;
                    }
                    var printers_list = response[0].split(",");
                    var default_list = response[1].split(",");
                    var printer_list_html = `
                        <div class='alert alert-info'>
                            <ul>`;
                    for (var [index, name] of printers_list.entries()) {
                        printer_list_html += `<li role='button' class='fw-bold' onclick='print_test("${name}")' >${name} [${default_list[index]}]</li>`;
                    }
                    printer_list_html += `</ul></div>`;
                    $("#printers_list").html(printer_list_html);
                },
                error: function(jqXHR, exception) {
                    alert(`Server ${jqXHR.statusText}`);
                }
            });

        }

        function print_test(printer_name) {
            $("#print_spinner").show();


            $.ajax({
                type: "post",
                url: otc_windows_printer_url,
                data: {
                    action: "set_default_printer",
                    printer_name: printer_name
                },
                success: function(response) {
                    $("#print_spinner").hide();
                    window.print();
                    get_printerList();

                }
            });
        }
    </script>

</body>

</html>