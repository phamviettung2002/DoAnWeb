<?php
    require_once("models/car.php");
	require_once("models/daily.php");
	require_once("models/tinhthanhpho.php");
	require_once("models/dangkylaithu.php");
    require_once("models/db_module.php");
    require_once("models/danhsach.php");
    class Model 
    {
        public function getproductofpage(){
            $productofpage = 3;
            return $productofpage;
        }
        public function getpage(){
            $page = isset($_GET['page'])?$_GET['page']:1;
            $page = is_numeric($page)?$page:1;
            return $page;
        }
        public function getfrom(){
            $page = $this->getpage();
            $productofpage = $this->getproductofpage();
            $from = ($page - 1)*$productofpage;
            return $from;
        }

        // Lấy danh sách xe theo trang sản phẩm
        public function getcarlistbypage()
        {
            $link = null;
            taoKetNoi($link);
            $from = $this->getfrom();
            $productofpage = $this->getproductofpage();

            if(isset($_GET['dm'])){
                $result = chayTruyVanTraVeDL($link, "select * from tbl_car where id=".$_GET['dm']." limit ".$from.", ".$productofpage);
            }else{
                $result = chayTruyVanTraVeDL ($link, "select * from tbl_car limit ".$from.", ".$productofpage);
            }
            
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $car = new Car ($rows["id"], $rows["name"], $rows["title"], $rows["price"], $rows["color"], $rows["image"], $rows["image1"], $rows["image2"], $rows["description"], $rows["numberofseats"], $rows["style"], $rows["fuel"], $rows["origin"], $rows["gear"]);
                array_push($data, $car);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        // Lấy danh sách tất cả các xe
        public function getallcarlist()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_car");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $car = new Car ($rows["id"], $rows["name"], $rows["title"], $rows["price"], $rows["color"], $rows["image"], $rows["image1"], $rows["image2"], $rows["description"], $rows["numberofseats"], $rows["style"], $rows["fuel"], $rows["origin"], $rows["gear"]);
                array_push($data, $car);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        //Lấy danh sách xe đã đăng ký
        public function getcarsub ($username)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "SELECT tbl_car.name, tbl_daily.ten_daily, tbl_dangkylaithu.ngaydukien FROM (tbl_car INNER JOIN tbl_dangkylaithu ON tbl_car.id = tbl_dangkylaithu.id_car) INNER JOIN tbl_daily ON tbl_dangkylaithu.id_daily = tbl_daily.id_daily WHERE tbl_dangkylaithu.username ="."'$username'");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $car = new danhsach ($rows["name"], $rows["ten_daily"], $rows["ngaydukien"]);
                array_push($data, $car);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        // Lấy xe theo id
        public function getcar($id)
        {
            $allcars = $this->getallcarlist();
            foreach($allcars as $car){
                if ($car->getid()===$id){
                    return $car;
                }
            }
            return null;   
        }

        //Lấy tổng số sản phẩm
        public function getnumberrow(){
            $link = null;
            taoKetNoi($link);
            if(isset($_GET['dm'])){
                $result = chayTruyVanTraVeDL($link, "select count(*) from tbl_car where id = ".$_GET["dm"]);
            }else{
                $result = chayTruyVanTraVeDL ($link, "select count(*) from tbl_car");
            }
            $numberrow = mysqli_fetch_row($result);
            giaiPhongBoNho($link, $result);
            return $numberrow[0];
        }

        // Hàm đăng nhập
        public function Login($username, $password)
        {
            $link = null;
            taoKetNoi($link);
            $cautruyvan = "select * from tbl_user  where username = '$username' AND password='$password'";
            $result = chayTruyVanTraVeDL($link, $cautruyvan);
        
            $count = mysqli_num_rows($result);
            giaiPhongBoNho($link, $result);
            
            return $count;
        }

        // Hàm tìm kiếm
        public function Search($keyword)
        {
            $link = null;
            taoKetNoi($link);
            $from = $this->getfrom();
            $productofpage = $this->getproductofpage();
        
            $result = chayTruyVanTraVeDL($link, "select * from tbl_car where name like '%$keyword%'");
            $data = array();
            while ($rows = mysqli_fetch_assoc($result)) {
                $car = new Car($rows["id"], $rows["name"], $rows["title"], $rows["price"], $rows["color"], $rows["image"], $rows["image1"], $rows["image2"], $rows["description"], $rows["numberofseats"], $rows["style"], $rows["fuel"], $rows["origin"], $rows["gear"]);
                array_push($data, $car);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        // Hàm đăng ký
        public function Register($username, $password)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_user (username, password) VALUES ('$username','$password')");
        
        }
		//hàm lấy danh sách tất cả các thành phố
		 public function getalltinhthanhpholist()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select * from tbl_tinhthanhpho");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $tinhthanhpho = new tinhthanhpho($rows["id_tinhthanhpho"], $rows["ten_tinhthanhpho"]);
                array_push($data, $tinhthanhpho);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }
		//hàm lấy danh sách tất cả các đại lý
		 public function getalldailylist()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_daily");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $daily = new daily($rows["id_daily"], $rows["ten_daily"],$rows["id_tinhthanhpho"]);
                array_push($data, $daily);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }
		//hàm lấy danh sách đại lý theo thành phố
		 public function getdaily_thanhpho($key)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_daily where id_tinhthanhpho='$key'");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $daily = new daily($rows["id_daily"], $rows["ten_daily"],$rows["id_tinhthanhpho"]);
                array_push($data, $daily);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }
		//thêm dữ liệu trên bảng đăng ký lái thử
		 public function insert_dklt($hovaten,$id_car,$id_daily,$sodienthoai,$ten_tinhthanhpho,$ngaydukien, $username)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_dangkylaithu VALUES ('$hovaten','$id_car','$id_daily','$sodienthoai','$ten_tinhthanhpho','$ngaydukien','$username')");
        }
		// Lấy tỉnh thành phố theo id
        public function gettinhthanhpho($id_tinhthanhpho)
        {
            $alltinhthanhpho = $this->getalltinhthanhpholist();
            foreach($alltinhthanhpho as $ttp){
                if ($ttp->getid_tinhthanhpho()===$id_tinhthanhpho){
                    return $ttp;
                }
            }
            return null;   
        }
		public function getdaily($id_daily)
        {
            $alldaily = $this->getalldailylist();
            foreach($alldaily as $dl){
                if ($dl->getid_daily()===$id_daily){
                    return $dl;
                }
            }
            return null;   
        }
    }
?>