<?php


#Autor: Ivan Júnior - ijunior55@hotmail.com - http://www.facebook.com/profile.php?id=100000922224711


class dataCheckIJR{
	
	public function fullName($str, $of=8, $at=80){
		if(eregi('^[a−záéíóúàâêôãõçA-ZÁÉÍÓÚÀÂÊÔÃÕ ]{'. $of .','. $at .'}$', $str))
			return true;
		else
			return false;
	}
	
	public function nickName($str, $of=4, $at=28){
		if(eregi('^[^0-9][a−zA-Z0-9_]{'. $of .','. $at .'}$', $str))
			return true;
		else
			return false;
	}

	public function numericPassword($str, $of=4, $at=4){
		if(eregi('^[a−zA-Z0-9]{'. $of .','. $at .'}$', $str))
			return true;
		else
			return false;
	}
	
	public function mixedPassword($str, $of=6, $at=15){
		if(eregi('^[a−zA-Z0-9]{'. $of .','. $at .'}$', $str))
			return true;
		else
			return false;
	}
	
	public function email($str){
		if(eregi('^[^0-9][a-z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$', $str))
			return true;
		else
			return false;
	}
	
	public function phoneNumber($str){
		# (###)####-####
		if(eregi('^(\(?[2-9]{1}[0-9]{2}\)?|[0-9]{3,3}[-. ]?)[ ][0-9]{3,3}[-. ]?[0-9]{4,4}$', $str))
			return true;
		else
			return false;
	}
	
	public function postalCode($str){
		if(eregi('^[0-9]{5,5}([- ]?[0-9]{4,4})?$', $str))
			return true;
		else
			return false;
	}

	public function ipv4($str){
		if(eregi('^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$', $str))
			return true;
		else
			return false;
	}
	
	public function someDate($str){
		# DD/MM/YYYY
		
		if(eregi('^\d{1,2}\/\d{1,2}\/\d{4}$', $str))
			return true;
		else
			return false;
	}
	
	public function birthday($str, $minimAge=13){
		# DD/MM/YYYY
		if(eregi('^\d{1,2}\/\d{1,2}\/\d{4}$', $str) && substr(((substr($str, 6, 9).substr($str, 3,4).substr($str, 0,1))-date("Ymd")), 0,1) >= $minimAge )
			return true;
		else
			return false;
	}	
	
}
?>