<!doctype html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap2/bootstrap.min.css" type="text/css">
<!--	<link rel="stylesheet" href="../menu/MyProject-master/css/bootstrap.css" type="text/css">-->
<!--
	<link rel="stylesheet" href="../menu/MyProject-master/css/city-picker.css" type="text/css">
	<link rel="stylesheet" href="../menu/MyProject-master/css/main.css" type="text/css">
-->
	<title>无标题文档</title>
	<style>
	html::-webkit-scrollbar {
        display:none
		}
	</style>
</head>
<body>
	<div class="container">
<?php include '../menu/head.php'; 
		
		?>
		
		<?php include 'message_mysql.php';?>	
		<div class="card mb-3" style="max-width: 100%;">
			<div class="row no-gutters">
				<div class="col-md-4" style="max-height: 80%;max-width: 80%">
					<img src="../img/bca4913f4e85fef6db53ad0cbd841c8a.jpeg" class="card-img" alt="..." >
				</div>
				<div class="col-md-8">
					<div class="card-body">
					<form method="post" action="message_change.php" onSubmit="return self_message_change2();">
						<h2 class="card-title"> <?php echo $_SESSION['nickname']?><button type="button" class="btn btn-info" style="float: right">编辑个人信息</button></h2>
						<textarea class="form-control" id="Textarea1" rows="3" name="say" style="border:none;"disabled maxlength="94"><?php  echo $row['say'];?></textarea>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
						<button type="button" class="btn-sm btn-dark" style="float: right" id="change_message" onClick="self_message_change()">修改个性签名</button>
						<button type="submit" class="btn-sm btn-success" style="float: right;display: none;" id="change_message2" >发布个性签名</button> </p>
					  </form>
					</div>
				</div>
			</div>
			<div class="container-sm">
				<form>
					<div class="form-row">
    					<div class="col-md-3 mb-3">
     						 <label for="validationServer01">昵称</label>
     							 <input type="text" class="form-control is-valid" id="validationServer01" placeholder="nickname" required>
      							 <div class="valid-feedback" id="valid-feedback1">
       								  Please choose a username.
      							 </div>
    					</div>
 						<div class="col-md-3 mb-3">
     						 <label for="validationServer01">真实姓名</label>
     							 <input type="text" class="form-control is-valid" id="validationServer01" placeholder="realname" required>
      							 <div class="valid-feedback" id="valid-feedback1">
       								  Please choose a username.
      							 </div>
    					</div>
						<div class="col-md-2 mb-3">
     						<label for="validationServer04">职业</label>
      						<select class="custom-select is-invalid" id="validationServer04" required>
        						<option selected disabled value="">Choose...</option>
        						<option id="1">学 生</option>
        						<option id="2">教 师</option>
        						<option id="3">程序员</option>
        						<option id="4">公务员</option>
        						<option id="5">工 人</option>
        						<option id="6">建筑师</option>
        						<option id="7">设计师</option>
        						<option id="8">警察/军人</option>
        						<option id="9">法官/律师</option>
        						<option id="10">医生/护士</option>
        						<option id="11">自由职业</option>
        						<option id="12">其他</option>
      						</select>
      							<div class="invalid-feedback">
       							 Please select a valid state.
      							</div>
   					 	</div>
						<div class="col-md-2 mb-3">
							<label for="validationServerUsername">性别</label>
							<div class="custom-control custom-radio">
  								<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  								<label class="custom-control-label" for="customRadio1">man</label>
							</div>
							<div class="custom-control custom-radio">
  								<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  								<label class="custom-control-label" for="customRadio2">woman</label>
							</div>
							<div class="invalid-feedback">
         						 Please choose a username.
        					</div>
						</div>
    					<div class="col-md-2 mb-3">
      						<label for="validationServer02">年龄</label>  
								<input type="range" class="custom-range" id="range1" max="70" min="10" onClick="age_select()">
     							<div id="rangeshow">
        						Looks good!
      							</div>
    					</div>
  				 
						
						
  				</div>
					
					
						  <div class="form-row">
						   <div class="col-md-2 mb-3">
     						 <label for="validationServer01">电话</label>
     							 <input type="text" class="form-control is-valid" id="validationServer04" placeholder="nickname" required>
      							 <div class="valid-feedback" id="valid-feedback1">
       								  Please choose a username.
      							 </div>
    					</div>
							 <div class="col-md-6 mb-3">
								 
							 </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
			</div>
</div>
	</div>
	<?php include '../menu/MyProject-master/Demo.html'; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/hullabaloo.js"></script>
 
	<script type="text/javascript">
		 function self_message_change(){
			 var item=document.getElementById("Textarea1");
			 
			 var button1=document.getElementById("change_message");
			  var button2=document.getElementById("change_message2"); 
			 
			 item.removeAttribute("disabled");
			 button1.style.display="none"; 
			  button2.style.display="block"; 
			 }
			 function self_message_change2(){
			  	 var item=document.getElementById("Textarea1");	 
				 var button2=document.getElementById("change_message2"); 
				 var data = sessionStorage.getItem('say');
				 //alert(item.value);
				 $.hulla = new hullabaloo();	
			if(item.value==data){
			  $.hulla.send("你并未修改任何内容","warning");
			   return false;
			   }
			else{
			   return true;
			   }
			   
			 }
		function age_select(){
			var x = document.getElementById("range1").value;
    		document.getElementById("rangeshow").innerHTML =  x;
		}
	</script>
</body>
</html>