<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizPW</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<style>
    /* CSS untuk header */
    header {
  background-color: #bee7a5;
  padding: 10px;
}

.navbar-brand {
  color: #006a50;
  font-size: 24px;
  font-weight: bold;
}

.navbar-nav .nav-link {
  color: #006a50;
  font-size: 18px;
  padding: 10px 15px;
}

.navbar-nav .nav-link:hover {
  background-color: #d7e7d0;
  border-radius: 5px;
}

.footer-menu {
  background-color: #00bfbf;
  padding: 10px;
  text-align: center;
}

.footer-menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.footer-menu ul li {
  display: inline-block;
  margin-right: 10px;
}

.footer-menu ul li a {
  text-decoration: none;
  color: #fff;
}

.footer-info {
  background-color: #008080;
  padding: 10px;
  text-align: center;
  color: #fff;
}


</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">QuizPW</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/Home">Home</a>
            <a class="nav-link" href="/DataMahasiswa">DataMahasiswa</a>
            <a class="nav-link" href="/Profile">Profile</a>
        </ul>
        </div>
    </div>
    </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-info">
            <p>&copy; {{ date('Y') }} TI21PA - Katarina Andrea</p>
        </div>
    </footer>

    <!-- Tambahkan script Anda di sini -->
</body>
</html>
