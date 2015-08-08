<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'loaisanpham-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ten'); ?>
		<?php echo $form->textField($model,'ten',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ten'); ?>
	</div>

	<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Mới' : 'Sửa', array('class' => 'btn btn-success')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->