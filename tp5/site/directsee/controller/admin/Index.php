<?php
// +----------------------------------------------------------------------
// | ETshop [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// 版权所有 @ 深圳市润土信息技术有限公司 禁止任何企业和个人对程序代码以任何形式任何目的再发布。
// +----------------------------------------------------------------------
// | Copyright (c) 2015~2017 http://www.runtuer.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: theseaer <theseaer@qq.com>
// +----------------------------------------------------------------------
// | 直播平台后台index控制器  Version 2016/12/25
// +----------------------------------------------------------------------
namespace app\directsee\controller\admin;
use app\admin\controller\Admin;

class Index extends Admin
{
    
    /**
     * @Mark:首页
     * @return mixed
     * @Author: theseaer <theseaer@qq.com>
     * @Version 2017/1/22
     */
    public function index()
    {
		return $this->fetch();
    }
}
