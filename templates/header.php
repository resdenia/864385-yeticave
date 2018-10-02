<?php
	$is_auth = rand(0, 1);
			
$user_name = 'Anton'; // укажите здесь ваше имя
$user_avatar = 'img/user.jpg';

	 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">

<header class="main-header">
    <div class="main-header__container container">
        <h1 class="visually-hidden">YetiCavess</h1>
        <a class="main-header__logo">
            <img src="img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
        </a>
        <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru">
            <input type="search" name="search" placeholder="Поиск лота">
            <input class="main-header__search-btn" type="submit" name="find" value="Найти">
        </form>
        <a class="main-header__add-lot button" href="pages/add-lot.html">Добавить лот</a>

        <nav class="user-menu">


         <?php if ($is_auth): ?>
		 	<div class="user-menu__image">
				<img src="<?php echo $user_avatar;?>" width="40" height="40" alt="Пользователь">
			</div>
			<div class="user-menu__logged">
				<p><?php echo $user_name; ?></p>
			</div>
			<?php else: ?>
			<ul class="user-menu__list">
              <li class="user-menu__item">
                <a href="#">Регистрация</a>
              </li>
              <li class="user-menu__item">
                <a href="#">Вход</a>
              </li>
            </ul>
          <?php endif; ?>
        </nav>
    </div>
</header>
