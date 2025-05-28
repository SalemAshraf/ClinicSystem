
<div class="container">
  <nav aria-label="breadcrumb" class="my-4 h4 text-center fw-bold">
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Login</li>
    </ol>
  </nav>

  <div class="mx-auto mt-5" style="max-width:420px;">
    <?php if($error): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if($success): ?>
      <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form method="POST" action="index.php?page=login">
    <input type="email" name="email" placeholder="Email" required class="form-control my-2">
    <input type="password" name="password" placeholder="Password" required class="form-control my-2">
    <button type="submit" class="btn btn-primary">Login</button>
</form>

    <p class="text-center mt-3">
      Don’t have an account?
      <a href="index.php?page=register">Create one</a>
    </p>
  </div>
</div>

