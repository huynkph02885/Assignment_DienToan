<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php
                if ($model->isNewRecord) {
                    echo 'Tạo Mới Hóa Đơn';
                } else {
                    echo 'Sửa Hóa Đơn  ' . $model->hoadon_id;
                }
                ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php $this->renderPartial('_form', array('model' => $model)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>