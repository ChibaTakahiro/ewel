<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_AMP.php");
$obj = new BAmethod();
$amp = new AMPmethod();



$i=1;
$array_exam[1]['q'.$i++] = [
	'title'=>"あなたの役職 <span class='text-danger'>必須</span>",
	'list'=>[
		0=>"下記のリストより選択してください。"
		,1=>"社長・取締役"
		,2=>"社外取・顧問"
		,3=>"執行役員"
		,4=>"部長"
		,5=>"マネジャー"
		,6=>"リーダー"
		,7=>"その他"
	],
];
$array_exam[1]['q'.$i++] = [
	'title'=>"あなたの職種",
	'list'=>[
		0=>"下記の選択肢から当てはまるものにチェックをお願いします。"
		,1=>"取締役・執行役員・事業部長クラス"
		,2=>"経理・財務・税務"
		,3=>"経営企画・事業企画"
		,4=>"内部統制・内部監査"
		,5=>"社外取締役・監査役"
		,6=>"事業開発・新規事業"
		,7=>"営業"
		,8=>"マーケティング"
		,9=>"宣伝・広告"
		,10=>"商品企画"
		,11=>"販促"
		,12=>"人事"
		,13=>"総務"
		,14=>"法務・知財"
		,15=>"広報・PR"
		,16=>"IR"
		,17=>"情報システム"
		,18=>"研究開発"
		,19=>"SCM・ロジスティクス"
		,20=>"その他"
	],
];

$array_exam[1]['q'.$i++] = [
	'title'=>"所属組織の社員数",
	'list'=>[
		0=>"下記のリストより選択してください。"
		,1=>"１−３０人"
		,2=>"３１−１００人"
		,3=>"１０１人ー５００人"
		,4=>"５０１人ー５０００人"
		,5=>"５００１以上"
		,6=>"非公開"
	],
];

$array_exam[1]['q'.$i++] = [
	'title'=>"現在所属している企業の業界",
	'list'=>[
		0=>"下記のリストより選択してください。"
		,1=>"IT・インターネット"
		,2=>"メーカー"
		,3=>"商社"
		,4=>"流通・小売・サービス"
		,5=>"コンサルティング"
		,6=>"マスコミ・メディア"
		,7=>"エンターテインメント"
		,8=>"金融"
		,9=>"建設"
		,10=>"不動産"
		,11=>"メディカル"
		,12=>"インフラ（電気、ガス、水道、エネルギー、鉄道、航空、石油、輸送）"
		,13=>"人材・研修・教育"
		,14=>"その他（官公庁・非営利団体）"
	],
];

$array_exam[2]['q'.$i++] = "事業や経営、現場での業務で活用することを前提において、関連する知識・技術や手法を学ぶことに常に注力している";
$array_exam[2]['q'.$i++] = "組織が望ましい状況や動きとなるよう、同列の幹部、上役となる経営トップやオーナー、経営陣らへも主体的に働きかけている";
$array_exam[2]['q'.$i++] = "自らがとった判断や行動に責任をもち、事の成否に関わらず、その理由と結果を明確かつ論理的に説明している";
$array_exam[2]['q'.$i++] = "高い視座と広い視野から合理的かつ徹底的に思考することによって、価値を創造しビジョンを実現するための事業戦略や部門戦略を策定し、決断している";
$array_exam[2]['q'.$i++] = "ビジョンの実現に向け組織の力を最大化する人材・機能の組み方をデザインし、体制を作り上げている";
$array_exam[2]['q'.$i++] = "管轄するメンバーたちの状況に気を配り、タイムリーに相手に合った助言や指導を行い成長を促している";
$array_exam[2]['q'.$i++] = "戦略や戦術・施策の結果を客観的にとらえ、成功・失敗要因を明らかにしてその後の戦略に生かせている";
$array_exam[2]['q'.$i++] = "担当事業（会社）や部門がめざす将来の姿を自らの考えとして整理している";
$array_exam[2]['q'.$i++] = "社内外のステークホルダーと利害が一致しない場合であっても、信頼関係を維持、継続する努力をしている";
$array_exam[2]['q'.$i++] = "戦略が社内メンバーによって確実に実行されるものにするため、策定した戦略を具体的な目標や地に足のついた業務計画へとブレイクダウンしている";
$array_exam[2]['q'.$i++] = "関係者の利害が一致しない状況においても、ビジョンの実現に向け全体最適となる判断を下している";
$array_exam[2]['q'.$i++] = "担当する市場と組織の状況を正確に分析し、今後発生し得る「機会と脅威」を見極めている";
$array_exam[2]['q'.$i++] = "自らの見解だけに固執することなく、多様な考え方を柔軟に取り入れ視界を広げている";
$array_exam[2]['q'.$i++] = "多様な価値観を尊重し、さまざまな意見や考えあるいは知識を交換し合うことを通じて、創造性や革新性などの組織能力を高めている";
$array_exam[2]['q'.$i++] = "両立困難な矛盾する要請に直面しても、いずれか一つを選んだり、単に中間点をとるのではなく、双方納得させうるビジョンの実現に向け全体最適となる判断を下している";


$array_exam[3]['q'.$i++] = "戦略遂行におけるリスクや環境要因を予測しながら、具体的な計画や目標数値を策定している";
$array_exam[3]['q'.$i++] = "管轄するメンバーたちが自ら意識を高め成長していくための、効果的な仕組みや場を提供している";
$array_exam[3]['q'.$i++] = "社内メンバー、社外関係者に適宜権限の付与や働きかけを行い、効果的に組織を運営している";
$array_exam[3]['q'.$i++] = "担当事業（会社）や部門が、本来的に成し遂げるべきことや果たすべき使命を正しく理解している";
$array_exam[3]['q'.$i++] = "学んだ知識・技術や手法を部下や同僚、上役に積極的に共有することに務めている";
$array_exam[3]['q'.$i++] = "摩擦や軋轢をおそれず自らの意思や考えを明確に述べ、質問や批判に率直かつ堂々と答えることによって、利害関係者の理解と支持を取り付けている";
$array_exam[3]['q'.$i++] = "担当事業（会社）や部門の現状を客観的・論理的に分析するとともに、多様な情報を収集し将来を洞察することで、解決すべき課題を体系的に明らかにしている";
$array_exam[3]['q'.$i++] = "社内メンバーとのコミュニケーションや社外関係者とのコミュニケーションを通じて、事業現場や市場の状況をタイムリーに把握している";
$array_exam[3]['q'.$i++] = "個々人の能力を考慮した適切な権限委譲を行うとともに、各人に適合した学習と成長の機会を提供し、全社としての後継人材の育成を図っている";
$array_exam[3]['q'.$i++] = "戦略や方針を自分の言葉で分かりやすく語り、管轄する組織や関係者に向けてメッセージを発信・周知している";
$array_exam[3]['q'.$i++] = "自分なりのぶれない判断基準を作り、迷うような際にも保持している";
$array_exam[3]['q'.$i++] = "考え得る施策の中から事業や組織への影響度や緊急度を判断し、優先順位を明確に打ち出している";
$array_exam[3]['q'.$i++] = "過去の蓄積に頼るばかりでなく、新しい知見・技術や手法を外部から貪欲に吸収し、事業経営を担う一員として自己を成長させている";
$array_exam[3]['q'.$i++] = "高度な遵法精神や倫理性・社会性を備えた言行一致の誠実な態度と、高潔さや私心のない姿勢によって、さまざまな利害関係者と信頼ある人間関係を構築している";
$array_exam[3]['q'.$i++] = "いかに困難な状況にあっても、自らの信じるところに従って行動し、迫力と粘りでさまざまな障害を克服し、必ず業績をあげることにコミットしている";

$array_exam[4]['q'.$i++] = "担当部門（会社）のボードにおける自己の役割を広くとらえ、担当部門（会社）の長や利害関係者と補完しあいながら積極的に事業運営に関わっている";
$array_exam[4]['q'.$i++] = "影響の大きい取引先や社外関係者との関係を強化することで、事業にとって有益な情報や視点を得ている";
$array_exam[4]['q'.$i++] = "ビジョン・戦略の実行が困難な状況でも、実現に向けて最後までやり遂げている";
$array_exam[4]['q'.$i++] = "担当するマーケットや組織の状況を踏まえた上で、担当部門（会社）の戦略を担当チームにおける戦略・戦術へとブレイクダウンしている";
$array_exam[4]['q'.$i++] = "学んだ知識・技術や手法を事業や経営、現場の業務で実際に活用している";
$array_exam[4]['q'.$i++] = "常に率直にものを言える安心・安全の場を確保し、率直でオープンなコミュニケーションによって、社内メンバーや社外関係者の意見を引き出している";
$array_exam[4]['q'.$i++] = "担当する市場において、顧客に価値のあるサービスが提供できているか、顧客側の視点に立ち、絶えず確認しようとしている";
$array_exam[4]['q'.$i++] = "いかに困難あるいは不確実な状況にあっても自らの責任において敢然と決断し、不測の事態にも冷静かつ柔軟に対処しながら職責を完遂するという強い意思を持っている";
$array_exam[4]['q'.$i++] = "担当事業・組織に関する現状と将来予測を、担当部門（会社）のボードメンバーや利害関係者間で共有するなど、担当部門（会社）全体の意思決定に有効な材料を提供している";
$array_exam[4]['q'.$i++] = "既存事業の枠組みや業界の常識にとらわれずゼロベースで発想し、担当している商品・サービスの仕掛け・コンセプト、業務フロー等を打ち出している";
$array_exam[4]['q'.$i++] = "高い倫理意識を持ち、自らの行動指針や理念を明確化している";
$array_exam[4]['q'.$i++] = "つねにアンテナを高くし、市場の動向や事業環境の変化を敏感に読み取ろうとしている";



//ページ設定
if($_REQUEST[ 'page' ] || $_REQUEST[ 'nextPage' ]){
	$pager = ($_REQUEST['nextPage'])?$_REQUEST['nextPage']:1;
	if($pager >=2 ){
		$temp = "page";
	}else{
		$temp = "page1";
	}
	if($_REQUEST[ 'back' ]){
		if($_REQUEST[ 'backPage' ] == 1){ $temp = "page1";}
		else{
			$temp = "page";
		}
	}
}else{
	$pager = 1;
	$temp = "guide";
}


//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();

if($ua){
//	$where[ 'id'        ] = $testlink[0][tpid];
	$where[ 'testgrp_id'] = $_REQUEST['tid'];
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
	$where[ 'type'      ] = $first;
}else{
//	$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
}

//スタート時間の登録
$row = $amp->setStarttime($where);
$starttime = date($row[ 'starttime' ],strtotime("-1 minute"));
$times = $amp->getTime($where);
$endtime = date("Y-m-d H:i:s",strtotime($starttime."+".$times[ 'minute_rest' ]." minute"));

//--------------------------------
//回答登録
//--------------------------------
/*
if(count($_REQUEST[ 'q' ])){
	foreach($_REQUEST[ 'q' ] as $key=>$val){
		$q = "q".$key;
		$edit[ $q ] = $val;
	}
	$tbl = "t_testpaper";
	$obj->editDetail($tbl,$edit,$where);
	
}
*/




if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
}else{
	//初回以外テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}
}

$error = [];
//次のページ
//エラーチェック
if($_REQUEST[ 'next' ]){
	if($_REQUEST[ 'nextPage' ] == 2){
		$no = "";
		foreach($_REQUEST[ 'q' ] as $key=>$value){
			if($key == "q1"){
				$no = preg_replace("/q/","",$key);
				if(!$value) $error[$key] = $no.".が選択されていません。";
				if(count($error)) $temp = "page1";
			}
		}
	}

	if($_REQUEST[ 'nextPage' ] == 3){
		$no = "";

		for($i=5;$i<=19;$i++){
			$no = $i-4;
			$q = "q".$i;
			if(!$_REQUEST[ 'q' ][ 'q'.$i ]) $error[$i] = $no.".が選択されていません。";
			if(count($error)) $temp = "page";
		}
	}

	if($_REQUEST[ 'nextPage' ] == 4){
		$no = "";
		for($i=20;$i<=34;$i++){
			$no = $i-4;
			$q = "q".$i;
			if(!$_REQUEST[ 'q' ][ 'q'.$i ]) $error[$i] = $no.".が選択されていません。";
			if(count($error)) $temp = "page";
		}
	}
	if($_REQUEST[ 'nextPage' ] == 5){
		$no = "";
		for($i=35;$i<=46;$i++){
			$no = $i-4;
			$q = "q".$i;
			if(!$_REQUEST[ 'q' ][ 'q'.$i ]) $error[$i] = $no.".が選択されていません。";
			if(count($error)) $temp = "page";
		}
	}



	$where[ 'id' ] = $row[ 'id' ];
	$amp->setAMP($where);



	if(count($error) > 0 ){
		//エラーがあった時はコチラ
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){

		//テストデータ取得
		$tdetail = $amp->setStarttime($where);
		//6から回答を引く
		$point = [];
		$k=1;
		for($i=5;$i<=46;$i++){
			$q = "q".$i;
			$point[$k] = $tdetail[$q];
			$k++;
		}
		//構想力総合
		//設問5	設問8	設問12	設問16	設問19	設問23	設問27	設問32	設問34	設問37	設問40	設問42の合計
		$soten[1] = $point[5]+$point[8]+$point[12]+$point[16]+$point[19]+$point[23]+$point[27]+$point[32]+$point[34]+$point[37]+$point[40]+$point[42];
		//現状の把握
		//設問12	設問23	設問32	設問37	設問42
		$soten[2] = $point[12]+$point[23]+$point[32]+$point[37]+$point[42];
		//ビジョンの創造
		//設問8	設問19
		$soten[3] = $point[8]+$point[19];
		//戦略策定と組織形成
		//設問5	設問16	設問27	設問34	設問40
		$soten[4] = $point[5]+$point[16]+$point[27]+$point[34]+$point[40];
		//決断力総合
		//設問4	設問11	設問22	設問26	設問31	設問39
		$soten[5] = $point[4]+$point[11]+$point[22]+$point[26]+$point[31]+$point[39];
		//事業経営意思決定への参画
		//設問11	設問26	設問31	設問39
		$soten[6] = $point[11]+$point[26]+$point[31]+$point[39];
		//多様な利害・意見の中での全体最適判断
		//設問4	設問22
		$soten[7] = $point[4]+$point[22];
		//実行力総合
		//設問3	設問7	設問10	設問15	設問18	設問25	設問30	設問33	設問38
		$soten[8] = $point[3]+$point[7]+$point[10]+$point[15]+$point[18]+$point[25]+$point[30]+$point[33]+$point[38];
		//戦略の説明、周知、浸透
		//設問10	設問25
		$soten[9] = $point[10]+$point[25];
		//戦略の果断な遂行
		//設問7	設問18	設問33	設問38
		$soten[10] = $point[7]+$point[18]+$point[33]+$point[38];
		//業績へのコミット
		//設問3	設問15	設問30
		$soten[11] = $point[3]+$point[15]+$point[30];
		//リーダーシップ力総合
		//設問2	設問6	設問9	設問14	設問17	設問21	設問24	設問29	設問36	設問41
		$soten[12] = $point[2]+$point[6]+$point[9]+$point[14]+$point[17]+$point[21]+$point[24]+$point[29]+$point[36]+$point[41];
		//信頼の獲得
		//設問9	設問21	設問29	設問36	設問41
		$soten[13] = $point[9]+$point[21]+$point[29]+$point[36]+$point[41];
		//組織リードと育成
		//設問6	設問17
		$soten[14] = $point[6]+$point[17];
		//人と組織の能力開発
		//設問2	設問14	設問24
		$soten[15] = $point[2]+$point[14]+$point[24];
		//学習・自己成長力総合
		//設問1	設問13	設問20	設問28	設問35
		$soten[16] = $point[1]+$point[13]+$point[20]+$point[28]+$point[35];
		//外部からの知見吸収による自己の成長
		//設問13	設問28
		$soten[17] = $point[13]+$point[28];
		//不断の学びと経営・事業への連結
		//設問1	設問20	設問35
		$soten[18] = $point[1]+$point[20]+$point[35];
		$avg = [
			1=>"29.62",
			2=>"12.41",
			3=>"4.49",
			4=>"12.72",
			5=>"14.73",
			6=>"9.73",
			7=>"5",
			8=>"21.84",
			9=>"4.98",
			10=>"9.75",
			11=>"7.11",
			12=>"24.54",
			13=>"12.18",
			14=>"4.85",
			15=>"7.51",
			16=>"12.21",
			17=>"4.81",
			18=>"7.4"
		];
		$hensa = [
			1=>"9.085208314",
			2=>"3.946856568",
			3=>"1.755194311",
			4=>"3.856203188",
			5=>"4.830155695",
			6=>"3.126475409",
			7=>"1.836773632",
			8=>"6.921960369",
			9=>"1.808956393",
			10=>"3.089163203",
			11=>"2.411651012",
			12=>"7.509482221",
			13=>"3.761527736",
			14=>"1.799971941",
			15=>"2.320288209",
			16=>"3.985567397",
			17=>"1.685919106",
			18=>"2.428783625"
		];
		
		$result = [];
		foreach($soten as $key=>$value){
			$result[ 'soten' ][$key] = $value;
			
			$hpoint = (($value-$avg[$key])/$hensa[$key])*10+50;
			if($hpoint <= 20) $hpoint = 20;
			if($hpoint >= 80) $hpoint = 80;
			$result[ 'hensa' ][$key]=$hpoint;
		}
		$amp->setAMPAns($where,$result);

		$tdetail = [];
		$tdetail = $obj->getTestPaper($where);

		$s_day  = split( '/', $tdetail['exam_date'] ); 
		$s_time = split( ':', $tdetail['start_time'] ); 


		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();

		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		$set[ 'exam_state' ] = 2;
		$set[ 'level'      ] = $lv;
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];

		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);
		unset($where[ 'id' ]);
		$tbl = "t_testpaper";
		$obj->editDetail($tbl,$set,$where);

		//complete_flgの設定
		$t->editCompleteFlg($where);
		//メール配信
		$t->sendFinMail($where);
		$fin_disp = $test[ 'fin_disp' ];
		$temp = "Fin";
		
	}
}


if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
}

//テストデータ取得
$tdetail = $amp->setStarttime($where);


$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

?>