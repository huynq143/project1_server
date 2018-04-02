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
        
            
        </header>
        <div id="global">
            <div class="container-fluid">
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">Tables</div> -->
                            <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table class="table table-bordered table-hover">
                                        <!-- <caption>with <code>.table-bordered</code> and <code>.table-hover</code></caption> -->
                                        
                                        <tbody>
                                            <tr>                                            
                                                <td>Tên</td>
                                                <td><input type="text" name="" style="width: 100%;height: 100%;" /></td>
                                            </tr>
                                            <tr>                                            
                                                <td>Giới thiệu</td>
                                                <td><textarea style="width: 100%;"></textarea></td>
                                            </tr>
                                            <tr>                                            
                                                <td>Giá</td>
                                                <td><input type="number" step="1" name="" style="width: 100%;height: 100%;" /></td>
                                            </tr>
                                            <tr>                                            
                                                <td>Hình</td>
                                                <td><input type="file" name="hinhSP" style="width: 100%;height: 100%;" /></td>
                                            </tr>
                                            <tr>                                            
                                                <td>Loại</td>
                                                <td>
                                                    <select>
                                                        <optgroup label="Món ăn">
                                                            <option>Món chính</option>
                                                            <option>Món ăn vặt</option>
                                                            <option>Cơm văn phòng</option>
                                                        </optgroup>
                                                        <optgroup label="Thức uống">
                                                            <option>Trà sữa</option>
                                                            <option>Cà phê</option>
                                                            <option>Các loại khác</option>
                                                        </optgroup>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>                                            
                                                
                                                <td colspan="2"><input type="submit" name="btnThem" value="Thêm" style="width: 100%;height: 100%;" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php
                //var_dump($_FILES); 
                if(isset($_POST['btnThem'])){
                    if(isset($_FILES['hinhSP'])){
                        if($_FILES['hinhSP']['error'] > 0){
                            echo 'File upload lỗi';
                        }else{
                            move_uploaded_file($_FILES['hinhSP']['tmp_name'], './public/images/'.$_FILES['hinhSP']['name']);
                            echo 'ok';
                        }
                    }else{
                        echo 'chưa chọn file';
                    }
                }

                ?>
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