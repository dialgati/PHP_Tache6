<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="public/style.css">
</head>
<body class="w-full h-full bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500">

    <form action="target.php" method="POST">
        <div class="max-w-xl md:mx-auto mx-5 bg-white shadow-2xl rounded-lg h-auto md:mt-20 mt-36 py-5">

        <div class="text-center">
            <h1 class="text-lg font-semibold tracking-wide mb-2">Créez votre compte gratuitement !</h1>
        </div>

        <div class="text-center mx-20">
            <input type="text" name="prenom" 
            placeholder="Prénom" 
            class="w-full py-3 rounded-md shadow-2xl mb-6 pl-5 focus:outline-none">
            <input type="text" 
            name="nom" placeholder="Nom" 
            class="w-full py-3 rounded-md shadow-2xl mb-6 pl-5 focus:outline-none">  
            <input type="text" name="email" 
            require placeholder="Email" 
            class="w-full py-3 rounded-md shadow-2xl mb-6 pl-5 focus:outline-none">
            <input type="text" 
            name="password" require placeholder="Mot de passe" 
            class="w-full py-3 rounded-md shadow-2xl mb-6 pl-5 focus:outline-none">
            <br>
            <br>
            <input type="submit" 
            value="S'incrire" 
            class="text-sm font-semibold bg-pink-600 py-2 px-3 
            rounded-md text-white hover:bg-indigo-600 mb-4 focus:outline-none">
            <br>
        </div>
    </div>
    </form>
</body>
</html>