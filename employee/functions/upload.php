<?php
function upload($file){
	if ($file['error'] > 0) {
        switch ($file['error']) {
            case 1:
                exit('上传文件出错，超出了服务器配置文件中设定的大小');
            case 2:
                exit('上传文件出错，超出了表单中设定的大小');
            case 3:
                exit('上传文件出错，文件上传不完整');
            case 6:
                exit('找不到临时目录');
            case 7:
                exit('文件写入失败');
        }
    }
    $maxsize = 3 * 1024 * 1024;
    if ($file['size'] > $maxsize) {
        exit('超出了允许的大小');
    }
    $allow = array('image/jpeg','image/jpg','image/png','image/gif');
    if (!in_array($file['type'], $allow)) {
        exit('上传的文件类型不符合要求');
    }
    $ext = strrchr($file['name'], '.');
    $newname = './uploads/'.date(YmdHis).$ext;
    $result = move_uploaded_file($file['tmp_name'], $newname);
    if ($result) {
        return $newname;
    } else {
    	exit('保存文件出错');
    }
}