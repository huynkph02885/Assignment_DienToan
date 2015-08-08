<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo 'View  ' . $model->sanpham_id ?>
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
                                'sanpham_id',
                                 array(
                                    'name'=>'loaisanpham_id',
                                    'type'=>'raw',
                                    'value' => $model->getLoaisanphamName()
                                ),
                                'ten',
                                'masp',
                                'mota',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>