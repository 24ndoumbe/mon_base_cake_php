<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Ajouter un utilisateur') ?></title>
    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Style pour la structure générale */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .form-container {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
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

        .side-nav {
            width: 200px;
            margin-right: 20px;
        }

        .side-nav .side-nav-item {
            display: block;
            color: #4d90fe;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .side-nav .side-nav-item:hover {
            background-color: #f4f4f4;
        }

        .side-nav h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2><?= __('Ajouter un utilisateur') ?></h2>
            <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Informations de l\'utilisateur') ?></legend>
                    <div>
                        <?= $this->Form->control('active', [
                            'label' => 'Actif',
                            'class' => 'form-control'
                        ]) ?>
                    </div>
                    <div>
                        <?= $this->Form->control('nom', [
                            'label' => 'Nom',
                            'class' => 'form-control',
                            'required' => true
                        ]) ?>
                    </div>
                    <div>
                        <?= $this->Form->control('prenom', [
                            'label' => 'Prénom',
                            'class' => 'form-control',
                            'required' => true
                        ]) ?>
                    </div>
                    <div>
                        <?= $this->Form->control('email', [
                            'label' => 'Email',
                            'class' => 'form-control',
                            'type' => 'email',
                            'required' => true
                        ]) ?>
                    </div>
                    <div>
                        <?= $this->Form->control('password', [
                            'label' => 'Mot de passe',
                            'class' => 'form-control',
                            'type' => 'password',
                            'required' => true
                        ]) ?>
                    </div>
                    <div>
                        <?= $this->Form->control('observation', [
                            'label' => 'Observation',
                            'class' => 'form-control',
                            'type' => 'textarea'
                        ]) ?>
                    </div>
                </fieldset>
                <div class="form-button">
                    <?= $this->Form->button(__('Soumettre')) ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</body>
</html>
