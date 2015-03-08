<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/assets/css/normalize.css" rel="stylesheet" media="screen"/>
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="/assets/vendor/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    
    <script type="javascript" src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="javascript" src="/assets/vendor/jquery/jquery-2.1.3.min.js"></script>
    
<!--    This is not working...-->
    <script type="javascript" src="/assets/js/back.js"></script>
<!--    Had to resort to using this-->
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
</head>
<body>

    <!-- Header -->
    {header}

    <!-- Content -->
    {content}

    <!-- Footer -->
    {footer}

</body>
</html>