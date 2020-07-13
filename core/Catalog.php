<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 08.07.2020
 * Time: 22:12
 */

class Catalog extends Core{
	public function __construct() {

	}
	public function get_all_regions(){
		$sql = "SELECT `alco_12` FROM `alco_base_new` WHERE 1 GROUP BY `alco_12`";
		$result = self::sql($sql);
		$regions = [];
		while($row = mysqli_fetch_row($result)){
			$regions[] = $row[0];
		}
		return $regions;
	}
	public function get_all_cat_slugs(){
		$sql = "SELECT `alco_18` FROM `alco_base_new` WHERE 1 GROUP BY `alco_18`";
		$result = self::sql($sql);
		$main_cats = [];
		$all_cats = [];
		while($row = mysqli_fetch_row($result)){
			$main_cats[] = $row[0];
			$sub_cat_sql =  "SELECT `alco_22` FROM `alco_base_new` WHERE `alco_18` = '".$row[0]."' GROUP BY `alco_22`";
			$sub_cat_result = self::sql($sub_cat_sql);
			while($sub_cat_row = mysqli_fetch_row($sub_cat_result)){
				$all_cats[$row[0]][] = $sub_cat_row[0];
			}
		}

		return $all_cats;
	}
	public function is_product_exist($index){
		if(!empty($index)) {
			$sql = "SELECT `index_0` FROM `alco_base_new` WHERE `alco_70` =  '" . $index . "'";
			$result = self::sql( $sql );
			$row = mysqli_fetch_row($result);
			if($row){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function is_category_exist($index,string $region = ''){
		if(!empty($index)) {
			$sql = "SELECT `index_0` FROM `alco_base_new` WHERE `alco_18` =  '" . $index . "'";
			if(!empty($region)){
				$sql.= " AND `alco_12` = '".$region."'";
			}
			$result = self::sql( $sql );
			$row = mysqli_fetch_row($result);
			if($row){
				return true;
			}
			else{
				$sql = "SELECT `index_0` FROM `alco_base_new` WHERE `alco_22` =  '" . $index . "'";
				if(!empty($region)){
					$sql.= " AND `alco_12` = '".$region."'";
				}

				$result = self::sql( $sql );
				$row = mysqli_fetch_row($result);
				if($row){
					return true;
				}
				else{
					return false;
				}
			}
		}
		else{
			return false;
		}
	}

}


