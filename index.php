<?php
	//include_once('models/M_mon_an.php');
	include_once('controllers/C_app.php');
	include_once('controllers/C_web.php');

	if(isset($_SESSION['user'])){
		if(isset($_GET['kihieu'])){
			// $hihi = $_GET['kihieu'];
			// echo $hihi;
			switch ($_GET['kihieu']) {

				case 'danh-sach-san-pham':
					//echo "admin dssp";
					$C_web = new C_web();
					$C_web->danhSachSanPham();
					break;

				case 'them-san-pham':
					//echo "món ăn nè hihi";
					$C_web = new C_web();
					$C_web->trangThemSanPham();
					break;
				case 'login':
					//echo "món ăn nè hihi";
					$C_web = new C_web();
					$C_web->trangLogin();
					break;
				case 'xoa-mon-an':
					//echo "món ăn nè hihi";
					$C_web = new C_web();
					$C_web->xoaMonAn();
					break;
				//----------------------MÓN ĂN-------------------------
				case 'danh-sach-mon-an':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachMonAn();
					break;

				case 'danh-sach-mon-an-co-ma-nho-hon':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachMonAnCoMaNhoHon();
					break;
				case 'danh-sach-mon-an-co-ma-lon-hon':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachMonAnCoMaLonHon();
					break;
				case 'chi-tiet-mon-an':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->chiTietMonAn();
					break;
				case 'danh-sach-mon-an-theo-ma-loai':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachMonAnTheoMaLoai();
					break;

				//----------------------THỨC UỐNG-----------------------
				case 'danh-sach-thuc-uong':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachThucUong();
					break;
				case 'danh-sach-thuc-uong-co-ma-nho-hon':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachThucUongCoMaNhoHon();
					break;
				case 'danh-sach-thuc-uong-co-ma-lon-hon':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachThucUongCoMaLonHon();
					break;
				case 'chi-tiet-thuc-uong':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->chiTietThucUong();
					break;
				case 'danh-sach-thuc-uong-theo-ma-loai':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachThucUongTheoMaLoai();
					break;
				//----------------------LOẠI MÓN ĂN------------------------
				case 'danh-sach-loai-mon-an':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachLoaiMonAn();
					break;

				//----------------------LOẠI THỨC UỐNG---------------------
				case 'danh-sach-loai-thuc-uong':
					//echo "món ăn nè hihi";
					$C_app = new C_app();
					$C_app->danhSachLoaiThucUong();
					break;
				


				default:
					echo "trang không tồn tại !!!";
					break;
			}
		}else{
			$C_web = new C_web();
			if(isset($_SESSION['user']))
				$C_web->adminTrangChu();
			else
				$C_web->trangLogin();
		}
	}else{
		$C_web = new C_web();
		 $C_web->trangLogin();
		//header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'index.php?kihieu=login');
	}

	// $C_app = new C_app();
	// $C_app->danhSachMonAn();
	//$dsma = $M_mon_an->xemDanhSachMonAn();
	//var_dump(json_encode($dsma,JSON_FORCE_OBJECT));
	//echo json_encode($dsma,JSON_PRETTY_PRINT);
	//print_r((json_encode($dsma)));

?>