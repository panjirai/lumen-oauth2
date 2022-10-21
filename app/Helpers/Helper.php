<?php
//app/Helpers/Envato/User.php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
  
class Helper {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */

   
    static public function anti_injection($string)
	{


		$data = stripslashes(strip_tags(htmlentities(htmlspecialchars($string, ENT_QUOTES))));
		$data =  str_replace("union", "", $data);
		$data =  str_replace("+", "", $data);
		$data =  str_replace("database", "", $data);
		$data =  str_replace("information_schema", "", $data);
		$data =  str_replace("tabel_name", "", $data);
		$data =  str_replace("columns", "", $data);
		return str_replace("'", "", $data);
	}
    static public function LoadDataTabel($Tabel, $Kondisi)
	{
		$Kon = '';

		if ($Kondisi != '') {
			$Kon = " where " . $Kondisi;
		}

		$sql = "select * from " . $Tabel . $Kon;

		$results = DB::select($sql);
		$dt = '';
		if (count($results) > 0) {
			$dt = $results;
		}
		return $dt;
	}


    
   
}