<?php
    /*
    Template Name: mainpage
    */
?>



<?php get_header(); ?>


 <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?echo get_template_directory_uri()?>/img/slaider3-1.jpg" alt="Los Angeles">
                <div class="carousel-caption">

                    <div class="text">

                        <div class="horizontal">
                            <h3 style="color: #000000;font-weight: 300;letter-spacing: 4px;text-transform: uppercase;display: inline-block;color: #fff;background: #000000;padding: 2px 5px;" class="mb-4 mt-3">Отель "Марыінскі"</h3>

                        </div>
                    </div>
                    <p style="color: #000000;text-transform: uppercase;display: inline-block;color: #fff;background: #000000;padding: 2px 5px;">

                      Мы предлагаем гостям отличный сервис и широкий выбор услуг.
                    </p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?echo get_template_directory_uri()?>/img/slaider1-1.jpg" alt="Chicago">
                <div class="carousel-caption">

                    <div class="text">

                        <div class="horizontal">
                            <h3 style="color: #000000;font-weight: 300;letter-spacing: 4px;text-transform: uppercase;display: inline-block;color: #fff;background: #000000;padding: 2px 5px;" class="mb-4 mt-3">Завтрак</h3>

                        </div>
                    </div>
                    <p style="color: #000000;text-transform: uppercase;display: inline-block;color: #fff;background: #000000;padding: 2px 5px;">
                       В стоимость всех номеров включен континентальный завтрак. </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?echo get_template_directory_uri()?>/img/slaider2-1.jpg" alt="New York">
                <div class="carousel-caption">

                    <div class="text">

                        <div class="horizontal">
                            <h3 style="color: #000000;font-weight: 300;letter-spacing: 4px;text-transform: uppercase;display: inline-block;color: #fff;background: #000000;padding: 2px 5px;" class="mb-4 mt-3">ДИЗАЙН</h3>

                        </div>
                    </div>
                    <p style="color: #000000;text-transform: uppercase;display: inline-block;color: #fff;background: #000000;padding: 2px 5px;">Интерьеры отеля выполнены в европейском стиле , которые сочетают в себе современную обстановку и высочайший класс удобств .</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

<div style="background-color: #fafafa;">
    <div class="text-center">
    <h2>НОМЕРА &amp; ЦЕНЫ</h2>
        <div style="height: 2px;width: 80px;background: #ededed;margin: auto;"></div>
    <p>Мы рады показать вам свои номера</p>
    </div>




<div class="container">
    <div class="col-sm-12 text-right">
        <button type="submit" class="prev btn btn-default" id="btn1" name="btn1" value="1"><i class="fa fa-arrow-left" aria-hidden="true"></i>
            </button>
        <button class="next btn btn-primary" id="btn2" name="btn2" value="2" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
    </div>

    <div>

    </div>
    <div class="your-class">
        <?php $ID=52;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>

        <div><div class="rooms">
                <img src="<?echo get_template_directory_uri()?>/img/appartment/standart.jpg" class="center-block" alt="Цена и фотография одноместного номера">
                <h4 class="text-center">STANDART</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ За ночь</span>
                </p>
                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает : <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}?></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>
                <div class="text-center"><a href="<?php echo get_home_url(); ?>/standart/" class="btn price-button btn-book">Подробнее></a></div>

            </div></div>
        <?php $ID=57;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>
        <div><div class="rooms">

                <img src="<?echo get_template_directory_uri()?>/img/appartment/single.jpg" class="center-block" alt="Цена и фотография семейного номера">
                <h4 class="text-center">SINGLE</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ За ночь</span>
                </p>
                <div class="margin-top-10"></div>
                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает : <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}?></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>
                <div class="text-center"><a href="<?php echo get_home_url(); ?>/single/" class="btn price-button btn-book">Подробнее></a></div>

            </div></div>
        <?php $ID=59;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>
        <div><div class="rooms">

                <img src="<?echo get_template_directory_uri()?>/img/appartment/family.jpg" class="center-block" alt="Цена и фотография двухместного номера">
                <h4 class="text-center">FAMILY</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ За ночь</span>
                </p>
                <div class="margin-top-10"></div>
                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает : <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}?></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>    <div class="text-center"><a href="<?php echo get_home_url(); ?>/family/" class="btn price-button btn-book">Подробнее></a></div>
            </div></div>
        <?php $ID=63;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>
        <div><div class="rooms">

                <img src="<?echo get_template_directory_uri()?>/img/appartment/juniorsuit.jpg" class="center-block" alt="Цена и фотография номера люкс">
                <h4 class="text-center">JUNIOR SUIT</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ а ночь</span>
                </p>
                <div class="margin-top-10"></div>
                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает : <i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>   <div class="text-center"><a href="<?php echo get_home_url(); ?>/junior/" class="btn price-button btn-book">Подробнее></a></div>
            </div></div>
        <?php $ID=66;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>
        <div><div class="rooms">

                <img src="<?echo get_template_directory_uri()?>/img/appartment/family-studio.jpg" class="center-block" alt="Цена и фотография семейного номера">
                <h4 class="text-center">FAMILY STUDIO</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ за ночь</span>
                </p>
                <div class="margin-top-10"></div>


                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает : <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}?></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>
                <div class="text-center"><a href="<?php echo get_home_url(); ?>/family-studio/" class="btn price-button btn-book">Подробнее></a></div>

            </div></div>
        <?php $ID=71;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>
        <div><div class="rooms">

                <img src="<?echo get_template_directory_uri()?>/img/appartment/double.jpg" class="center-block" alt="Цена и фотография семейного номера">
                <h4 class="text-center">DOUBLE</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ за ночь</span>
                </p>
                <div class="margin-top-10"></div>


                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает :  <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}?></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>
                <div class="text-center"><a href="<?php echo get_home_url(); ?>/double/" class="btn price-button btn-book">Подробнее></a></div>

            </div></div>
        <?php $ID=75;
        $price=get_post_meta( $ID, 'price', true );
        $places=get_post_meta( $ID, 'places', true ); ?>
        <div><div class="rooms">

                <img src="<?echo get_template_directory_uri()?>/img/appartment/twin.jpg" class="center-block" alt="Цена и фотография семейного номера">
                <h4 class="text-center ">TWIN</h4>
                <p class="price text-center">
                    <span class="currency">BYN</span>
                    <span class="price-room"><?php echo $price;?></span>
                    <span class="per">/ per night</span>
                </p>
                <div class="margin-top-10"></div>


                <ul>
                    <li><i class="icon-check"></i> Завтрак включен в стоимость </li>
                    <li><i class="icon-check"></i> Вмещает :  <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}?></li>
                    <li><i class="icon-check"></i> Программа лояльности</li>
                </ul>
                <div class="text-center"><a href="<?php echo get_home_url(); ?>/twin/" class="btn price-button btn-book">Подробнее></a></div>
            </div></div>
    </div></div></div>




    <div class="container">
        <div class="row">
            <div class="col-md-4  text-center">
                <div class="services">
							<span class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 100.353 100.353" style="enable-background:new 0 0 100.353 100.353;height: 100px;" xml:space="preserve">
<g>
	<path d="M65.108,40.122c0.014-0.083,0.021-0.168,0.021-0.255c0-5.925-3.523-11.031-8.578-13.367v-9.922c0-0.829-0.672-1.5-1.5-1.5
		h-9.389c-0.829,0-1.5,0.671-1.5,1.5v9.999c-4.773,2.314-8.13,7.223-8.488,13.2v0c-1.352,22.776-8.5,29.983-8.572,30.054
		l1.035,1.086v1.5h44.525c0.62,0,1.173-0.385,1.396-0.964c0.223-0.578,0.063-1.237-0.396-1.654
		C73.581,69.726,65.509,62.161,65.108,40.122z M47.163,18.078h6.389v7.407c-1.015-0.222-2.066-0.347-3.147-0.347
		c-1.118,0-2.199,0.139-3.242,0.379V18.078z M31.104,69.418c2.591-3.99,6.572-12.72,7.566-29.462
		c0.403-6.737,5.448-11.818,11.734-11.818c6.351,0,11.54,5.078,11.72,11.388c-0.016,0.092-0.023,0.186-0.022,0.281
		c0.238,16.646,4.636,25.609,7.389,29.61H31.104z"/>
	<path d="M58.996,73.616c-0.828,0-1.5,0.672-1.5,1.5c0,3.752-3.052,6.804-6.803,6.804c-3.751,0-6.803-3.052-6.803-6.804
		c0-0.828-0.671-1.5-1.5-1.5s-1.5,0.672-1.5,1.5c0,5.406,4.397,9.804,9.803,9.804c5.406,0,9.803-4.397,9.803-9.804
		C60.496,74.288,59.824,73.616,58.996,73.616z"/>
	<path d="M20.653,60.729c-3.299-2.436-5.192-6.181-5.192-10.272c0-3.911,1.756-7.549,4.818-9.981
		c0.648-0.515,0.757-1.459,0.241-2.107c-0.516-0.649-1.46-0.757-2.107-0.241c-3.782,3.005-5.952,7.499-5.952,12.33
		c0,4.979,2.396,9.723,6.41,12.687c0.268,0.197,0.581,0.293,0.89,0.293c0.459,0,0.914-0.211,1.208-0.609
		C21.46,62.16,21.319,61.221,20.653,60.729z"/>
	<path d="M5.777,50.456c0-6.503,2.821-12.681,7.74-16.951c0.625-0.543,0.692-1.491,0.149-2.116
		c-0.544-0.626-1.491-0.693-2.116-0.149c-5.575,4.84-8.773,11.844-8.773,19.217c0,7.604,3.374,14.759,9.255,19.629
		c0.28,0.231,0.619,0.345,0.956,0.345c0.432,0,0.86-0.186,1.156-0.543c0.528-0.639,0.439-1.584-0.199-2.112
		C8.754,63.476,5.777,57.164,5.777,50.456z"/>
	<path d="M81.593,38.631c-0.648-0.517-1.591-0.408-2.108,0.239c-0.516,0.648-0.408,1.592,0.239,2.107
		c3.062,2.438,4.819,6.077,4.819,9.983c0,4.089-1.895,7.833-5.198,10.271c-0.667,0.492-0.809,1.432-0.316,2.098
		c0.294,0.398,0.748,0.609,1.208,0.609c0.31,0,0.622-0.096,0.89-0.293c4.019-2.966,6.417-7.708,6.417-12.686
		C87.543,46.135,85.374,41.641,81.593,38.631z"/>
	<path d="M88.448,31.742c-0.627-0.544-1.573-0.477-2.116,0.149s-0.476,1.573,0.149,2.116c4.92,4.271,7.742,10.449,7.742,16.951
		c0,6.711-2.979,13.023-8.171,17.318c-0.639,0.528-0.728,1.474-0.2,2.112c0.297,0.358,0.726,0.544,1.157,0.544
		c0.337,0,0.676-0.112,0.955-0.344c5.884-4.868,9.259-12.022,9.259-19.631C97.224,43.588,94.025,36.583,88.448,31.742z"/>
</g>
</svg>
							</span>
                    <h3>24/7 Стойка регистрации</h3>

                </div>
            </div>
            <div class="col-md-4  text-center ">
                <div class="services">
							<span class="icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 100.353 100.353" style="enable-background:new 0 0 100.353 100.353;height: 100px;" xml:space="preserve">
<g>
	<path style="fill:#231F20;" d="M49.996,3.85c-25.442,0-46.142,20.701-46.142,46.145c0,25.449,20.699,46.154,46.142,46.154
		c25.447,0,46.149-20.705,46.149-46.154C96.146,24.551,75.443,3.85,49.996,3.85z M49.996,93.181
		c-23.806,0-43.173-19.373-43.173-43.186c0-23.808,19.367-43.176,43.173-43.176c23.81,0,43.181,19.369,43.181,43.176
		C93.177,73.808,73.807,93.181,49.996,93.181z"/>
	<path style="fill:#231F20;" d="M58.597,26.441H31.905c-0.82,0-1.484,0.665-1.484,1.484v46.721c0,0.82,0.665,1.484,1.484,1.484
		h13.346c0.82,0,1.484-0.664,1.484-1.484V57.677h11.862c8.612,0,15.618-7.007,15.618-15.619S67.209,26.441,58.597,26.441z
		 M58.597,54.708H45.251c-0.82,0-1.484,0.664-1.484,1.484v16.969H33.39V29.409h25.208c6.975,0,12.649,5.674,12.649,12.649
		C71.246,49.033,65.572,54.708,58.597,54.708z"/>
	<path style="fill:#231F20;" d="M58.597,35.301H45.26c-0.82,0-1.484,0.665-1.484,1.484v9.048c0,0.82,0.665,1.484,1.484,1.484h13.337
		c0.82,0,1.484-0.665,1.484-1.484v-9.048C60.081,35.966,59.417,35.301,58.597,35.301z M57.113,44.349H46.744V38.27h10.369V44.349z"
    />
</g>
</svg>
							</span>
                    <h3>Охраняемая парковка</h3>

                </div>
            </div>
            <div class="col-md-4  text-center ">
                <div class="services">
							<span class="icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 99.313 99.313" style="enable-background:new 0 0 99.313 99.313;height: 100px;" xml:space="preserve">
<g>
	<path style="fill:#231F20;" d="M69.693,38.046c0.005,0,0.011,0,0.016,0c2.087,0,4.049-0.812,5.527-2.286
		c1.482-1.479,2.3-3.445,2.302-5.539c0.004-4.323-3.508-7.844-7.828-7.85c-0.002,0-0.005,0-0.007,0c-4.319,0-7.835,3.508-7.84,7.823
		c-0.004,2.096,0.811,4.068,2.292,5.552C65.634,37.229,67.602,38.046,69.693,38.046z M69.702,25.34c0.002,0,0.004,0,0.005,0
		c2.684,0.003,4.864,2.192,4.862,4.878c-0.001,1.3-0.509,2.521-1.429,3.439c-0.918,0.916-2.137,1.419-3.435,1.419
		c-0.003,0-0.007,0-0.01,0c-1.3,0-2.521-0.507-3.44-1.427c-0.92-0.922-1.426-2.147-1.424-3.451
		C64.835,27.519,67.019,25.34,69.702,25.34z"/>
	<path style="fill:#231F20;" d="M95.31,84.301L80.282,49.146l5.12-8.19c0.055-0.088,0.1-0.181,0.133-0.276
		c1.751-2.905,2.676-6.196,2.676-9.538c0.008-4.949-1.908-9.603-5.396-13.104c-3.489-3.503-8.137-5.437-13.088-5.444
		c-0.008,0-0.015,0-0.022,0c-10.2,0-18.51,8.292-18.526,18.496c0,3.393,0.928,6.703,2.687,9.59c0.028,0.071,0.062,0.141,0.103,0.208
		l2.779,4.667H21.197c-0.595,0-1.132,0.354-1.365,0.901L3.656,84.301c-0.195,0.458-0.148,0.985,0.126,1.401
		c0.275,0.416,0.74,0.667,1.239,0.667h88.927c0.499,0,0.964-0.25,1.239-0.667C95.459,85.286,95.505,84.759,95.31,84.301z
		 M56.524,39.338c-1.556-2.468-2.378-5.32-2.378-8.245c0.015-8.567,6.991-15.529,15.557-15.529c0.007,0,0.013,0,0.02,0
		c4.156,0.006,8.06,1.629,10.989,4.57c2.928,2.94,4.537,6.848,4.53,11.004c0,0.001,0,0.001,0,0.002c0,2.891-0.827,5.741-2.393,8.241
		c-0.054,0.084-0.097,0.173-0.13,0.265l-13.335,21.33l-8.768-14.724c-0.011-0.018-0.02-0.036-0.032-0.053l-3.928-6.596
		C56.622,39.511,56.578,39.422,56.524,39.338z M22.173,48.524h3.383c0.212,4.235,3.843,5.83,6.52,6.998
		c1.405,0.613,2.858,1.246,3.314,2.024c0.72,1.228,0.255,2.083-1.155,4.041c-1.289,1.789-2.894,4.015-1.796,6.934
		c1.702,4.526,10.53,5.742,20.208,6.678c1.757,0.169,3.273,0.316,4.225,0.478c7.474,1.269,9.984,5.506,10.802,7.726H7.267
		L22.173,48.524z M70.791,83.4c-0.676-2.552-3.356-8.944-13.423-10.652c-1.056-0.179-2.621-0.331-4.435-0.506
		c-5.363-0.519-16.523-1.598-17.715-4.768c-0.512-1.36,0.208-2.464,1.425-4.152c1.298-1.8,3.074-4.266,1.308-7.279
		c-0.944-1.611-2.848-2.441-4.688-3.244c-2.793-1.217-4.529-2.153-4.72-4.276h29.97l9.565,16.062c0.265,0.445,0.742,0.72,1.26,0.725
		c0.005,0,0.011,0,0.016,0c0.512,0,0.987-0.263,1.259-0.697l7.752-12.4L91.697,83.4H70.791z"/>
</g>
</svg>
							</span>
                    <h3>Удобное расположение</h3>

                </div>
            </div>

        </div>
    </div>






    <section class="bg-light" style="padding-bottom: 3em;">
        <div class="container">
            <div class="row">

                <div class="col-md-7 p-md-5">
                    <img src="<?echo get_template_directory_uri()?>/img/history-2.jpg">
                </div>
                <div class="col-md-4   pb-md-5  ">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Об отеле</h2>
                        </div>
                        <div style="height: 2px;width: 80px;background: #ededed;"></div>
                    </div>
                    <div class="pb-md-5 pb-4">
                        <p>
                           Отель "Марыінскі" - уникальный проект в Республике Беларусь для людей, ценящих комфорт и домашний уют.
Это номера, оборудованные всем необходимым как для краткосрочного, так для и длительного проживания. Мы предлагаем гостям отличный сервис и широкий выбор услуг.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #masthead -->

    <section id="new1" class="background sections ">
        <div class=" col-md-12 col-sm-12 col-xs-12">
            <h2 style="color:#fff;font-size: 3rem;" class="text-center"><br></h2>
            <p class="container text-center" style="color: #fff;"><br><br><br><br></p>
        </div>
    </section>


    <section class="bg-light" style="padding-bottom: 3em;">
        <div class="container">
            <div class="row">
                <div class="col-md-4   pb-md-5  ">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Континентальный завтрак</h2>
                        </div>
                        <div style="height: 2px;width: 80px;background: #ededed;"></div>
                    </div>
                    <div class="pb-md-5 pb-4">
                        <p>
                            Вам не придется рано утром искать кафе или ресторан,в стоимость всех номеров включен континентальный завтрак. </p>
                        <a href="<?php echo get_home_url(); ?>/breakfast/">Просмотреть завтрак</a>
                    </div>
                </div>
                <div class="col-md-7 p-md-5">
                    <img src="<?echo get_template_directory_uri()?>/img/breakfest.jpg">
                </div>

            </div>
        </div>
    </section>


    <div style="padding: 10px 0px 20px 0px;" class="text-white  bg-dark ">
        <div class="  " >

            <div class="col-md-6 px-0 container">
                <h1 class="display-4 text-center">Галерея</h1>
                <p class="lead my-3" style="display: none">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>

            </div>

            <div class="gallery">


               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_01_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_01.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_02_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_02.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_03_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_03.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_04_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_04.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_05_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_05.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_06_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_06.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_07_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_07.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_08_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_08.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_09_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_09.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_10_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_10.jpg"></a>
               <a style="margin: 10px;" href="<?echo get_template_directory_uri()?>/img/slider/gallery_11_full.jpg" data-lightbox="image"><img class="gallery-item-gost" src="<?echo get_template_directory_uri()?>/img/slider/gallery_11.jpg"></a>
            </div>



        </div>

    </div>






<?php get_footer(); ?>