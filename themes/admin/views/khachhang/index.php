<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Quản Lý Khách Hàng
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <a href="<?php echo Yii::app()->createUrl('khachhang/create') ?>"><button  class="btn btn-primary">Tạo Mới khách hàng</button></a>
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'khachhang-grid',
                        'dataProvider' => $model->search(),
                        'filter' =>$model,
                        'itemsCssClass' => 'table table-striped table-bordered table-hover dataTable no-footer',
                        'pager' => array(
                            'class' => 'CLinkPager',
                            'htmlOptions' => array(
                                'class' => 'pagination',
                            ),
                            'maxButtonCount' => 5,
                            'cssFile' => false,
                            'firstPageLabel' => false,
                            'lastPageLabel' => false,
                            'nextPageLabel' => 'Tiếp Theo',
                            'prevPageLabel' => 'Quay Lại',
                            'selectedPageCssClass'=>'paginate_button active',
                            'header' => false
                        ),
                        'columns' => array(
                            'khachhang_id',
                            'ten',
                            'email',
                            'phone',
                            array(
                                'class' => 'CButtonColumn',
                                'htmlOptions' => array('width' => '11%'),
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                    'view' => array(
                                        'options' => array('class' => 'btn btn-primary btn-circle'),
                                        'label' => '<i class="glyphicon glyphicon-search"></i>',
                                        'imageUrl' => false
                                    ),
                                    'update' => array(
                                        'options' => array('class' => 'btn btn-success btn-circle'),
                                        'label' => '<i class="glyphicon glyphicon-pencil"></i>',
                                        'imageUrl' => false
                                    ),
                                    'delete' => array(
                                        'options' => array('class' => 'btn btn-danger btn-circle'),
                                        'label' => '<i class="glyphicon glyphicon-remove"></i>',
                                        'imageUrl' => false,
                                        'click' => 'function(){return confirm("Bạn Có Chắc Chắn Muốn Xóa Dữ Liệu Này ?");}'
                                    ),
                                )
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
