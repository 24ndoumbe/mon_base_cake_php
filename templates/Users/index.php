<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Liste des utilisateurs') ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        .users.index.content {
            margin: 20px;
        }

        .button {
            background-color: #4d90fe;
            border: none;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #3b7ad7;
        }

        .table-responsive {
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            color: #333;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            margin-right: 8px;
            color: #4d90fe;
            text-decoration: none;
            padding: 6px 12px;
            border: 1px solid #4d90fe;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .actions a:hover {
            background-color: #4d90fe;
            color: white;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
            list-style-type: none;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            padding: 8px 16px;
            color: #4d90fe;
            border: 1px solid #4d90fe;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #4d90fe;
            color: white;
        }

        .pagination .active a {
            background-color: #4d90fe;
            color: white;
        }

        .pagination .disabled a {
            color: #ccc;
            border-color: #ccc;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div class="users index content">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h3><?= __('Liste des utilisateurs') ?></h3>
            <?= $this->Html->link(__('Nouvel utilisateur'), ['action' => 'add'], ['class' => 'button']) ?>
        </div>
        
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('active') ?></th>
                        <th><?= $this->Paginator->sort('nom') ?></th>
                        <th><?= $this->Paginator->sort('prenom') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->active) ?></td>
                        <td><?= h($user->nom) ?></td>
                        <td><?= h($user->prenom) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Voir'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Êtes-vous sûr de vouloir supprimer l\'utilisateur # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Premier')) ?>
                <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Suivant') . ' >') ?>
                <?= $this->Paginator->last(__('Dernier') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} sur {{pages}}, affichage de {{current}} enregistrements sur {{count}} total')) ?></p>
        </div>
    </div>
</body>
</html>
