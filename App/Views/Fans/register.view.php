<?php /** @var Array $data */ ?>
<div class="container">
<form method="post">
  <div class="form-group">
    <label for="emailHelp">Username</label>
    <input type="text" class="form-control" required placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" required placeholder="Enter password" name="password">
  </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"  placeholder="Enter favourite player" name="favPlayer">
    </div>
    <h1> <?php echo $data ?> </h1>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>