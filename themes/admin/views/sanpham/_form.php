<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sanpham-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'loaisanpham_id'); ?>
		<?php echo $form->dropDownList($model,'loaisanpham_id',  Loaisanpham::model()->getLoaisanphamsName()); ?>
		<?php echo $form->error($model,'loaisanpham_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ten'); ?>
		<?php echo $form->textField($model,'ten',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ten'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'masp'); ?>
		<?php echo $form->textField($model,'masp',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'masp'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mota'); ?>
		<?php echo $form->textField($model,'mota',array('size'=>60,'maxlength'=>90,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mota'); ?>
	</div>

	<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Mới' : 'Sửa', array('class' => 'btn btn-success')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->