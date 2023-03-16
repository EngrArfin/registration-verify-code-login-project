<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/signup.css">
    <link rel="stylesheet" href="style/verify.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>  
    <div class="form" style="text-align: center;">
        <h2>verify your account</h2>
        <p>we email you the four digit otp code to enter the code below to confirm your email address..</p>
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>
            <div class="fields-input">
                <input type="number" name="otp-1"class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp-2"class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp-3"class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp-4"class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
            </div>
            <div class="submit">
                <input type="submit" value="Verify Now" class="button">
            </div>
        </form>
    </div>

    <script src="js/verify.js"></script>
    
</body>
</html>