<!DOCTYPE html>
<html lang="en">
    <?php
        include_once('views/layout/head.php');
    ?>
    <body class="cm-no-transition cm-2-navbar">
        <?php
            include_once('views/layout/menu.php');
        ?>
        <?php
            include_once('views/layout/header.php');
        ?>
        
            <nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
                <div class="cm-flex">
                    <div class="nav-tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="components-text.html">Danh sách món ăn</a></li>
                            <li><a href="components-buttons.html">Danh sách thức uống</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid">
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tables</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <!-- <caption>with <code>.table-bordered</code> and <code>.table-hover</code></caption> -->
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên</th>
                                            <th>Giới thiệu</th>
                                            <th>Giá</th>
                                            <th>Hình</th>
                                            <th>Loại</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($dssp as $key => $value) {
                                            //echo $value->TenMA.'<br/>';
                                            echo '<tr>
                                            <th scope="row">'.$value->MaMA.'</th>
                                            <td>'.$value->TenMA.'</td>
                                            <td>'.$value->GioiThieu.'</td>
                                            <td>'.$value->Dongia.'</td>
                                            <td><img src="public/images/'.$value->Anh.'" width="100%"/></td>
                                            <td>'.$value->TenDM.'</td>
                                            <td><img src="demo/assets/img/sf/trashcan.svg"  width="100%"></td>
                                            </tr>';
                                        }
                                        
                                        
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-fw fa-info-circle"></i> Clearmin uses <a href="http://www.google.com/fonts#ChoosePlace:select/Collection:Roboto">Roboto font</a> by Google Inc. (Apache 2.0) 
                </div> -->
            </div>
            <?php
                include_once('views/layout/footer.php');
            ?>
        </div>
        <?php
            include_once('views/layout/script.php');
        ?>
    </body>
</html>