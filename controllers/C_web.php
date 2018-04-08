<?php
	session_start();
	include_once('models/M_web.php');

	class C_web
	{	

		//<><><><><><><><><><><><><><><><><><><><><><><><><>WEB QLSP<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>

	    public function adminTrangChu(){
	    	//echo 'ahihi';
	    	// $dssp = $this->danhSachMonAn();
	    	//$dssp = array('mot','hai','ba');
	    	require_once('views/V_admin_trang_chu.php');
	    }

	    public function danhSachSanPham(){
	    	$dssp = $this->danhSachMonAn();
	    	require_once('views/V_admin_danh_sach_san_pham.php');
	    }

	    public function trangThemSanPham(){
	    	require_once('views/V_admin_them_san_pham.php');
	    }

	    public function trangLogin(){
	    	require_once('views/V_admin_login.php');
	    	$M_web = new M_web();
	    	if(isset($_POST['btnDangNhap'])){
	    		$username = trim($_POST['username']);
	    		$password = trim($_POST['password']);
	    		//echo $username.$password;
	    		if($username=='' || $password ==''){
	    			echo 'Chưa nhập username hoặc password';
	    		}else{
	    			$thongTinUser = $M_web->dangNhap($username, $password);
	    			if(count($thongTinUser) > 0){
	    				//echo 'ok';
	    				$_SESSION['user'] = $thongTinUser[0];
	    				//var_dump($_SESSION['user']);
	    				header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	    				//var_dump($_SERVER);
	    				// echo '<pre>';
	    				// // print_r($_SERVER);
	    				// echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	    				// echo '</pre>';
	    			}else{
	    				echo 'Sai username hoặc password';
	    			}
	    		}
	    	}    	
	    }

	    public function themMonAn($ten, $gioithieu, $gia, $anh, $dm){
	    	//echo 'thêm nè';
	    	$M_web = new M_web();
	    	$M_web->themMonAn($ten, $gioithieu, $gia, $anh, $dm);
	    }

	    public function themThucUong($ten, $gioithieu, $gia, $anh, $dm){
	    	//echo 'thêm nè';
	    	$M_web = new M_web();
	    	$M_web->themThucUong($ten, $gioithieu, $gia, $anh, $dm);
	    }

	    public function xoaMonAn(){
	    	$M_web = new M_web();
	    	if(isset($_GET['ma']))
	    		$M_web->xoaMonAn($_GET['ma']);
	    }

		//-----------------------------------BẢNG MÓN ĂN---------------------------------
	    public function danhSachMonAn()
	    {
	        $M_app = new M_web();
			$dsma = $M_app->xemDanhSachMonAn();
			//echo json_encode($dsma);
			//echo '<pre>'; print_r($dsma); echo '</pre>';

			return $dsma;

	    }

	    public function danhSachMonAnCoMaNhoHon(){
	    	

			if(isset($_GET['ma']) && isset($_GET['soluong'])){
				//echo $_GET['hihi'].$_GET['hiuhiu'];
				$M_app = new M_app();
				$dsma = $M_app->xemDanhSachMonAnCoMaNhoHon($_GET['ma'], $_GET['soluong']);

				echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
			}else{
				echo 'Sai';
			}
	    }

	    public function danhSachMonAnCoMaLonHon(){
	    	

			if(isset($_GET['ma']) && isset($_GET['soluong'])){
				//echo $_GET['hihi'].$_GET['hiuhiu'];
				$M_app = new M_app();
				$dsma = $M_app->xemDanhSachMonAnCoMaLonHon($_GET['ma'], $_GET['soluong']);

				echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
			}else{
				echo 'Sai';
			}
	    }

	    public function chiTietMonAn(){
	    	if(isset($_GET['ma'])){
	    		$M_app = new M_app();
	    		$dsma = $M_app->xemMonAnTheoMa($_GET['ma']);

	    		echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
	    	}else{
	    		echo 'Sai';
	    	}
	    }

	    public function danhSachMonAnTheoMaLoai(){
	    	if(isset($_GET['maloai']) && isset($_GET['soluong'])){
				//echo $_GET['hihi'].$_GET['hiuhiu'];
				$M_app = new M_app();
				$dsma = $M_app->xemDanhSachMonAnTheoMaLoai($_GET['maloai'], $_GET['soluong']);

				echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
			}else{
				echo 'Sai';
			}
	    }
	    //---------------------------------------------------------------------------------------------------------------

	    //--------------------------------------THỨC UỐNG---------------------------------------------------
	    public function danhSachThucUong(){
	    	$M_app = new M_app();
			$dsma = $M_app->xemDanhSachThucUong();
			//var_dump($dsma);
			echo json_encode($dsma);
			//echo '<pre>'; print_r($dsma); echo '</pre>';
	    }

	    public function danhSachThucUongCoMaNhoHon(){
	    	

			if(isset($_GET['ma']) && isset($_GET['soluong'])){
				//echo $_GET['hihi'].$_GET['hiuhiu'];
				$M_app = new M_app();
				$dsma = $M_app->xemDanhSachThucUongCoMaNhoHon($_GET['ma'], $_GET['soluong']);

				echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
			}else{
				echo 'Sai';
			}
	    }

	    public function danhSachThucUongCoMaLonHon(){
	    	

			if(isset($_GET['ma']) && isset($_GET['soluong'])){
				//echo $_GET['hihi'].$_GET['hiuhiu'];
				$M_app = new M_app();
				$dsma = $M_app->xemDanhSachThucUongCoMaLonHon($_GET['ma'], $_GET['soluong']);

				echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
			}else{
				echo 'Sai';
			}
	    }

	    public function chiTietThucUong(){
	    	if(isset($_GET['ma'])){
	    		$M_app = new M_app();
	    		$dsma = $M_app->xemThucUongTheoMa($_GET['ma']);

	    		echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
	    	}else{
	    		echo 'Sai';
	    	}
	    }

	    public function danhSachThucUongTheoMaLoai(){
	    	if(isset($_GET['maloai']) && isset($_GET['soluong'])){
				//echo $_GET['hihi'].$_GET['hiuhiu'];
				$M_app = new M_app();
				$dsma = $M_app->xemDanhSachThucUongTheoMaLoai($_GET['maloai'], $_GET['soluong']);

				echo json_encode($dsma);
			
				//echo '<pre>'; print_r($dsma); echo '</pre>';
			}else{
				echo 'Sai';
			}
	    }

	    //----------------------LOẠI MÓN ĂN----------------------------
	    public function danhSachLoaiMonAn(){
	    	$M_app = new M_app();
			$dsma = $M_app->xemDanhSachLoaiMonAn();
			echo json_encode($dsma);
			//echo '<pre>'; print_r($dsma); echo '</pre>';
	    }

	    //----------------------LOẠI THỨC UỐNG----------------------------
	    public function danhSachLoaiThucUong(){
	    	$M_app = new M_app();
			$dsma = $M_app->xemDanhSachLoaiThucUong();
			echo json_encode($dsma);
			//echo '<pre>'; print_r($dsma); echo '</pre>';
	    }




	    // //<><><><><><><><><><><><><><><><><><><><><><><><><>WEB QLSP<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>

	    // public function adminTrangChu(){
	    // 	//echo 'ahihi';
	    // 	//$dssp = $this->danhSachMonAn();
	    // 	$dssp = array('mot','hai','ba');
	    // 	require_once('giaodien.php');
	    // }
	    
	}
?>