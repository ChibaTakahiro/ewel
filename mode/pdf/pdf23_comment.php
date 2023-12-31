<?PHP
	$a_math_one = "本アセスメントは、 「ビジネス数学力検査（BMS）」は、数学検定を運営する日本数学検定協会が開発した、ビジネスパーソンに必要な実用的な数学
力・数学技能を測定する検査です。ビジネス数学力検定では、実務に即した形で数学力を５つの力（「把握力」・「分析力」・「選択力」・「予測力」・「表現力」）に分類し、ビジネスのシチュエーションに合わせた形の出題で、これらの力のレベルを測定します。";
	
	$a_haku = array(
				1=>"■数値情報やグラフを正しく読み取れない。\n■桁の取り扱いや単位の取り扱いを間違\nうことで損害が発生してしまう。\n■統計データを正しく読み取ることができない"
				,2=>"ある会社の今期売上は172億5329万円でした。\n来期は前期比15％増の売上を見込んでいるとすると来期の売上目標はだいたい何億円になりますか？"
				,3=>"「だいたい何億円？」と聞いているので、概算ですばやく答えられるかどうかが判定のポイントです。正確な数字を出そうと考え込む場合は、実務でリスクが発生するかもしれません。\n■回答例：だいたい200億円くらい。回答が195〜205億くらいの範囲であればO\nK。"
			);
	
	$a_bun = array(
				1=>"■状況に応じた的確な計算を行うことが\nできない（例：四則演算を正しく活用で\nきない、割合の計算をスムーズに行えな\nい）\n■先を見越した仕事ができない、段取り\nが悪い\n■直感と経験だけに頼って意思決定を行ってしまう。"
				,2=>"製品Xは1個あたり原価400円で生産し、1,200円で小売店へ卸しています。5,000個を小売店に卸したときに得られる粗利益は大体いくらでしょうか。"
				,3=>"暗算ですばやく計算できるかどうか。正\n確な数字を出そうと考え込む場合は、\n実務でリスクが発生するかもしれません。数的センスを確認するには「桁」を間違えなければ問題ない。\n■回答例：400万円。"
			);
	
	$a_disp = array(
				1=>"■数字を使って情報を伝えることができ\nない\n■状況に応じた適切なグラフを作成することができない\n■状況に応じてどこまで詳細な情報が必要なのかを判断することができない\n"
				,2=>"次の報告の問題点を指摘し、より的確な\n報告になおしてください。\n「課長！○○工場の作業員が足りません！」"
				,3=>"数字が使えるところは数字を使って表現\nできるか。報告の中に数字情報を加えることができれば問題ありません。\n■回答例：\n課長！○○工場の25日の作業員が5人足りませんので、派遣会社のＹ社に作業員を5人派遣していただこうと考えているのですが、いかがですか？"
			);
	$space = "\n\n\n";
	
?>