<?php
register_shutdown_function('errorHandler');

function errorHandler(){
	if(is_null($error = error_get_last()) === FALSE){
		if(error_reporting() == 0) return;
		die('<div style="background:#cc0000;border:1px solid #990000;color:#fff;padding:5px;font-family:\'Lucida Grande\',\'Lucida Sans Unicode\',Geneva,Verdana,Sans-Serif"><b>FATAL ERROR:</b> ' . $error['message'] . ' in file "' . $error['file'] . '", line: ' . $error['line'] . '<br /><span style="font-size:10px;">SolusVMController</span></div>');
	}
}
?>