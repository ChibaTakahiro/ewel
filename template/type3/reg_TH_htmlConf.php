			<div class="openBox">
				受検時間設定 
				<?=$_REQUEST[ 'minute_rest' ][ 'on'.$key ]?>
				<input type="hidden" name="minute_rest[on<?=$key?>]" value="<?=$_REQUEST[ 'minute_rest' ][ 'on'.$key ]?>"> 分
			</div>
			<div class="openBox">
<?PHP
				foreach($array_tamen_type as $k=>$v){
					if($_REQUEST[ 'tamen_type' ][$k]){
?>
					<input type="hidden" name="tamen_type[<?=$k?>]" value="<?=$k?>"  ><?=$v?><br />

<?PHP
					}
				}
?>
			</div>
