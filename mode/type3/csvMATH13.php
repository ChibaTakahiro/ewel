<?PHP
		echo "¸¼,".mb_convert_encoding($tlist[ 'testname' ],"SJIS","UTF-8")."\n";
		echo "p[gi[éÆ,".mb_convert_encoding($tlist[ 'ptname' ],"SJIS","UTF-8")."\n";
		echo "ÚqéÆ,".mb_convert_encoding($tlist[ 'cname' ],"SJIS","UTF-8")."\n";
		echo "Ô,";
		echo "óÒID,";
		echo "óÒ¼,";
		echo "óÒ¼©È,";
		echo "¶Nú,";
		echo "Nî,";
		echo "«Ê,";
		echo "Û,";
		echo "P,";
		echo "Q,";
		echo "óú,";
		echo "óJnÔ,";
		echo "óÔ,";


		for($i=1;$i<=30;$i++){
			$kaito = "ñ".$i;
			echo $kaito.",";
		}
		echo 'c¬Í'.",";
		echo 'ªÍÍ'.",";
		echo 'IðÍ'.",";
		echo '\ªÍ'.",";
		echo '\»Í'.",";
		echo 'vf_'.",";
		echo 'vXRA'.",";
		echo 'vx'.",";
		echo 'c¬ÍÎ·'.",";
		echo 'ªÍÍÎ·'.",";
		echo 'IðÍÎ·'.",";
		echo '\ªÍÎ·'.",";
		echo '\»ÍÎ·'.",";

		echo "\n";
		foreach($tlist['ans'] as $key=>$val){
			if(is_numeric($val[ 'number' ])){
				echo $val[ 'number' ].",";
				echo $val[ 'exam_id' ].",";
				echo mb_convert_encoding($val[ 'name' ],'sjis-win','UTF-8').",";
				echo mb_convert_encoding($val[ 'kana' ],'sjis-win','UTF-8').",";
				echo mb_convert_encoding($val[ 'birth' ],'sjis','UTF-8').",";
				echo mb_convert_encoding($val[ 'age' ],'sjis','UTF-8').",";
				echo mb_convert_encoding($a_gender[$val[ 'sex' ]],'sjis','UTF-8').",";
				echo mb_convert_encoding($val[ 'pass' ],'sjis','UTF-8').",";
				$memo1 = preg_replace("/\n|\r/","",$val[ 'memo1' ]);
				echo mb_convert_encoding($memo1,'sjis','UTF-8').",";
				$memo2 = preg_replace("/\n|\r/","",$val[ 'memo2' ]);
				echo mb_convert_encoding($memo2,'sjis','UTF-8').",";
				if($val[ 'exam_state' ] == 2){
					echo mb_convert_encoding($val[ 'exam_date'  ],'sjis','UTF-8')." ,";
				}elseif($val[ 'exam_state' ] == 1){
					echo "ó,";
				}else{
					echo "¢ó,";
				}
				
				echo mb_convert_encoding($val[ 'start_time' ],'sjis','UTF-8')." ,";
				
				echo mb_convert_encoding($val[ 'exam_time'  ],'sjis','UTF-8')." ,";
				
				for($i=1;$i<=30;$i++){
					$ans = "ans".$i;
					echo mb_convert_encoding($val[$ans],'Shift-JIS','UTF-8').",";
				}
				echo mb_convert_encoding($val[ 'haku_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'bunseki_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sentaku_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'yosoku_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'hyogen_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sogo_yoso' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sogo_score' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'level' ],"Shift-JIS","UTF-8").",";

				echo mb_convert_encoding($val[ 'haku_hensa' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'bunseki_hensa' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'sentaku_hensa' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'yosoku_hensa' ],"Shift-JIS","UTF-8").",";
				echo mb_convert_encoding($val[ 'hyogen_hensa' ],"Shift-JIS","UTF-8").",";

				echo "\n";
			}
		}

?>