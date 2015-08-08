<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'chitiethoadon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'sanpham_id'); ?>
		<?php echo $form->dropDownList($model,'sanpham_id',  Sanpham::model()->getSanphamsName()); ?>
		<?php echo $form->error($model,'sanpham_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hoadon_id'); ?>
		<?php echo $form->dropDownList($model,'hoadon_id', Hoadon::model()->getHoadonId()); ?>
		<?php echo $form->error($model,'hoadon_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'soluongmua'); ?>
		<?php echo $form->textField($model,'soluongmua',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'soluongmua'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'khuyenmai'); ?>
		<?php echo $form->textField($model,'khuyenmai',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'khuyenmai'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'baohanh'); ?>
		<?php echo $form->textField($model,'baohanh',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'baohanh'); ?>
	</div>

	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Mới' : 'Sửa',array('class'=>'btn btn-success')); ?>
	

<?php $this->endWidget(); ?>

