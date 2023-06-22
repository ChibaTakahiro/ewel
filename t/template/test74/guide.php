<?php

include_once("include_header.php");
include_once("include_title.php");

?>
<div class="container mt20">
    <?php include_once("include_alert.php");?>
    
    <div class=" mb-3 ">
    <form class="form-signin" action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
        <h1 class="h3 mb-3 font-weight-normal"><?=$test[ 'testname' ]?></h1>
        <div class="row mt20">
            <div class="col-md-12">
				<ol>
					<li>各質問に対し、選択肢の中からご自身の回答を選択してください。</li>
					<li>回答を入力しないと次ページに進めません。</li>
					<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「1つ前のページに戻る」で、1ページ前にだけ戻れます。</li>
					<li>設問は143問です。</li>
					<li>受検の制限時間は<?=$times[ 'minute_rest' ]?>分です。各ページの右上に残り時間が表示されます。この値が0になるとその時点で強制ログアウトされます。</li>
					<li class="b">検査の途中で何らかの原因によりログアウトされた場合や、検査を途中で中断された場合は、再度ログインし直し、検査の最初から再度ご受検頂くこととなります。</li>
					<li>本検査提供会社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、 受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。</li>
				</ol>
            </div>
		</div>
		<div class="row mt20">
            <div class="col-md-12">
				<input type="submit" name="page" value="検査を開始する" class="btn btn-primary">
				<input type="hidden" name="temp" value="page">
				<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
			</div>
		</div>
    </form>
  </div>
</div>



<?php
include_once("include_footer.php");
?>


<?PHP
/*
$css1 = "guide";
$title = "受検ガイダンス";
include_once("include_header.php");
?>
<div id="main">
	<div id="contents">	
<?PHP
	include_once("include_title.php");

?>
	<form action="<?=D_URL_TEST?>test/<?=$first?>/?k=<?=$_REQUEST[ 'k' ]?>" method="POST">
<?PHP
	if($times[ 'rsei_type' ] == 2){
?>
		<p class="f18">
		感情能力を通して、最終的にアウトプットしている現在のご自身の行動傾向を測定します。
		本検査は自分自身についてより深く理解する為の検査です。
		ご自身がある状況下において、どのように考え、どのように行動するかについて質問しています。
		</p>
<?PHP
	}
?>
		<ol>
			<li>各質問に対し、選択肢の中からご自身の回答を選択してください。</li>
			<li>回答を入力しないと次ページに進めません。</li>
			<li>ブラウザの「戻る」ボタンは使えません。ページ下部の「1つ前のページに戻る」で、1ページ前にだけ戻れます。</li>
			<li>設問は143問です。</li>
			<li>受検の制限時間は<?=$times[ 'minute_rest' ]?>分です。各ページの右上に残り時間が表示されます。この値が0になるとその時点で強制ログアウトされます。</li>
			<li class="b">検査の途中で何らかの原因によりログアウトされた場合や、検査を途中で中断された場合は、再度ログインし直し、検査の最初から再度ご受検頂くこととなります。</li>
			<li>当社は、個人情報を適切な方法で管理し、お客様および受検者の同意なく、第三者に対し開示することはありません。ただし、研究開発または統計分析を目的として、 受検者に関する検査結果を含む個人情報を、個人が識別または特定できないように編集加工し、無償で利用する場合があります。</li>
		</ol>
	<div class="center">
		<input type="submit" name="page" value="検査を開始する" class="button">
	</div>
		<input type="hidden" name="temp" value="page">
	</form>

	</div>
<?PHP
include_once("include_footer_name.php");
?>
</div>

<?PHP
include_once("include_footer.php");
*/
?>
