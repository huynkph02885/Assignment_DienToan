<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav in" id="side-menu">
            <li>
                <a href="<?php echo Yii::app()->createUrl('site/index')?>" class="active"><i class="fa fa-home fa-fw"></i> Trang Chủ</a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('khachhang/index')?>"><i class="fa fa-user fa-fw"></i> Khách Hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('khachhang/create')?>">Tạo Mới Khách Hàng</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('khachhang/index')?>">Quản Lý Khách Hàng</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('hoadon/index')?>"><i class="fa fa-briefcase fa-fw"></i> Hóa Đơn<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('hoadon/create')?>">Tạo Mới Hóa Đơn</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('hoadon/index')?>">Quản Lý Hóa Đơn</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('loaisanpham/index')?>"><i class="fa fa-database fa-fw"></i>Loại Sản Phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('loaisanpham/create')?>">Tạo Mới Loại Sản Phẩm</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('loaisanpham/index')?>">Quản Lý Loại Sản Phẩm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('sanpham/index')?>"><i class="fa fa-bank fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('sanpham/create')?>">Tạo Mới Sản Phẩm</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('sanpham/index')?>">Quản Lý Sản Phẩm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('chitiethoadon/index')?>"><i class="fa fa-file fa-fw"></i> Chi Tiết Hóa Đơn<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('chitiethoadon/create')?>">Tạo Mới Chi Tiết Hóa Đơn </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('chitiethoadon/index')?>">Quản Lý Chi Tiết Hóa Đơn </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>