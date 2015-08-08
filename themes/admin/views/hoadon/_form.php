<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hoadon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'khachhang_id'); ?>
		<?php echo $form->dropDownList($model,'khachhang_id',  Khachhang::model()->getKhachhangsName()); ?>
		<?php echo $form->error($model,'khachhang_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ngaymua'); ?>
		<?php echo $form->textField($model,'ngaymua',array('class'=>'form-control datetime')); ?>
		<?php echo $form->error($model,'ngaymua'); ?>
	</div>

	
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Mới' : 'Sửa', array('class' => 'btn btn-success')); ?>
	

<?php $this->endWidget(); ?>
<script type="text/javascript">
    $(function () {
        $('.datetime').datetimepicker({
            language: 'pt-BR',
            format: 'Y/m/d H:i:s'
        });
    });
</script>
