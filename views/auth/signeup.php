<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogLite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body {
            /* background-color: #460cf5ff; */
        }
    </style>
</head>

<body class="bg-[linear-gradient(171deg,rgba(115,0,0,1)_0%,rgba(116,16,15,1)_27%,rgba(255,203,114,1)_77%,rgba(255,220,187,1)_100%)]
 flex justify-center items-center h-[100vh] w-full font-[ 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif] ">
    <div class=" rounded-[15px] h-auto w-[30%] bg-[#fccfa2ff] flex flex-col text-center p-10 gap-5">
        <div class=" w-full flex flex-col self-start">
            <h1 class="p-10 bg-[rgba(116,16,15,1)] text-white rounded-[15px] "><i
                    class="fas fa-user-circle"></i>Connexion</h1>

        </div>

        <form action="" method="POST" class=" h-auto w-full mb-[10px]" name="login">
            <div class="gap-10">
                <label for="name" class=" h-auto w-full mb-[10px]"> <i class="fas fa-user icon"></i> Nom
                    d'utilisateur </label>
                <div class="">
                    <input class=" h-[40px] w-[400px]" type="text" name="name" id="name" placeholder="Entrez votre nom"
                        required>
                </div>

            </div>

            <div class="">
                <label for="pw"> <i class="fas fa-lock icon"></i> Mot de passe
                </label>
                <div class="">
                    <input class=" h-[40px] w-[400px]" type="password" name="pw" id="pw"
                        placeholder="Entrez votre mot de passe" required>

                </div>

            </div>

            <button type="submit" class="h-[40px] w-[200px] rounded-[100px]  bg-orange-300">
                <i class="fas fa-sign-in-alt"></i> submit
            </button>
        </form>

        <div class="">
            <p>Vous avez déjà un compte ? <a href="login" class="text-[#460cf5ff]">login</a></p>

        </div>
    </div>