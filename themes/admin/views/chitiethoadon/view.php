<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo 'View  ' . $model->chitiethoadon_id ?>
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
                                'chitiethoadon_id',
                                array(
                                    'name'=>'sanpham_id',
                                    'type'=>'raw',
                                    'value' => $model->getSanphamName()
                                ),
                                'hoadon_id',
                                'soluongmua',
                                'khuyenmai',
                                'baohanh',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>