
<!DOCTYPE html>
<html>
<head>
    <title>Email Sending Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container justify-content-center align-items-center">
            <h2>Test Mailer</h2>
    <form action="initiate.php" method="post">
        <label for="email">Recipient's Email:</label>
        <input class="form-group" type="email" name="email" value="" required><br>

        <br>

        <input type="submit" class="btn btn-success btn-lg" value="Send Email">
    </form>
</div>
</div>
</body>
<style type="text/css">
    body{
        padding:120px;
    }
</style>
</html>
