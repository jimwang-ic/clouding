<?php
session_start();

include("mysql.inc.php");
?>
<!--上傳照片示例 upimage.php
功能：上傳照片，顯示上傳人、上傳時間、圖片名稱、圖片大小、圖片說明。
說明：1.有一些主頁空間可能不支持上傳後的臨時文件操作，那只能換一個試試啦。
2.程序可以自動新建文檔photo.txt和目錄image,若不能正常運行，請自己新建一個文檔photo.txt(和upimage.php在同一個目錄下)和目錄image.
3.可以到我的主頁上測試一下 http://medonline.51.net/upload/upimage.php
-->
<HTML>
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<TITLE>上傳照片</TITLE>
	<style type="text/css">
	<!--
	.white12 { font-size: 12pt; color: #FFFFFF; text-decoration: none}
	.blue10 { font-size: 10pt; color: #99CCFF; text-decoration: none}
	.black10 { font-size: 10pt; text-decoration: none}
	-->
	</style>
</HEAD>
<BODY BGCOLOR="#FFFFFF">
	<?php
		
		if ($_GET['num']){ //如果點擊"上傳"，則執行此php代碼部分
			
			//var_dump($_FILES['picurl']);
			//echo $src.'<br/>';
			if ($picurl=="none"){
				echo "你沒有上傳任何文件.";
				exit; //如果沒有上傳文件，則退出程序
			}
			$src = imagecreatefromjpeg($_FILES['picurl']['tmp_name']);
			
			// 取得來源圖片長寬
			$src_w = imagesx($src);
			$src_h = imagesy($src);

			
			
			
			$thumb_w = 70;
			$thumb_h = 90;
			
			// 假設要長寬不超過90
			/*if($src_w > $src_h){
				$thumb_w = 90;
				$thumb_h = intval($src_h / $src_w * 90);
			}
			else{
				$thumb_h = 90;
				$thumb_w = intval($src_w / $src_h * 90);
			}*/
			
			// 建立縮圖
			$thumb = imagecreatetruecolor($thumb_w, $thumb_h);

			// 開始縮圖
			imagecopyresampled($thumb, $src, 0, 0, 0, 0, $thumb_w, $thumb_h, $src_w, $src_h);

			// 儲存縮圖到指定 thumb 目錄
			imagejpeg($thumb, "thumb/".$_FILES['picurl']['name']);

			// 複製上傳圖片到指定 images 目錄
			//copy($_FILES['picurl']['tmp_name'], "images/" . $_FILES['picurl']['name']); 
			$v=opendir("image");
			if ($v==0){ 
				mkdir("image");      //若目錄不存在，則新建一個
				$v=opendir("image"); //取得目錄handle
			}
			$up=copy($_FILES['picurl']['tmp_name'], "image/" . $_FILES['picurl']['name']); 
			//$up=copy("$picurl","image/$picurl_name"); //關鍵一步，將臨時文件複製到image目錄下
			
			$URL="./thumb/".$_FILES['picurl']['name'];
			$query1 = " UPDATE member SET photo_route = '{$URL}' where ID ='{$id}' ";
			
			mysql_query($query1) or die("無法送出" . mysql_error());
			
			if($up==1)
			{
				//文件操作
				$fp=fopen("photo.txt","a");//打開文件，以添加方式寫入留言
				//初始化寫入內容
				$mydate=date("Y年m月d日 h:i A");
				$photonote=nl2br($photonote);//將換行字元轉成 <br>。
				$text="照片名：<a href='image/$picurl_name' target='_blank'>$picurl_name</a> <br>照片大小:$picurl_size byte<br> 照片說明：<BR><span class='blue10'>$photonote</span><br> <div align='right'>上傳人: $user($mydate)</div><hr>";
				//寫入內容
				fwrite($fp,$text,strlen($text)); //strlin計算$text的字串長度
				fclose($fp);
				echo "文件上傳成功!<BR>";
				unlink ($picurl); //從臨時文件夾中刪除檔案$picurl
				closedir ($v); //關閉目錄handle
				echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
			}
			else{
				echo "文件上傳失敗."; exit;
			} //若上傳失敗，則退出程序
		}
	?>
	<table width="71%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr bgcolor="#6699FF">
			<td>
			<div align="center" class="white12">所有照片</div>
			</td>
		</tr>
	
	<tr bgcolor="#6699FF">
		<td>
			<div align="center" class="white12">上傳照片</div>
		</td>
	</tr>
	<tr>
		<td>
			<form action="upimage.php?num=1" method="post" enctype="multipart/form-data" name="UL">
			<!--注意：這裡必須加上『enctype="multipart/form-data" 』，否則不會產生上傳動作-->
			<div align="center" class="black10">圖片源文件：
				<input type="file" name="picurl" size="15" accept="image/x-png,image/gif,image/jpeg">
				<br>
				照片說明：(不超過50個字)<br>
				<textarea name="photonote" cols="50" rows="5"></textarea>
				<br>上傳人：
				<input type="text" name="user" size="10" maxlength="10">
				<br>
				<input type="Submit" name="upload" value="上傳">
				<input type="reset" name="Reset" value="重寫">
			</div>
			</form>
			<div align="center" class="blue10"><a href="javascript:history.back()"> 返回</a> </div>
		</td>
	</tr>
	</table>
</BODY>
</HTML> 