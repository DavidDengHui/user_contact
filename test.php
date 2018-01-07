

			<form action="" method="post">
<label><input type="radio" name="choose" value="1" required=""/>1</label> 
<label><input type="radio" name="choose" value="1" required=""/>2</label> 
<label><input type="radio" name="choose" value="1" required=""/>3</label> 
<label><input type="radio" name="choose" value="1" required=""/>4</label> 
				<div class="submit-w3l">
					<input type="submit" name="doit" value="提交操作">
					<?php
					$SID = $_POST['sid2'];
					echo "<p style='color: white;'>【！请在确认前检查学号信息！】<br />";
					if(!empty($_POST['doit']) && !empty($_POST['choose'])){
    	                    echo $_POST['choose'];
    				        echo "<p style='color: white;'>【！操作成功！】<br />";
                    }
					?>
				</div>
			</form>