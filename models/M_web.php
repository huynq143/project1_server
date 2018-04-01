<?php
	include_once('Database.php');

	Class M_web extends Database{
		//----------MÓN ĂN----------
		public function xemDanhSachMonAn(){
			$this->setQuery('select MaMA, TenMA, GioiThieu, Dongia, Anh, monan.MaDM, TenDM from monan inner join dm_monan where monan.MaDM = dm_monan.MaDM order by `MaMA` desc');
			return $this->loadAllRow();
		}

		public function xemMonAnTheoMa($maMon){
			$this->setQuery('select * from monan where `MaMA` = ?');
			return $this->loadRow(array($maMon));
		}

		public function xemDanhSachMonAnCoMaNhoHon($maMon, $soLuong){
			$this->setQuery('select * from monan where `MaMA` < ? order by `MaMA` desc limit 0,'.$soLuong);
			return $this->loadAllRow(array($maMon));
		}

		public function xemDanhSachMonAnCoMaLonHon($maMon, $soLuong){
			$this->setQuery('select * from monan where `MaMA` > ? limit 0,'.$soLuong);
			return $this->loadAllRow(array($maMon));
		}

		public function xemDanhSachMonAnTheoMaLoai($maLoai, $soLuong){
			$this->setQuery('select * from monan where `MaDM` = ? limit 0,'.$soLuong);
			return $this->loadAllRow(array($maLoai));
		}

		//---------THỨC UỐNG---------

		public function xemDanhSachThucUong(){
			$this->setQuery('select * from douong order by `MaDU` desc');
			return $this->loadAllRow();
		}

		public function xemThucUongTheoMa($maMon){
			$this->setQuery('select * from douong where `MaDU` = ?');
			return $this->loadRow(array($maMon));
		}

		public function xemDanhSachThucUongCoMaNhoHon($maMon, $soLuong){
			$this->setQuery('select * from douong where `MaDU` < ? order by `MaDU` desc limit 0,'.$soLuong);
			return $this->loadAllRow(array($maMon));
		}

		public function xemDanhSachThucUongCoMaLonHon($maMon, $soLuong){
			$this->setQuery('select * from douong where `MaDU` > ? limit 0,'.$soLuong);
			return $this->loadAllRow(array($maMon));
		}

		public function xemDanhSachThucUongTheoMaLoai($maLoai, $soLuong){
			$this->setQuery('select * from douong where `MaDM` = ? limit 0,'.$soLuong);
			return $this->loadAllRow(array($maLoai));
		}

		//--------------------LOẠI MÓN ĂN-------------------------

		public function xemDanhSachLoaiMonAn(){
			$this->setQuery('select * from dm_monan');
			return $this->loadAllRow();
		}

		//--------------------LOẠI THỨC UỐNG-------------------------

		public function xemDanhSachLoaiThucUong(){
			$this->setQuery('select * from dm_douong');
			return $this->loadAllRow();
		}
	}
?>