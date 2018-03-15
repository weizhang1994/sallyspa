<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top mb-3">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="<?php echo URLROOT;?>" class="navbar-brand"><?php echo SITENAME;?></a>
      <div class="collapse navbar-collapse" id="navbar">
      
       <ul class="navbar-nav mr-auto">
          <li class="navbar-item">
            <a href="<?php echo URLROOT;?>" class="nav-link">Home</a>
          </li>
          
          <li class="navbar-item">
            <a href="<?php echo URLROOT;?>/pages/blog" class="nav-link">Blog</a>
          </li>         
        </ul>

        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
          </li>

        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
          </li>
        <?php endif; ?>
        </ul
      </div>
    </div>
  </nav>