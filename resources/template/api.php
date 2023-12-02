<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:300,400,700" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<redoc spec-url='https://demo.fusio-project.org/system/generator/spec-openapi?filter=<?php echo $filter; ?>'></redoc>
<script src="https://demo.fusio-project.org/apps/redoc/redoc.standalone.js"> </script>
</body>
</html>
