<?php

include_once '../lib/UserInfoController.php';

/*****************************************************
 *
 * 该api用来注册信息
 *
 ****************************************************/

$userInfoControllerObj = new UserInfoController();

$userInfoControllerObj->userRegister();

?>