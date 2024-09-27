<?php
require_once __DIR__ . '/vendor/autoload.php';

use Wpdew\Ebash;
$ebash = new EbashMan();

echo "<br>";

$pdo = new PDO("mysql:host=mysql;dbname=app;", 'user','secret');
$statement = $pdo->query("select * from uesrs");
$users = $statement->fetchAll(2);


	

?>
<!doctype html>
<html lang="ru">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Hello World! </title>
  </head>
  <body>

  <div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
      <span class="fs-4"> Starter template Nginx+PHP+Composer+MySql+phpMyAdmin</span>
    </a>
  </header>

  <main>
    <h1>Get started</h1>
    <p class="fs-5 col-md-8">
		Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones 
		example featuring some basic HTML and helpful links. 
	
	</p>

    <div class="mb-5">
      <a href="https://github.com/wpdew-com/Nginx-PHP-Composer-MySql-phpMyAdmin" class="btn btn-primary btn-lg px-4">Download examples</a>
    </div>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
        <h2>Starter projects</h2>
        <p>
			Ready to beyond the starter template? 
			Check out these open source projects that you can quickly duplicate to a new GitHub repository.
		</p>
        <ul class="icon-list">
          <li><a href="https://github.com/wpdew-com/Nginx-PHP-Composer-MySql-phpMyAdmin" rel="noopener" target="_blank">Docker project starter</a></li>
          
        </ul>
		<p>
			The project has a makefile for quick launch:<br>
			<code>make up</code> - start the project<br>
			<code>make down</code> - stop the project<br>
			<code>make restart</code> - restart the project<br>
			<code>make status</code> - project status<br>
		</p>
      </div>

      <div class="col-md-6">
        <h2>Guides</h2>
        <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
		<p>Use composer autoload class. <b><?= $ebash->getName('Aleksandr');?></b></p>
		<p>
		
			Use PDO to connect to the database. Open <a href="http://localhost:8081/" target="_blank">PhpMyAdmin</a><br>
			<?php foreach($users as $user): ?>
				<?= $user['username']; ?><br>
			<?php endforeach; ?>

		</p>
        <ul class="icon-list">
          <li><a href="https://github.com/wpdew-com/Nginx-PHP-Composer-MySql-phpMyAdmin/wiki">Quick start guide</a></li>
        </ul>
      </div>
    </div>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
    Created by the wpdew &middot; &copy; 2024
  </footer>
</div>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>