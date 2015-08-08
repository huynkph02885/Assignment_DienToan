<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'khachhang-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ten'); ?>
		<?php echo $form->textField($model,'ten',array('size'=>40,'maxlength'=>40,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ten'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>40,'maxlength'=>40,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Mới' : 'Sửa', array('class' => 'btn btn-success')); ?>

<?php $this->endWidget(); ?>

