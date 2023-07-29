<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://www.google.com/recaptcha/api.js?render=6Lct-mYnAAAAAFP9rXvP4iubPNiy181B7KabsVoj"></script>

</head>

<body>

    <form action="bd.php" method="post">
        <input type="email" name="email">
        <button class="g-recaptcha" data-sitekey="6Lct-mYnAAAAAFP9rXvP4iubPNiy181B7KabsVoj" data-callback='onSubmit' data-action='submit'>Enviar</button>

    </form>

    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>

</body>

</html>