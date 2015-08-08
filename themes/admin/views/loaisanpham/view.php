<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo 'View  ' . $model->loaisanpham_id ?>
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
                                'loaisanpham_id',
                                'ten',
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>