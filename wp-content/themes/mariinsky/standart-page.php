<?php
    /*
    Template Name: standart-page
    */
?>



<?php get_header(); ?>







            <div class="container " >
                <div class="row">
                  <div class="col-sm-7 ">

                      <div class="slider-for">
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-1.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-2.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-3.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-4.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-5.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-6.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-7.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-8.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-9.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-10.jpg" alt="image"  draggable="false"/>
                          </div>
                      </div>

                      <div class="slider-nav">
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-1.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-2.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-3.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-4.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-5.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-6.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-7.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-8.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-9.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="<?echo get_template_directory_uri()?>/img/appartment/STANDART/standart-10.jpg" alt="image"  draggable="false"/>
                          </div>
                      </div>

                  </div>


     <div class="col-sm-5 margin-top-30">
            <h2 class="text-center">STANDART</h2>
<p>Одноместные номера отеля "Мариинский"- это уютные комнаты площадью 15 м², которые источают стиль и современность. Каждый из номеров отличается индивидуальным дизайном. В распоряжении гостей удобное рабочее место и мягкая мебель. Кроме того, номер порадует удобнейшей кроватью , которая гарантирует крепкий, восстанавливающий силы сон и полноценный отдых. Ванная комната оснащена душем , и в вашем распоряжении  высококачественные косметические продукты в течение всего пребывания в отеле. </p>

             <?php $ID=get_the_ID();
             $price=get_post_meta( $ID, 'price', true );
             $places=get_post_meta( $ID, 'places', true ); ?>
             <div style="background-color: #f9f9f9;">
             <div class="col-md-12 col-sm-12 col-xs-12 text-center">
             <h3>Стоимость за сутки  : <?php echo $price; ?> BYN</h3>
             <h2>Вмещает : <?php for ($i = 1; $i <= $places; $i++) { echo '<i class="fa fa-male" aria-hidden="true"></i>';}
             ?></h2>
             <h2 >Бесплатный завтрак <i class="fa fa-cutlery" aria-hidden="true"></i>
             </h2></div></div>

      </div>

                    </div>
                </div>
            </div>







    <div class="container" style="background-color: #fff;border: 1px solid #ddd;">
<div class="servicescenter text-center" style ="padding: 10px;margin: 10px;">
<h3>Услуги и удобства: </h3></div>
<div class="row" style="text-align: center;">
<div class="col-md-4 col-sm-4 col-xs-12"><ul style="list-style: none;">
                                    <li>Бесплатная парковка</li>
                                    <li>Wi-Fi</li>
                                    <li>Телевизор</li>
                                </ul></div>
<div class="col-md-4 col-sm-4 col-xs-12"><ul style="list-style: none;">
                                    <li>Ванная комната</li>
                                    <li>Электрический чайник</li>
                                    <li>Шкаф</li>
                                </ul></div>
<div class="col-md-4 col-sm-4 col-xs-12"><ul style="list-style: none;">
                                    <li>Рабочий стол</li>
                                    <li>Вешалка для одежды</li>
                                    <li>Посуду</li>
                                </ul></div>
</div></div>






<?php get_footer(); ?>