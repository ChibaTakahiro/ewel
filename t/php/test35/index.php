<?PHP

require_once(D_PATH_HOME."t/lib/include_ba.php");
require_once(D_PATH_HOME."t/lib/include_MATH2.php");

$obj = new BAmethod();
$math  = new mathmethod();


	$ques = "問題";
	$array_exam[1] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>1
								,"img"=>"question1.png"
								,"question"=>"下図はＡ社が、2005年から販売している商品Ｑの売上高の推移を示しています。売上高の変化に関する説明のうち、もっとも適切なものはどれでしょうか。"
								,"a"=>array(
									 1=>"順調に売上を伸ばし続けているので、今後も売上の伸びは期待できる。"
									,2=>"発売した当初は市場でなかなか受け入れられなかったが、今後の売上の伸びは期待できる。"
									,3=>"発売した当初は急速に売上が伸びたが、その後、売上の伸びは鈍っている。"
									,4=>"発売した当初は伸び悩んでいたが、一時期急速に伸び、その後、再び売上の伸びは鈍っている。"
									,5=>"発売した当初は急速に売上が伸びた。その後、売上の伸びは一時的に鈍ったが、再び売上が伸び始めた。"
								),
							),
							"2"=>array(
								"no"=>2
								,"question"=>"パート勤務のＤさんはある日、午前9時から午後6時まで勤務しました。 ただし、正午から午後1時までは休憩時間とします。Ｄさんの時給を1,200円とすると、その日の賃金（日給）はいくらになりますか。 "
								,"a"=>array(
									 1=>"8,400円"
									,2=>"9,000円"
									,3=>"9,600円"
									,4=>"10,000円"
									,5=>"10,800円"
								),
							),

						)
					);


	$array_exam[2] = array(
						"no"=>3
						,"question"=>"下のグラフは運送業界各社の売上高を示しています。運送業界におけるＢ社の売上高のシェアはおよそ何％ですか。"
						,"img"=>"question3.png"
						,"a"=>array(
							1=>"19.5％"
							,2=>"25.5％"
							,3=>"30.2％"
							,4=>"76.5％"
							,5=>"512％"
						)
					);
	$array_exam[3] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>4
								,"img"=>"question4.png"
								,"question"=>"ある企業で行った健康診断で、従業員5名の身長、体重のデータからBMI（体格指数）を計算します。BMIは、体重（kg）÷（身長（m）×身長（m））で求められ、 この値が18.5以上25.0未満であれば標準体重であると判定されます。<br />5人のうち、標準体重であると判定されるのは何人ですか。"
								,"a"=>array(
									 1=>"0人"
									,2=>"1人"
									,3=>"2人"
									,4=>"3人"
									,5=>"4人"
								),
							),
							"2"=>array(
								"no"=>5
								,"img"=>"question5.png"
								,"question"=>"企業Ｐでの2010年度の男・女勤労者の平均賃金（1か月）と勤労者数を下表に示します。企業Ｐにおける2010年度の男女勤労者全体の平均賃金はいくらでしょうか。 "
								,"a"=>array(
									 1=>"317千円"
									,2=>"337千円"
									,3=>"356千円"
									,4=>"376千円"
									,5=>"396千円"
								),
							),

						)
					);



	$array_exam[4] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>6
								,"question"=>"ある工場の従業員1,000世帯を対象に、Ａ紙、Ｂ紙の2紙の新聞を購読している世帯数を調査したところ、次のような結果がでました。 
											<ul>
												<li>調査世帯数　・・・・・ 1,000世帯</li>
												<li>Ａ紙を購読している世帯数　 ・・・・・ 460世帯</li>
												<li>Ｂ紙を購読している世帯数 　・・・・・ 250世帯</li>
												<li>Ａ紙とＢ紙を同時に購読している世帯数　・・・・・ 100世帯</li>
											</ul>
											このとき、Ａ紙、Ｂ紙のどちらの新聞も購読していない世帯数はいくつですか。
											"
								,"a"=>array(
									 1=>"190世帯"
									,2=>"290世帯"
									,3=>"390世帯"
									,4=>"610世帯"
									,5=>"810世帯"
								),
							),
							"2"=>array(
								"no"=>7
								,"question"=>"小売店Ｍでは、原価4,000円の商品Ａに25％の利益を見込んで定価をつけましたが、この定価では売れなかったため、定価の15％引きの販売価格で売りました。このとき、小売店Ａが得た利益を次から選びなさい。"
								,"a"=>array(
									 1=>"200円"
									,2=>"250円"
									,3=>"300円"
									,4=>"350円"
									,5=>"400円"
								),
							),
							"3"=>array(
								"no"=>8
								,"question"=>"Ｑさんの2010年の月給は320,000円で、6月と12月にそれぞれ月給の150％の賞与を受け取りました。Ｑさんの年収の総額はいくらですか。"
								,"a"=>array(
									 1=>"480,000円"
									,2=>"960,000円"
									,3=>"3,840,000円"
									,4=>"4,320,000円"
									,5=>"4,800,000円"
								),
							),
							"4"=>array(
								"no"=>9
								,"question"=>"Ａ氏は100万円を5年定期預金に預けました。5年定期預金の年利率が2％(複利)だとすると、Ａ氏が5年後に受け取る金額(税引前)はいくらですか。"
								,"a"=>array(
									 1=>"1,082,432円"
									,2=>"1,100,000円"
									,3=>"1,104,080円"
									,4=>"1,120,000円"
									,5=>"1,126,162円"
								),
							),

						)
					);

	$array_exam[5] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>10
								,"img"=>"question10.png"
								,"question"=>"下の表はＭ銀行で適用された2010年10月～2011年3月のUSドル(USD)の為替相場の変化です。T.T.S.とは銀行で外貨を購入するときに適用されるレート、T.T.B.とは銀行で外貨を売却するときに適用されるレートです。<br />Ｘ氏はＭ銀行で2010年11 月15日に6,000ドルを購入し、2011年3月15日にすべて売却しました。このとき、為替差益(差損)はいくらですか。ただし、選択肢の＋の値は為替差益、－の値は為替差損を表しています。 "
								,"a"=>array(
									 1=>"-15,960円"
									,2=>"-8,040円"
									,3=>"-3,960円"
									,4=>"+8,040円"
									,5=>"+15,960円"
								),
							),
							"2"=>array(
								"no"=>11
								,"img"=>"question11.png"
								,"question"=>"下表は、ある業界の2008年3月期における実績売上高の順位を示しています。今後、Ｄ社とＥ社の2社が経営統合して新会社Ｖ社が設立され、Ｇ社、Ｈ社、Ｊ社の3社が経営統合して新会社Ｗ社が設立された場合、連結売上高の順位で5位になる会社はどれでしょうか。 "
								,"a"=>array(
									 1=>"Ｃ社"
									,2=>"Ｄ社"
									,3=>"Ｆ社"
									,4=>"Ｖ社"
									,5=>"Ｗ社"
								),
							),
						)
					);

	$array_exam[6] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>12
								,"img"=>"question12.png"
								,"question"=>"Ｖ社に勤務するＡ氏の，2010年の給与などの収入金額は7,120,000円，給与所得控除後の給与所得金額は5,208,000円，所得控除の合計額は2,550,000円でした。また，Ａ氏には給与所得以外の所得はありませんでした。このとき，所得税の速算表を用いて，Ａ氏が納めるべき所得税の金額(千円未満は切り捨て)を求めなさい。 "
								,"a"=>array(
									 1=>"157,000円"
									,2=>"168,000円"
									,3=>"265,000円"
									,4=>"614,000円"
									,5=>"1,001,000円"
								),
							),
							"2"=>array(
								"no"=>13
								,"img"=>"question13.png"
								,"question"=>"Ａ氏は自宅の最寄駅であるＸ駅からＹ駅経由でＺ駅にある会社まで通勤しています。Ｘ駅からＹ駅までは電車とバス、Ｙ駅からＺ駅までは電車とバスと地下鉄があり、各ルートの所要時間と運賃を示しています。Ａ氏は片道運賃が450円以内でもっとも早くＺ駅に到着するルートを選んで通勤しています。Ａ氏の通勤ルートはどれですか。ただし、Ｙ駅での乗り換えにかかる時間は考えないものとします。 "
								,"a"=>array(
									 1=>"電車→電車"
									,2=>"電車→バス"
									,3=>"電車→地下鉄"
									,4=>"バス→地下鉄"
									,5=>"バス→バス"
								),
							),
						)
					);


	$array_exam[7] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>14
								,"img"=>"question14.png"
								,"question"=>"Ｊ社では新製品を開発するためにマーケティングリサーチを行うことにしました。マーケティングにはさまざまな手法がありますが、マーケティング担当のＫ氏は調査手法と精度・費用の関係を下の表のように見積もりました。それぞれの手法を「評価＝5×精度－3×費用」という式を用いて評価し、もっとも評価が高かった手法を用いてマーケティングリサーチを行いました。Ｊ社がマーケティングリサーチに用いた手法はどれですか。 "
								,"a"=>array(
									 1=>"手法Ａ"
									,2=>"手法Ｂ"
									,3=>"手法Ｃ"
									,4=>"手法Ｄ"
									,5=>"手法Ｅ"
								),
							),
							"2"=>array(
								"no"=>15
								,"img"=>"question15.png"
								,"question"=>"購買担当のＮ氏は5社（Ａ社、Ｂ社、Ｃ社、Ｄ社、Ｅ社）から1社を選定して、ある製品を発注する予定です。選定基準は、見積価格、納期、購入実績、企業与信の4つの項目を5点満点で評価し、さらに見積価格は5、納期は4、購入実績は3、企業与信は2でそれぞれ重み付けした総スコアを計算し、総スコアが最も高い企業を選びます。それぞれの項目評価は下の表の通りでした。Ｎ氏が取引先に選んだ企業はどこですか。"
								,"a"=>array(
									 1=>"Ａ社"
									,2=>"Ｂ社"
									,3=>"Ｃ社"
									,4=>"Ｄ社"
									,5=>"Ｅ社"
								),
							),
						)
					);


	$array_exam[8] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>16
								,"img"=>"question16.png"
								,"question"=>"以下のデータはある食料品スーパー系列のＡ店、Ｂ店、Ｃ店、Ｄ店、Ｅ店の売上高、従業員数、店舗面積のリストです。この中から、従業員を最も効率的に活用して売上を上げている店舗を、模範店として選ぶことになりました。模範店に選ばれたのはどの店舗ですか。 "
								,"a"=>array(
									 1=>"Ａ店"
									,2=>"Ｂ店"
									,3=>"Ｃ店"
									,4=>"Ｄ店"
									,5=>"Ｅ店"
								),
							),
							"2"=>array(
								"no"=>17
								,"img"=>"question17.png"
								,"question"=>"Ｋ社は自社で開発した新製品の価格（単価）を設定しようとしています。下表は価格（単価）に対する予測需要個数を表しています。このとき、売り上げを最大にするには価格をいくらに設定すれば良いですか。 "
								,"a"=>array(
									 1=>"800円"
									,2=>"1,000円"
									,3=>"1,200円"
									,4=>"1,400円"
									,5=>"1,600円"
								),
							),
						)
					);

	$array_exam[9] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>18
								,"img"=>"question18.png"
								,"question"=>"ある商社では5つのプロジェクトＡ、Ｂ、Ｃ、Ｄ、Ｅを行うのか、やめるのかを検討しています。各プロジェクトの成功時の利益と失敗時の損失、各プロジェクトが成功する確率を、以下の表に示します。経営陣からは、期待利得（利益の期待値－損失の期待値）が最も大きいプロジェクトを1つだけ選択しなさいとの指示がなされました。どのプロジェクトを選択するべきでしょうか。"
								,"a"=>array(
									 1=>"プロジェクトＡ"
									,2=>"プロジェクトＢ"
									,3=>"プロジェクトＣ"
									,4=>"プロジェクトＤ"
									,5=>"プロジェクトＥ"
								),
							),
							"2"=>array(
								"no"=>19
								,"img"=>"question19.png"
								,"question"=>"あるコンビニエンスストアの過去6年間の年間売上高は、下表のとおりでした。直近の4年間の年間売上高の平均を求めることで、2011年の年間売上高を予測してください。"
								,"a"=>array(
									 1=>"3,954万円"
									,2=>"3,988万円"
									,3=>"4,005万円"
									,4=>"4,027万円"
									,5=>"4,084万円"
								),
							),
						)
					);

	$array_exam[10] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>20
								,"img"=>"question20.png"
								,"question"=>"下の図はある鉄道路線のＥ駅からの所要時間を示しています。Ｅ駅を18時53分発の電車に乗った時、Ｋ駅の到着時刻は何時何分ですか。 "
								,"a"=>array(
									 1=>"18時34分"
									,2=>"19時12分"
									,3=>"19時15分"
									,4=>"19時22分"
									,5=>"19時54分"
								),
							),
							"2"=>array(
								"no"=>21
								,"question"=>"食品販売会社であるＡ社の2010年の売上高は305億円でした。2011年2月に市場に投入した新商品が好調な売れ行きを示しているため、2011年の売上高は前年比4.5％増になると予測されています。 Ａ社の2011年の売上高は何億円と予測されますか。 "
								,"a"=>array(
									 1=>"13.7億円"
									,2=>"137.2億円"
									,3=>"318.7億円"
									,4=>"442.3億円"
									,5=>"623.7億円"
								),
							),
						)
					);


	$array_exam[11] = array(
						"no"=>22
						,"question"=>"Ａ社は6月1日にＢ社から製品Ｐを15,000個受注しました。製品ＰはＡ社の工場の工作機械Ｋで1時間に120個生産できます。工作機械ＫはＡ社の工場に3台ありますが、オペレーターがいなければ動かすことができません。6月2日から工作機械Ｋのオペレーター(Ｓ、Ｔ、Ｕ、Ｖ)が次のような予定で工作機械を稼動させた場合、製品Ｐの生産が完了する日は何月何日ですか。"
						,"img"=>"question22.png"
						,"a"=>array(
							 1=>"6月3日"
							,2=>"6月4日"
							,3=>"6月5日"
							,4=>"6月6日"
							,5=>"6月7日"
						)
					);

	$array_exam[12] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>23
								,"question"=>"食品会社であるＰ社は商品Ａと商品Ｂの売上高の推移を調べたところ、商品Ａの売上高は毎年200万円ずつ増加し、商品Ｂの売上高は毎年350万円ずつ増加していることがわかりました。2010年の商品Ａの売上高は6,300万円、商品Ｂの売上高が5,500万円でした。商品Ａと商品Ｂの売上高がこれからも毎年同じ金額ずつ増加するとするならば、商品Ｂの売上高が商品Ａの売上高を上回るのは何年後と予測されますか。 "
								,"a"=>array(
									 1=>"5年後"
									,2=>"6年後"
									,3=>"7年後"
									,4=>"8年後"
									,5=>"9年後"
								),
							),
							"2"=>array(
								"no"=>24
								,"question"=>"ある国の人口の変化を予測したところ、下表のようになりました。"
								,"img"=>"question24.png"
								,"a"=>array(
									 1=>"①"
									,2=>"②"
									,3=>"③"
									,4=>"④"
									,5=>"⑤"
								),
							),
						)
					);



	$array_exam[13] = array(
						"no"=>25
						,"question"=>"下の表は、Ｚ社の過去6年間の年間売上高を表しています。Ｚ社の過去6年間の年間売上高の推移を正しく表しているグラフはどれですか。"
						,"img"=>"question25.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[14] = array(
						'tmp'=>"page2"
						,'code'=>array(

							"1"=>array(
								"no"=>26
								,"question"=>"下の表は、デジタルカメラメーカー上位5社の出荷台数シェアを表しています。デジタルカメラメーカーの出荷台数シェアを正しく表している円グラフはどれですか。"
								,"img"=>"question26.png"
								,"a"=>array(
									 1=>"①"
									,2=>"②"
									,3=>"③"
									,4=>"④"
									,5=>"⑤"
								),
							),
							"2"=>array(
								"no"=>27
								,"question"=>"下の表は、デジタルカメラメーカー上位5社の出荷台数シェアを表しています。デジタルカメラメーカーの出荷台数シェアを正しく表している円グラフはどれですか。"
								,"img"=>"question27.png"
								,"a"=>array(
									 1=>"①"
									,2=>"②"
									,3=>"③"
									,4=>"④"
									,5=>"⑤"
								),
							),
						)
					);




	$array_exam[15] = array(
						"no"=>28
						,"question"=>"Ｋ社は自社で開発した新製品の価格（単価）を設定しようとしています。下表は価格（単価）に対する予測需要個数を表しています。このとき、売り上げを最大にするには価格をいくらに設定すれば良いですか。"
						,"img"=>"question28.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)        
					);

	$array_exam[16] = array(
						"no"=>29
						,"question"=>"株価チャートにおけるローソク足は、以下の定義で表されます。"
						,"img"=>"question29.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);

	$array_exam[17] = array(
						"no"=>30
						,"question"=>"ある家電メーカーは5つの電化製品Ａ、Ｂ、Ｃ、Ｄ、Ｅを販売しています。これらの製品の2010年度の売上高、市場占有率、市場成長率を調べた結果、下の表のようになりました。このデータをバブルチャートで表したものはどれですか。ここで、円の大きさ（面積）は売上高を表すものとします。"
						,"img"=>"question30.png"
						,"a"=>array(
							 1=>"①"
							,2=>"②"
							,3=>"③"
							,4=>"④"
							,5=>"⑤"
						)
					);


//ページ設定
//pageFlgはページャーを選択した時(BMS)
if($_REQUEST[ 'next' ] || $_REQUEST[ 'pageFlg' ]){
	$pager = $_REQUEST[nextPage];
}else{
	if($_REQUEST[ 'page' ]){
		$pager = 1;
	}
}


//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
//$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
$where[ 'type'      ] = $first;

//受検時間の取得
$times = $math->getTime($where);

$time = $times[ 'minute_rest' ];
if($_REQUEST[ 'time' ]){
	$time = $_REQUEST[ 'time' ];
}else{
	$time = $time*60;
}

$where[ 'test_id' ] = $times[ 'id' ];
//--------------------------------
//回答登録
//--------------------------------

if(count($_REQUEST[ 'sec' ])){
	$sec = array();
	if(count($_REQUEST[ 'sec' ])){
		foreach($_REQUEST[ 'sec' ] as $key=>$val){
			$s = "ans".$key;
			$sec[$s] = $val;
		}
	}
	$math->setEaRst($sec,$where);
	
}


//スタート時間の登録
//初回ページ
if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
	$math->setEa($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}
}



//次のページ
//pageFlgはページャーを選択した時(BMS)
if($_REQUEST[ 'next' ] || $_REQUEST[ 'pageFlg' ]){
	//エラーチェック
	$err = "";

	if($err){
		//エラーがあった時はコチラ
		$errmsg = "設問".$err."が選択されていません。";
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		$tdetail = $obj->getTestPaper($where);
		include_once(D_PATH_HOME."/mode/pdf/pdf14_comment.php");
		include_once(D_PATH_HOME."/init/mathData/mathData.php");
		
		//----------------------------------
		//数学計算処理
		//-----------------------------------
		$ans = $math->getEa($where);
		include_once("../lib/keisan/functionMATH2.php");
		$list = setMathScore($ans,$a_math_point,$a_math_answer,$a_math_pointdata);

		$haku    = $list[ 'haku'    ];
		$bunseki = $list[ 'bunseki' ];
		$sentaku = $list[ 'sentaku' ];
		$yosoku  = $list[ 'yosoku' ];
		$hyogen  = $list[ 'hyogen' ];

		//html側に渡すキー
		if($haku >= 15){
			$hkey = "a";
		}elseif($haku >= 7){
			$hkey = "b";
		}else{
			$hkey = "c";
		}

		if($bunseki >= 15){
			$bkey = "a";
		}elseif($bunseki >= 7){
			$bkey = "b";
		}else{
			$bkey = "c";
		}

		if($sentaku >= 15){
			$skey = "a";
		}elseif($sentaku >= 7){
			$skey = "b";
		}else{
			$skey = "c";
		}

		if($yosoku >= 15){
			$ykey = "a";
		}elseif($yosoku >= 7){
			$ykey = "b";
		}else{
			$ykey = "c";
		}

		if($hyogen >= 15){
			$hykey = "a";
		}elseif($hyogen >= 7){
			$hykey = "b";
		}else{
			$hykey = "c";
		}

		$mathid = $ans[ 'math_id' ];
		$math->setResult($list,$mathid);
		//----------------------------------
		//数学計算処理終わり
		//-----------------------------------
		
		//-------------------------------------
		//テスト側データ
		//------------------------------------
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
$tdetail = $math->getEa($where);
//ガイドページの時
//受検状態の確認
if($temp == "guide"){
	$status = $math->getTestStatus($where);
	$exam_state = $status[ 'exam_state' ];
}



$nextPage = $pager+1;
$backPage = $pager-1;
$exam = $array_exam[$pager];

if($exam[ 'tmp' ]){
	$temp = $exam[ 'tmp' ];
}


?>