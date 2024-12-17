<div class="container">
        <div>
            <div class="content">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="image"></a>
                <div class="text">
                    <a href="#" class="name">Запеченная курица с овощами гриль и ореховым соусом:</a>
                    <ul>
                            <li>курица</li>
                            <li>цукини</li>
                            <li>перец сладкий красный</li>
                            <li> стебли спаржии</li>
                            <li>сливочное масло</li>
                            <li>перец черный свежемолотый</li>
                            <li>соль морская...</li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg" alt="image"></a>
                <div class="text">
                    <a href="#" class="name">Индейка, запеченная в фольге:</a>
                    <ul>
                        <li>индейка филе</li>
                        <li>чеснок</li>
                        <li>лимоны</li>
                        <li>оливковое масло</li>
                        <li>соль</li>
                        <li>перец черный</li>
                        <li>паприка</li>
                        <li>зелень...</li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" alt="image"></a>
                <div class="text">
                    <a href="#" class="name">Воздушные мягкие венские вафли для электровафельницы:</a>
                    <ul>
                        <li>пшеничная мука</li>
                        <li>яйца куриные</li>
                        <li>сахар</li>
                        <li>сливочное масло</li>
                        <li>молоко</li>
                        <li>разрыхлитель</li>
                        <li>ванилин</li>
                        <li>соль...</li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img4.jpg" alt="image"></a>
                <div class="text">
                    <a href="#" class="name">Тирамису с ягодами:</a>
                    <ul>
                        <li>маскарпоне</li>
                        <li>печенье савоярди</li>
                        <li>крупные яйца</li>
                        <li>сахарная пудра</li>
                        <li>малина</li>
                        <li>голубика</li>
                        <li>клубника</li>
                        <li>ежевика...</li>
                    </ul>
                </div>
            </div>
            <?php if (have_posts()): while (have_posts()): the_post();?>
            <div class="content">
                <?php if (has_post_thumbnail()): ?>
                <a href="#"><img src="<?php the_post_thumbnail_url();?>" alt="img"></a>
                <?php endif;?>
                <div class="text">
                    <a href="#" class="name"><?php the_title(); ?></a>
                    <a href=""><?php the_content(); ?></a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="video_resept">
            <a href="#" class="name">Взбитый творог с клубникой</a>
            <div class="box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/videoimg1.jpg" alt=""></a></div>
            <a href="#" class="name">Запеченная слива</a>
            <div class="box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/videoimg2.jpg" alt=""></a></div>
            <a href="#" class="name">Запеченный лук</a>
            <div class="box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/videoimg3.jpg" alt=""></a></div>
        </div>
</div>