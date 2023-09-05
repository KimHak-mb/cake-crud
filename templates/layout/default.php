<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script 
        src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('select').select2();
        });
    </script>
    <script>
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'bootstrap-4', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head> 
<div class="wrapper">
    <?php
        $controller_name = $this->request->getParam('controller');
    ?>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
            </div>
        </div>

        <ul class="list-unstyled components">
            <li class=<?= $controller_name == 'Pages'?'bg-warning':'' ?>>
                <a href="<?= $this->Url->build('/home') ?>">Home</a>
            </li>
            <li class=<?= $controller_name == 'Users'?'bg-warning':'' ?>>
                <a href="<?= $this->Url->build('/users') ?>">Users</a>
            </li>
            <li class=<?= $controller_name == 'Categories'?'bg-warning':'' ?>>
                <a href="<?= $this->Url->build('/categories') ?>">Categories</a>
            </li>
            <li class=<?= $controller_name == 'BlogPosts'?'bg-warning':'' ?>>
                <a href="<?= $this->Url->build('/Blog_Posts') ?>">Blog Posts</a>
            </li>
            <li class=<?= $controller_name == 'MetaFields'?'bg-warning':'' ?>>
                <a href="<?= $this->Url->build('/Meta Fields') ?>">Meta Fields</a>
            </li>
            <li>
                <a href="<?= $this->Url->build('/logout') ?>">Logout</a>
            </li>
            <li>
                <a href="<?= $this->Url->build('/register') ?>">Register</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-color">
                    <!-- <i class="fas fa-align-left"></i> -->
                    <span>Toggle Sidebar</span>
                </button>

                <div class="top-nav-links list-unstyled">
                    <li class=<?= $controller_name == 'Pages'?'bg-warning':'' ?>>
                        <a><?php echo $this->Html->Link('Home', ['controller' => 'Pages','action' => 'home']); ?></a>
                    </li>
                    <li class=<?= $controller_name == 'Users'?'bg-warning':'' ?>>
                        <a><?= $this->Html->Link('Users', array('controller' => 'Users','action' => 'index')); ?></a>
                    </li>
                    <li class=<?= $controller_name == 'Categories'?'bg-warning':'' ?>>
                        <a><?= $this->Html->Link('Categories', array('controller' => 'Categories','action' => 'index')); ?></a>
                    </li>
                    <li class=<?= $controller_name == 'BlogPosts'?'bg-warning':'' ?>>
                        <a><?php echo $this->Html->Link('Blog Posts', ['controller' => 'Blog_posts','action' => 'index']); ?></a>
                    </li>
                    <li class=<?= $controller_name == 'MetaFields'?'bg-warning':'' ?>>
                        <a><?php echo $this->Html->Link('Meta Fields', ['controller' => 'Meta_fields','action' => 'index']); ?></a>
                    </li>  
                    <?php echo $this->Html->Link('Logout', ['controller' => 'Users','action' => 'logout']); ?>
                    <?php echo $this->Html->Link('Register', ['controller' => 'Users','action' => 'register']); ?>
                </div>
            </div>
        </nav>

        <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
    </div>
</div>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</div>

</html>
