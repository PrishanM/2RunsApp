    <div class="slider-bootstrap"><!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/taxi1.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/taxi1.jpg" alt="" title="" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/taxi2.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/taxi2.jpg" alt="" title="" />
            </div>
        </div>

    </div> <!-- /slider -->
    
    
    <div class="shout-box">
        <div class="shout-text">
          <h1>Quickest Taxi Ordering Ever</h1>
          <p>We work very hard to bring you the best services.<br> All the services are very quick and user friendly.</p>
        </div>
    </div>
    	<div class="row-fluid">
            <ul class="thumbnails center">
              <li class="span3">
                <div class="thumbnail">
                <h3>Hello iZombie</h3>
                  
                  	<div class="round_background r-grey">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/ic_car.png" alt="" class="">
                     </div>
                  
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                	 <h3>Hello iZombie</h3>
                     
                     <div class="round_background r-taxi-yellow ">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/ic_car_white.png" alt="" class="">
                     </div>
                 
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                	<h3>Hello iZombie</h3>
                  	<div class="round_background r-grey">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/ic_car.png" alt="" class="">
                     </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <h3>Hello iZombie</h3>
                  <div class="round_background r-taxi-yellow">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/ic_car_white.png" alt="" class="">
                     </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </div>
              </li>

            </ul>
        </div>


       
      <h3 class="header">Our Services
        <span class="header-line"></span> 
      </h3>
        
	  <div class="row-fluid">
      	<div class="span4">
          
          <ul class="list-icon">
          	<li>24x7 quick service</li>
            <li>Minimum respond time</li>
            <li>Safe travelling</li>
            <li>High customer preference</li>
            <li>Minimum cost</li>
            
          </ul>
       	 </div>
         
         <div class="span4">
          	<div class="showcase-small">
                <div class="text-icon pull-left">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/fatcow/ic_transport.png" width="33" height="33" alt="Font" />
                </div>
                <h4>getTaxi 01</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          	</div>
            <div class="showcase-small">
                <div class="text-icon pull-left">
                 <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/fatcow/ic_transport.png" width="33" height="33" alt="Font" />
                </div>
                <h4>getTaxi 02</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          	</div>
          </div>
          <div class="span4">
          	<div class="showcase-small">
                <div class="text-icon pull-left">
                 <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/fatcow/ic_transport.png" width="33" height="33" alt="Font" />
                </div>
                <h4>getTaxi 03</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          	</div>
            <div class="showcase-small">
                <div class="text-icon pull-left">
                 <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/fatcow/ic_transport.png" width="33" height="33" alt="Font" />
                </div>
                <h4>getTaxi 04</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          	</div>
          </div>
        
      </div>
      <!--
      <h3 class="header">Our customers
      	<span class="header-line"></span>  
      </h3>
      <div class="row-fluid center customers">
        <div class="span3 ">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/themeforest.png" alt="Themeforest" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/codecanyon.png" alt="Codecanyon" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/graphicriver.png" alt="Graphicriver" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/photodune.png" alt="Photodune" />
        </div>
          
		</div><!--/row-fluid-->
        
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRandom',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->