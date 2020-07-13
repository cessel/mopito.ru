<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 08.07.2020
 * Time: 19:46
 */

class Routing extends Core {
	protected $region;
	protected $request_data;
	protected $data_type;
	public $Catalog;
	public $Theme;

	public function __construct() {
		global $Catalog;
		global $Theme;
		$this->Catalog = $Catalog;
		$this->Theme = $Theme;
		$this->slashes();
		$this->set_region();
		$this->set_request_data();
		$this->set_data_type();
		$this->route();
		echo '<pre>'.print_r($this->region,true).'</pre>';
		echo '<pre>'.print_r($this->data_type,true).'</pre>';
	}

	/**
	 *  Добавляем слеш в конце строки
	 */
	public function slashes(){

		if(substr($_SERVER['REQUEST_URI'], -1) != '/' && explode('/',$_SERVER['REQUEST_URI'])[1] != 'ajax') {
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: '.$_SERVER['REQUEST_URI'].'/');
		}

	}

	/**
	 * Определяем регион по домену
	 * @return mixed|string
	 */
	public function set_region(){
		$domain = $_SERVER['SERVER_NAME'];
		$domain_data = explode('.',$domain);
		$regions = $this->Catalog->get_all_regions();
		if(in_array($domain_data[0],$regions)){
			$region = $domain_data[0];
		}
		else if($domain_data[0] == SITE_DOMAIN ){
			$region = 'msk';
		}
		else{

			$region = 'msk';
		}
		$this->region = $region;
	}
	public function get_request_data(){
		$request = $_SERVER['REQUEST_URI'];
		$base_request = explode('?',$request);
		$request_data = explode('/',$base_request[0]);
		$request_data = array_values( array_filter( $request_data ) );
		return $request_data;
	}
	public function set_request_data(){
		$this->request_data = $this->get_request_data();
	}
	public function is_static_page(){

		$static_page_index_url = str_replace('//','',$this->Theme->get_theme_uri().'/'.implode('/',$this->request_data).'/index.php');
		$static_page_url = str_replace('//','',$this->Theme->get_theme_uri().'/'.implode('/',$this->request_data).'.php');
		if(file_exists($static_page_index_url)){
			return $static_page_index_url;
		}
		else if(file_exists($static_page_url)){
			return $static_page_url;
		}
		else{
			return false;
		}

	}
	public function set_data_type(){
		$request_data = $this->get_request_data();
		if($this->Catalog->is_product_exist($request_data[count($request_data)-1])){
			$this->data_type = 'product';
		}
		else if($this->Catalog->is_category_exist($request_data[count($request_data)-1],$this->region)){
			if(count($request_data)>1){
				$this->data_type = 'podcategory';
			}
			else{

				$this->data_type = 'category';
			}
		}
		else{
			$static_page = $this->is_static_page();
			if($static_page){
				$this->data_type = 'page';
			}
			else if(isset($this->request_data[0]) && $this->request_data[0] == 'set_redirects'){
				$this->data_type = 'set_redirects';
			}
			else{
				$this->data_type = '404';
			}
		}

	}
	public function route(){
		if($this->data_type == 'set_redirects' ){
			global $Redirects;
			$Redirects->set_redirects_page();
		}
	}

}

