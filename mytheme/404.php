<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Сайт с популярными рецептами от известного шеф повара Влада">
    <meta name="keywords" content="еда, готовка, шеф-повар, есть в, вкусная еда, быстро приготовить еду, еда для всех, десерты, жаркое, тушеное, варенное, ошибка, 404, не найден сайт, курица">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <link type="Image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/logo2.png" rel="icon">
    <title>Error 404</title>
</head>
<body>
<header>
        <?php get_header();?>
    </header>
    <main>
        <p>Упс, этой страницы не существует...</p>
        <p>Не растраивайся, возьми курочку</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="image">
    </main>
    <footer>
    <?php get_footer();?>
    </footer>
</body>
</html>