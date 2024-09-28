<h1 align="center">Nginx+PHP+Composer+MySql+phpMyAdmin</h1>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/wpdew/git_docs?color=56BEB8">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/wpdew/git_docs?color=56BEB8">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/wpdew/git_docs?color=56BEB8">

  <img alt="License" src="https://img.shields.io/github/license/wpdew/git_docs?color=56BEB8">

  <!-- <img alt="Github issues" src="https://img.shields.io/github/issues/wpdew/git_docs?color=56BEB8" /> -->

  <!-- <img alt="Github forks" src="https://img.shields.io/github/forks/wpdew/git_docs?color=56BEB8" /> -->

  <!-- <img alt="Github stars" src="https://img.shields.io/github/stars/wpdew/git_docs?color=56BEB8" /> -->
</p>

<!-- Status -->

<h4 align="center"> 
	🚧  Git_docs 🚀 Under construction...  🚧
</h4> 

<hr> 

<p align="center">
  <a href="#dart-про-збірку">Про збірку</a> &#xa0; | &#xa0; 
  <a href="#sparkles-використані-ресурси">Ресурси</a> &#xa0; | &#xa0;
  <a href="#rocket-технології">Технології</a> &#xa0; | &#xa0;
  <a href="#white_check_mark-вимоги">Вимоги</a> &#xa0; | &#xa0;
  <a href="#checkered_flag-команди">Команди</a> &#xa0; | &#xa0;
  <a href="#memo-license">License</a> &#xa0; | &#xa0;
  <a href="https://github.com/wpdew" target="_blank">Author</a>
</p>

<br>

## :dart: Про збірку ##


Цей простий репозиторій може допомогти вам встановити всі необхідні стеки для створення простих проектів PHP.

## :sparkles: Використані ресурси ##

:heavy_check_mark: MkDocs\
:heavy_check_mark: Material for MkDocs

| Stack  | Description |
| ------------- | ------------- |
| PHP  | PHP (рекурсивний акронім від PHP: Hypertext Preprocessor) — мова програмування, широко використовувана мова сценаріїв загального призначення з відкритим кодом, яка особливо підходить для веб-розробки та може бути вбудована в HTML. |
| Composer  | Composer — це інструмент для керування залежностями в PHP. Він дозволяє вам оголосити бібліотеки, від яких залежить ваш проект, і він буде керувати (встановлювати/оновлювати) ними.  |
| MySQL  | Система управління базами даних  |
| phpMyAdmin  | phpMyAdmin — це безкоштовний програмний інструмент, написаний на PHP, призначений для адміністрування MySQL через Інтернет. phpMyAdmin підтримує широкий спектр операцій з MySQL, MariaDB і MongoDB. Операції, які часто використовуються (керування базами даних, таблицями, стовпцями, відношеннями, індексами, користувачами, дозволами тощо) можна виконувати через інтерфейс користувача, у той час як у вас залишається можливість безпосередньо виконувати будь-який оператор SQL.  |


## :rocket: Технології ##

The following tools were used in this project:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [phpMyAdmin](https://www.phpmyadmin.net/)

## :white_check_mark: Вимоги ##

Перш ніж почати :checkered_flag:, вам потрібно встановити [Docker](https://docs.docker.com/get-started/get-docker/).

## Установка і запуск проекту. 

```
git clone https://github.com/wpdew-com/Nginx-PHP-Composer-MySql-phpMyAdmin .; rm .gitignore; rm readme.md; rm -r -fo .git; rm -rf .github; rm -rf site;
```

Запускаємо Docker та в корені проекту виконуємо команду:

```
make up
```

Після запуску відкриваємо браузер та переходимо за посиланням:

```
http://localhost:8080 - корінь проекту
http://localhost:8080/phpmyadmin - phpMyAdmin
```

Щоб зупинити проект виконуємо команду:

```
make down 
```

## :checkered_flag: Команди ##

* `make up` - Запуск проекту.
* `make down` - Зупинка проекту.
* `make restart` - Перезапуск проекту.
* `make logs` - Логи проекту.
* `make status` - Статус проекту.
* `make clean` - Очистка проекту.


## :memo: License ##

This project is under license from MIT. For more details, see the [LICENSE](LICENSE.md) file.


Made with :heart: by <a href="https://github.com/wpdew" target="_blank">WpDew</a>

&#xa0;

<a href="#top">Back to top</a>