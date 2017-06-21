<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body style="align-content: center ;">


<div style="color:#8b0022;"><h1>資管營隊活動內容及報名頁面</h1></div>
<h2>資管營隊報名表單</h2>
	
	<p>
	<ul>
	<li style="font-size: 24;color:#66DD00">對象：</li style="font-size: 24;color:#66DD00">
	國中2年級~高中2年級
		<li style="font-size: 24;color:#66DD00">時間：</li style="font-size: 24;color:#66DD00">
	西元 2027 年 1 月 1日 ~ 西元 2027 年 1 月 4日<br/>
		<li style="font-size: 24;color:#66DD00">報名費：</li style="font-size: 24;color:#66DD00">
	2000元
		<li style="font-size: 24;color:#66DD00">活動內容：</li style="font-size: 24;color:#66DD00">
	</ul>
	提早體驗資管系<br/>
	好玩好玩好玩好玩好玩好玩<br/>
	有趣有趣有趣有趣有趣有趣<br/>
	刺激刺激刺激刺激刺激刺激<br/>
	</p>


<h1 style="color:blue;font-family:標楷體">報名表單：</h1>

<div>
<form action="result.php" method="get">
	姓名：<br/>
	<input name="name" size=10 maxlength=20 ><br/><br/>
	電話：
	<input name="tel" size=10>   

	性別：
	<input name="gender" type=radio value="男">男
	<input name="gender" type=radio value="女">女 <br/><br/>
	生日：<br/>
	<input name="birthday" type=date value="birthday"><br/><br/>


	飲食習慣：<br/>
	     <input name="diet" type=radio value="素食">素食<br/>
	     <input name="diet" type=radio value="肉食">肉食<br/><br/>

	身分證字號：
	<input name="ID" size=10 type=text maxlength="20"><br/><br/>

	<div>
	<p>
	興趣：<br/>
		<select name="interest[]" multiple="true">
		<option value="電影">電影</option>
		<option value="書籍">書籍</option>
		<option value="運動">運動</option>
		<option value="踏青">踏青</option>
		</select>
	</p> 

	<p>

	專長（複選）：<br/>
		<input name="skill[]" type=checkbox value="手繪">手繪
		<input name="skill[]" type=checkbox value="電繪">電繪
		<input name="skill[]" type=checkbox value="美工修圖">美工修圖
		<input name="skill[]" type=checkbox value="coding">coding
		<input name="skill[]" type=checkbox value="設計">邏輯設計
	</p>
	

	</div>
	
	
	自我介紹：<br/>
	<textarea name="intro" cols="60" rows="20"></textarea>
	</div>

	營服預覽：<br/>
	<div>
	<a href="image.jpg"><img src="image.jpg" height="5%"><=點擊放大</a>

	</div>


	<input type="submit" value="送出表單">
	<input type="reset" value="重新輸入">
</form>

	<div>
		<a href name="top" style="font-size: 24;color: brown">Click me back to the top</a>
	</div>




</body>
</html>
