<style>
    .delete{
        color: #f8f9fa;
        background-color: #007bff;
       padding: 8px;
    }
</style>
<?php /** @var Array $data */ ?>
<div class="container">
    <form method="post">
        <div class="row">
            <input type="text" class="form-control" required placeholder="New name" name="name">
        </div>
        <div class="row">
            <input type="password" class="form-control" required placeholder="New password" name="password">
        </div>
        <div class="row">
            <input type="text" class="form-control"  placeholder="New favourite player" name="favPlayer">
        </div>
        <h1> <?php echo $data ?> </h1>
        <button type="submit" class="btn btn-primary">Edit</button>

        <a class="delete" href="?c=Fans&a=delete">Delete</a>
    </form>
</div>
