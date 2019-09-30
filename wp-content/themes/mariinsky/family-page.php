<?php
    /*
    Template Name: family-page
    */
?>



<?php get_header(); ?>






            <div class="container " >
                <div class="row">
                  <div class="col-sm-7 ">

                      <div class="slider-for">
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-2-1.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-3.jpg" alt="image" draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-4-1.jpg" alt="image" draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-5.jpg" alt="image" draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-6-1.jpg" alt="image" draggable="false"/>
                          </div>
                      </div>

                      <div class="slider-nav">
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-2-1.jpg" alt="image"  draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-3.jpg" alt="image" draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-4-1.jpg" alt="image" draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-5.jpg" alt="image" draggable="false"/>
                          </div>
                          <div class="item">
                              <img src="http://mariinsky.by/wp-content/uploads/2017/11/комфорт-6-1.jpg" alt="image" draggable="false"/>
                          </div>
                      </div>

                  </div>


     <div class="col-sm-5 margin-top-30">
            <h2 class="text-center">FAMILY</h2>
<p>Двухместный номер с 1 кроватью отеля "Мариинский"- Просторный номер площадью 25м²,с двуспальной кроватью предлагает все удобства для самых требовательных гостей сегодня. Каждый из номеров отличается индивидуальным дизайном. В распоряжении гостей удобное рабочее место и мягкая мебель. Кроме того, номер порадует удобнейшей кроватью , которая гарантирует крепкий, восстанавливающий силы сон и полноценный отдых. Ванная комната оснащена душем , и в вашем распоряжении высококачественные косметические продукты в течение всего пребывания в отеле. </p>


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