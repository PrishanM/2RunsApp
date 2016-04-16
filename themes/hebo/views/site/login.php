<?php
//$this->pageTitle=Yii::app()->name . ' - Login';
/*$this->breadcrumbs=array(
	'Login',
);*/
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  $("#header_columns").hide();
   
});
</script>
</br></br>
<center>
<h1 style="color:#4d4d4d;">getTaxi</h1>

<div class="well" style="background:#4d4d4d;">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'errorMessageCssClass'=>'alert alert-error',
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

	
	<?php echo $form->errorSummary($model,NULL,NULL,$htmlOptions=array('class'=>'alert alert-error')); ?>
	<fieldset>
		<?php echo $form->labelEx($model,'username',array("style"=>"color: #b88007;")); ?>
		<?php echo $form->textField($model,'username',array('placeholder'=>'User name')); ?>
		<?php echo $form->error($model,'username'); ?>

		<?php echo $form->labelEx($model,'password',array("style"=>"color: #b88007;")); ?>
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
		
		<!--<div>
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
		</div>-->
		
		
		<div>
		<?php
		echo '</br>';
		 $this->widget('zii.widgets.jui.CJuiButton', array(
				    'buttonType'=>'submit',
				    'name'=>'btnSubmit',
				    'value'=>'1',
				    'caption'=>'Log In',
				    'htmlOptions'=>array('class'=>'ui-button-primary','style'=>'background:#b88007;color:#ffffff;',) 
					)); 
		?>
		</div>
		</br>
		<div>
		
		<?php echo '<b style="color:#ffffff;">Are you a new user ?  '. CHtml::link('Sign Up',array('userTable/create')).' here </b>' ;?> 
		</div>
		
		
	<?php $this->endWidget(); ?>
</div><!-- well -->