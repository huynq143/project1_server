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
                                        <?php
                                            if(isset($dssp)){

                                                //var_dump($dssp);
                                                echo 
                                                '<tbody>
                                                    <tr>                                            
                                                        <td>Tên</td>
                                                        <td><input type="text" name="ten" style="width: 100%;height: 100%;" value="'.$dssp->TenMA.'"/></td>
                                                    </tr>
                                                    <tr>                                            
                                                        <td>Giới thiệu</td>
                                                        <td><textarea style="width: 100%;" name="gioithieu">'.$dssp->GioiThieu.'</textarea></td>
                                                    </tr>
                                                    <tr>                                            
                                                        <td>Giá</td>
                                                        <td><input type="number" step="1" name="gia" style="width: 100%;height: 100%;" value="'.$dssp->Dongia.'"/></td>
                                                    </tr>
                                                    <tr>                                            
                                                        <td>Hình</td>
                                                        <td><input type="file" name="hinhSP" style="width: 100%;height: 100%;" /><img src="./public/images/'.$dssp->Anh.'"/></td>
                                                    </tr>
                                                    <tr>                                            
                                                        <td>Loại</td>
                                                        <td>
                                                            <select name="loai">
                                                                <optgroup label="Món ăn">';
                                                                    if($dssp->MaDM == 1)
                                                                        echo 
                                                                    '<option value="monan-1" selected>Món chính</option>
                                                                    <option value="monan-2">Món ăn vặt</option>
                                                                    <option value="monan-3">Cơm văn phòng</option>';
                                                                    else if($dssp->MaDM == 2)
                                                                        echo 
                                                                    '<option value="monan-1">Món chính</option>
                                                                    <option value="monan-2" selected>Món ăn vặt</option>
                                                                    <option value="monan-3">Cơm văn phòng</option>';
                                                                    else if($dssp->MaDM == 3)
                                                                        echo 
                                                                    '<option value="monan-1">Món chính</option>
                                                                    <option value="monan-2">Món ăn vặt</option>
                                                                    <option value="monan-3" selected>Cơm văn phòng</option>';
                                                                    echo
                                                                '</optgroup>
                                                                <optgroup label="Thức uống">
                                                                    <option value="thucuong-1">Trà sữa</option>
                                                                    <option value="thucuong-2">Cà phê</option>
                                                                    <option value="thucuong-3">Các loại khác</option>
                                                                </optgroup>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>                                            
                                                        
                                                        <td colspan="2"><input type="submit" name="btnThem" value="Cập nhật" style="width: 100%;height: 100%;" /></td>
                                                    </tr>
                                                </tbody>';
                                            }
                                        ?>
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
                            //--------
                            $ten = trim($_POST['ten']);
                            $gioithieu = trim($_POST['gioithieu']);
                            $gia = trim($_POST['gia']);
                            $bang = explode("-", $_POST['loai'])[0];
                            $madm = explode("-", $_POST['loai'])[1];

                            $now = new DateTime();
                            //echo $now->getTimestamp();

                            $extension = pathinfo($_FILES['hinhSP']['name'], PATHINFO_EXTENSION);
                            // echo '<pre>';
                            // var_dump($_FILES);
                            // echo $extension;
                            // echo '</pre>';

                            //----------

                            // echo $ten;
                            // echo $gioithieu;
                            // echo $gia;
                            // echo $bang;
                            // echo $madm;
                            $C_web = new C_web();
                            if($bang === 'monan')
                                $C_web->themMonAn($ten,$gioithieu,$gia,$now->getTimestamp().'-'.$_FILES['hinhSP']['name'],$madm);
                            else
                                $C_web->themThucUong($ten,$gioithieu,$gia,$now->getTimestamp().'-'.$_FILES['hinhSP']['name'],$madm);
                            
                            move_uploaded_file($_FILES['hinhSP']['tmp_name'], './public/images/'.$now->getTimestamp().'-'.$_FILES['hinhSP']['name']);
                            echo 'Đã thêm';
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