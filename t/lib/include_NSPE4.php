<?PHP
class NSPE4method extends method{
	public function getTime($where){
		$test_id = $where[ 'testgrp_id' ];
		$type    = $where[ 'type'       ];
		$sql = "";
		$sql = "SELECT ";
		$sql .= " minute_rest,id,test_id ";
		$sql .= " ,rsei_type ";
		$sql .= " FROM ";
		$sql .= " t_test ";
		$sql .= " WHERE ";
		$sql .= " test_id=".$test_id." AND ";
		$sql .= " type=".$type." AND ";
		$sql .= " 1=1 ";


		$stmt = $this->db->prepare($sql);
        $stmt->execute();
        $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
		
	}
	public function setEa($where){
		
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];
		$start_time = date('Y-m-d H:i:s');

		
		$sql = "";
		$sql = " INSERT INTO nspe4_member ";
		$sql .= "(";
		$sql .= "test_id,testgrp_id,exam_id,start_time";
		$sql .= ")VALUES(";
		$sql .= $test_id.",".$testgrp_id.",'".$exam_id."'";
		$sql .= ",'".$start_time."'";
		$sql .= ")";

		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$id = $this->db->lastInsertId('id');

		$sql = "";
		$sql = " INSERT INTO nspe4_sec ";
		$sql .= "(";
		$sql .= "nspe4_id";
		$sql .= ")VALUES(";
		$sql .= $id;
		$sql .= ")";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		
	}
	
	public function getEa($where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];

		$sql = "";
		$sql = "SELECT ";
		$sql .= " sec.* ";
		$sql .= " FROM ";
		$sql .= " nspe4_member as dm";
		$sql .= " INNER JOIN (SELECT * FROM nspe4_sec ) as sec ON sec.nspe4_id=dm.id";
		$sql .= " WHERE ";
		$sql .= " dm.testgrp_id=".$testgrp_id." AND ";
		$sql .= " dm.test_id = ".$test_id." AND ";
		$sql .= " dm.exam_id ='".$exam_id."'";
		$sql .= " ORDER BY id desc ";
		$sql .= " LIMIT 1";
		$stmt = $this->db->prepare($sql);
        $stmt->execute();
        $rlt = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rlt;
	}
	
	public function setEaRst($set,$where){
		$testgrp_id = $where[ 'testgrp_id' ];
		$test_id    = $where[ 'test_id'    ];
		$exam_id    = $where[ 'exam_id'    ];

		foreach($set as $key=>$val){
			$clum .= $key."='".$val."',";
		}
		$clum = preg_replace("/,$/","",$clum);
		$sql = "";
		$sql = "UPDATE nspe4_sec SET ";
		$sql .= $clum;
		$sql .= " WHERE ";
		$sql .= " nspe4_id=";
		$sql .= "(";
		$sql .= "SELECT ";
		$sql .= " id ";
		$sql .= " FROM ";
		$sql .= " nspe4_member ";
		$sql .= " WHERE ";
		$sql .= " testgrp_id=".$testgrp_id." AND ";
		$sql .= " test_id = ".$test_id." AND ";
		$sql .= " exam_id ='".$exam_id."'";
		$sql .= " ORDER BY id desc LIMIT 1";
		$sql .= " )";
		
		$stmt = $this->db->prepare($sql);
        $stmt->execute();
 

	}
	

	
	public function setResult($array,$rs_id){
		$sougo_hen = $array[ 'sougo'    ];
		$read_hen  = $array[ 'yomitori' ];
		$und_hen   = $array[ 'rikai'    ];
		$sel_hen   = $array[ 'sentaku'  ];
		$chg_hen   = $array[ 'kirikae'  ];
		$info_hen  = $array[ 'jyoho'    ];

		
		$sql = "";
		$sql = "SELECT * FROM rs2_score ";
		$sql .= " WHERE ";
		$sql .= " rs_id = ".$rs_id." AND ";
		$sql .= " 1=1 ";
		
		$stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		if($row){
			$sql = "";
			$sql = "UPDATE rs2_score SET ";
			$sql .= " sougo=".$sougo_hen.",";
			$sql .= " yomitori=".$read_hen.",";
			$sql .= " rikai=".$und_hen.",";
			$sql .= " sentaku=".$sel_hen.",";
			$sql .= " kirikae=".$chg_hen.",";
			$sql .= " jyoho=".$info_hen."";
			$sql .= " WHERE ";
			$sql .= " rs_id=".$rs_id." AND ";
			$sql .= " 1=1 ";

		}else{
			$sql = "";
			$sql = "INSERT INTO rs2_score (";
			$sql .= "rs_id,sougo,yomitori,rikai,sentaku,kirikae,jyoho";
			$sql .= ")VALUES(";
			$sql .= $rs_id.",";
			$sql .= $sougo_hen.",";
			$sql .= $read_hen.",";
			$sql .= $und_hen.",";
			$sql .= $sel_hen.",";
			$sql .= $chg_hen.",";
			$sql .= $info_hen."";
			
			$sql .= ")";
		}
		$stmt = $this->db->prepare($sql);
        $stmt->execute();
		
	}
}


?>