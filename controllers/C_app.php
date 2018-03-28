<?php
	include_once('models/M_app.php');

	class C_app
	{

		//-----------------------------------BẢNG MÓN ĂN---------------------------------
	    public function danhSachMonAn()
	    {
	        $M_app = new M_app();
			$dsma = $M_app->xemDanhSachMonAn();
			echo json_encode($dsma);
			//echo '<pre>'; print_r($dsma); echo '</pre>';

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
	    
	}
?>