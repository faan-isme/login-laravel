<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Index</title>
</head>
<body class="container" style="display:flex; justify-content:center ;">

  <div class="card " style="width: 25rem; border: none; display: flex; align-items: center; margin-top: 5rem;">
    <img class="mb-4" src="../../img/user-solid.svg" alt="" width="72" height="57"> 
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    @if ($errors->any())
    <div class="container">
      <div class="alert form-control alert-danger" style="padding: unset;">
          <ul style="padding: 0px 20px 0px 20px; margin: 5px 0px 5px 0px;">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    </div>
    @endif

    <form method="post" action="/login" class="container">
    @csrf
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ Session::get('email') }}">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
    </form>
    
  </div>
</body>
</html>