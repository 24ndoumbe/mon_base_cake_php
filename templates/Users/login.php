<?php
$this->assign('title', 'Connexion');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title'); ?></title>
    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Barre de navigation */
        .navbar {
            background-color: #333;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .navbar .login-link {
            background-color: #4d90fe;
            padding: 8px 16px;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .navbar .login-link:hover {
            background-color: #3b7ad7;
        }

        /* Style du formulaire de connexion */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 50px auto;
            text-align: center;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #4d90fe;
            outline: none;
        }

        .form-button {
            width: 100%;
            padding: 12px;
            background-color: #4d90fe;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #3b7ad7;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #4d90fe;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    

    <!-- Formulaire de connexion -->
    <div class="login-container">
        <h2>Connexion</h2>
        <?= $this->Form->create() ?>
            <div>
                <?= $this->Form->control('email', [
                    'label' => 'Email', 
                    'class' => 'form-control',
                    'type' => 'email',
                    'required' => true,
                    'placeholder' => 'Entrez votre email'
                ]) ?>
            </div>
            <div>
                <?= $this->Form->control('password', [
                    'label' => 'Mot de passe', 
                    'class' => 'form-control',
                    'type' => 'password',
                    'required' => true,
                    'placeholder' => 'Entrez votre mot de passe'
                ]) ?>
            </div>
            <div>
                <?= $this->Form->button('Se connecter', ['class' => 'form-button']) ?>
            </div>
        <?= $this->Form->end() ?>
        <p><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'forgotPassword']); ?>" class="forgotPassword">Mot de passe oublié ?</a></p>

    </div>
</body>
</html>
