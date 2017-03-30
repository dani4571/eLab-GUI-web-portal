<?php
class vmInfo {
	public static function show($imageName) {
		$userName = $_SESSION['authenticatedUser']->getUserName();
		$userId = $_SESSION['authenticatedUser']->getUserID();
		echo '<p><a class="btn btn-success btn-block btn-lg vmIP" id="'.$imageName.'" data-uname="'.$userName.'" data-uid="'.$userId.'" role="button">Commence Learning</a></p>';
		echo '<div class="row" id="'.$imageName.'_info" hidden>
				<p>Copy this command into your terminal: </p>
				<p><input class="form-control" id="'.$imageName.'_command" type="text" value="" readonly="readonly"></p>
			 </div>';
	}
	
	public static function showCustom($imageName, $type) {
		$userName = $_SESSION['authenticatedUser']->getUserName();
		$userId = $_SESSION['authenticatedUser']->getUserID();
		if (!is_null($type) && strcmp($type, "jupyter") == 0) {
			echo '<p><a class="btn btn-success btn-block btn-lg vmIP" id="'.$imageName.'" data-uname="'.$userName.'" data-uid="'.$userId.'" data-vmtype=jupyter role="button">Commence Learning</a></p>';
			echo '<div class="row" id="'.$imageName.'_info" hidden>
					<p>Use this URL to access your lab: </p>
					<p><input class="btn btn-success btn-block" id="'.$imageName.'_command" type="text" value="" readonly="readonly"></p>
				 </div>';
		}else{
			echo '<p><a class="btn btn-success btn-block btn-lg vmIP" id="'.$imageName.'" data-uname="'.$userName.'" data-uid="'.$userId.'" role="button">Commence Learning</a></p>';
			echo '<div class="row" id="'.$imageName.'_info" hidden>
				<p>Copy this command into your terminal: </p>
				<p><input class="form-control" id="'.$imageName.'_command" type="text" value="" readonly="readonly"></p>
			 </div>';
		}
	}
	
	public static function showCustomApplication($imageName, $type) {
		$userName = $_SESSION['authenticatedUser']->getUserName();
		$userId = $_SESSION['authenticatedUser']->getUserID();
		if (!is_null($type) && strcmp($type, "jupyter") == 0) {
			echo '<p><a class="btn btn-success btn-block btn-lg vmIP" id="'.$imageName.'" data-uname="'.$userName.'" data-uid="'.$userId.'" data-vmtype=jupyter role="button">Launch Application</a></p>';
			echo '<div class="row" id="'.$imageName.'_info" hidden>
					<p>Use this URL to access your lab: </p>
					<p><input class="btn btn-success btn-block" id="'.$imageName.'_command" type="text" value="" readonly="readonly"></p>
				 </div>';
		}else{
			echo '<p><a class="btn btn-success btn-block btn-lg vmIP" id="'.$imageName.'" data-uname="'.$userName.'" data-uid="'.$userId.'" role="button">Connect to Lab</a></p>';
			echo '<div class="row" id="'.$imageName.'_info" hidden>
				<p>Copy this command into your terminal: </p>
				<p><input class="form-control" id="'.$imageName.'_command" type="text" value="" readonly="readonly"></p>
			 </div>';
		}
	}
	
	public static function showDisabled() {
		echo '<p><a class="btn btn-success btn-block btn-lg vmIP disabled" role="button">Commence Learning</a></p>';
	}
	
	public static function showDisabledApplication() {
		echo '<p><a class="btn btn-success btn-block btn-lg vmIP disabled" role="button">Launch Application</a></p>';
	}
}
//<p><input class="form-control" id="'.$imageName.'_command" type="text" value="" readonly="readonly"></p>
?>