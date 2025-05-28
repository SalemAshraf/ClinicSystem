
  <div class="mx-auto mt-5" style="max-width:600px;">
    <?php if($error): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if($success): ?>
      <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

<form method="POST" action="index.php?page=register">
    <input type="text" name="name" placeholder="Name" required class="form-control my-2">
    <input type="email" name="email" placeholder="Email" required class="form-control my-2">
    <input type="password" name="password" placeholder="Password" required class="form-control my-2">
    <button type="submit" class="btn btn-success">Register</button>
</form>


    <p class="text-center mt-3">
      Already have an account?
      <a href="index.php?page=login">Login</a>
    </p>
  </div>
</div>