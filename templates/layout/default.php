<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'navbar']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="navbar-list">
                <li class="navbar-item"><?= $this->Html->link('Home', ['controller' => 'Tasks', 'action' => 'index']) ?></li>
                <li class="navbar-item"><?= $this->Html->link('Add Task', ['controller' => 'Tasks', 'action' => 'add']) ?></li>
                <?php if ($this->request->getAttribute('identity')): ?>
                    <li class="navbar-item"><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']) ?></li>
                <?php else: ?>
                    <li class="navbar-item"><?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']) ?></li>
                    <li class="navbar-item"><?= $this->Html->link('Create Account', ['controller' => 'Users', 'action' => 'add']) ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>