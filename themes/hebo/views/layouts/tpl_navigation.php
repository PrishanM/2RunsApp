<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php 
			$id = Yii::app()->session['role'];
			
			if($id != 'admin')
			{
			
			$this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions'=>array("data-description"=>"Welcome to getTaxi")),
						/*array('label'=>'Styles <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"6 styles"), 
                        'items'=>array(
                            array('label'=>'<span class="style" style="background-color:#0088CC;"></span> Style 1', 'url'=>"javascript:chooseStyle('none', 60)"),
							array('label'=>'<span class="style" style="background-color:#e42e5d;"></span> Style 2', 'url'=>"javascript:chooseStyle('style2', 60)"),
							array('label'=>'<span class="style" style="background-color:#c80681;"></span> Style 3', 'url'=>"javascript:chooseStyle('style3', 60)"),
							array('label'=>'<span class="style" style="background-color:#51a351;"></span> Style 4', 'url'=>"javascript:chooseStyle('style4', 60)"),
							array('label'=>'<span class="style" style="background-color:#b88006;"></span> Style 5', 'url'=>"javascript:chooseStyle('style5', 60)"),
							array('label'=>'<span class="style" style="background-color:#f9630f;"></span> Style 6', 'url'=>"javascript:chooseStyle('style6', 60)"),
                        )),*/

                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"What we are About"),),
                       
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Member Area")),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Member Area")),
						
                    ),
                )); 
			}
			else{
				$this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions'=>array("data-description"=>"Welcome to getTaxi")),						
						array('label'=>'User Management', 'url'=>array('/userTable/create'),'linkOptions'=>array("data-description"=>"Manage Users")),

                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"What we are About"),),
                       
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Member Area")),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Member Area")),
						
                    ),
                )); 
			}
			?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->