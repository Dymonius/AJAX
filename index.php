<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
        function funcBefore() {
            $("#information").text("wait...")
        }

        function funcSuccess(data) {
            $("#information").text(data);
        }

        $(document).ready(function () {
            console.log($("#load"));
            $("#load").on("click", function () {
                var admin = "Admin";
                $.ajax({
                    url: "content.php",
                    type: "POST",
                    data: ({name: admin, number: 5}),
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
        });
    </script>
</head>
<body>
<p id="load" style="cursor: pointer">Load data</p>
<div id="information"></div>
</body>
</html>