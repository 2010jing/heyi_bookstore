<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	/** 
	 * 购物车类 cookies 保存，保存周期为1天 注意：浏览器必须支持cookie才能够使用 
	 */ 

class Cart { 

	private $goodarray = array();
	private $bid;
	private $booktitle;
	private $bookimg;
	private $price;
	private $num;
	private $expires = 86400;



	public function __construct($bid='',$booktitle='',$bookimg='',$price='',$num='',$type=''){
		
		if ($bid != "" && $num !="") { 
			$this->bid = $bid;
			$this->booktitle = $booktitle;
			$this->bookimg = $bookimg;
			$this->price = $price;
			$this->num = $num;
			$this->addtocart($bid,$booktitle,$bookimg,$price,$num,$type);
		}
			
	}

	public function addtocart($bid,$booktitle,$bookimg,$price,$num,$type){

		if(!empty($_COOKIE['cart'])){
			//存在,检测是否存在相同的item, 如果没有,就记入一个新数组, 否则则修改数据
			if($this->checkitem($bid)){

				$this->modify($bid,$num,$type);
			}else{
				$this->add($bid,$booktitle,$bookimg,$price,$num);
			}

		}else{
			//不存在,创建新的cookie,并添加到 value
			$sum = $num * $price;
			$sum = number_format($sum, 2, '.', '');   // 1234.57（我一般用这个）

			$data = array(
		        "_".$bid => array('booktitle'=>$booktitle,'bookimg'=>$bookimg,'price'=>$price,'num'=>$num,'sum'=>$sum)
			);
			$this->save($data);
		}

	}


	//change the num of product
	public function modify($bid,$num,$type='add'){
		$olddata = unserialize(get_cookie('cart',true));
		$cookie_id = "_".$bid;
		if($type == 'add'){
			$num = $olddata[$cookie_id]['num'] + $num;
			$olddata[$cookie_id]['num'] = $num;
			$sum = $num * $olddata[$cookie_id]['price'];
			$sum = number_format($sum, 2, '.', '');   // 1234.57（我一般用这个）
			$olddata[$cookie_id]['sum'] = $sum;

		}else if($type == 'change'){
			$olddata[$cookie_id]['num'] = $num;
		}

		$new_data = serialize($olddata);
		$cookie= array(
			'name'   => 'cart',
			'value'  => $new_data,
			'expire' => '86500'
		);
		set_cookie($cookie);

	}

	//add to shopcart
	public function add($bid,$booktitle,$bookimg,$price,$num){

		$olddata = unserialize(get_cookie('cart',true));
		$sum = $num * $price;
		$sum = number_format($sum, 2, '.', '');   // 1234.57（我一般用这个）
		$newdata = array("_".$bid=>array('booktitle'=>$booktitle,'bookimg'=>$bookimg,'price'=>$price,'num'=>$num,'sum'=>$sum));
		$olddata = array_merge($olddata, $newdata);
		

		$this->save($olddata);

	}

	//clear shopcart
	public function removeall(){
		$cookie= array(
			'name'   => 'cart',
			'value'  => '',
			'expire' => '0'
		);
		set_cookie($cookie);
	}

	//sava new cookie
	public function save($newdata){
		$new_data = serialize($newdata);
		$cookie= array(
			'name'   => 'cart',
			'value'  => $new_data,
			'expire' => '86500'
		);
		set_cookie($cookie);
	}
	// check if exist item  return true or false
	public function checkitem($bid){
		$cookie= get_cookie('cart',true);
		$cookie=unserialize($cookie);
		return array_key_exists("_".$bid,$cookie);
	}
	

} 
/* End of file Someclass.php */

?>
