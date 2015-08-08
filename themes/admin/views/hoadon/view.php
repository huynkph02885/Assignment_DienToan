<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo 'View  ' . $model->hoadon_id ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $this->widget('zii.widgets.CDetailView', array(
                            'data' => $model,
                            'htmlOptions' => array(
                                'class' => 'table table-striped'
                            ),
                            'attributes' => array(
                                'hoadon_id',
                                array(
                                    'name'=>'khachhang_id',
                                    'type'=>'raw',
                                    'value' => $model->getKhachhangName()
                                ),
                                'ngaymua',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>