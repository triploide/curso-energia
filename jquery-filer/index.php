<!DOCTYPE>
<html lang="html">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Example 1 - jQuery Filer 1.3 - CreativeDream</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

	<!-- Styles -->
	<link href="css/jquery.filer.css" rel="stylesheet">

	<!-- Jvascript -->
	<script src="http://code.jquery.com/jquery-3.1.0.min.js" crossorigin="anonymous"></script>
	<script src="js/jquery.filer.min.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>

    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #47525d;
            background-color: #fff;

            margin: 0;
            padding: 20px;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee;
        }
    </style>
</head>

<body>
    <div id="content">
		<h2>Demo</h2>

		<!-- Example 1 -->
		<form action="php/movie.controller.php" method="post" enctype="multipart/form-data">
		    <input type="file" name="files[]" id="filer_input" multiple>
		    <input type="submit" value="Submit">
		</form>
		<!-- end of Example 1 -->

    </div>
    </body>
</html>
