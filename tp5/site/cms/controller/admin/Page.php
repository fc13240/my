<?php
// +----------------------------------------------------------------------
// | ETshop [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// 版权所有 @ 深圳市润土信息技术有限公司 禁止任何企业和个人对程序代码以任何形式任何目的再发布。
// +----------------------------------------------------------------------
// | Copyright (c) 2015~2017 http://www.runtuer.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: fancs
// +----------------------------------------------------------------------
// | 单页控制器  Version 1.0 2017/6/12
// +----------------------------------------------------------------------
namespace app\cms\controller\admin;

use app\admin\controller\Admin;
use app\cms\service\Page as Pageapi;

class Page extends Admin
{
    /**
     * @Mark:首页
     * @Author: fancs
     * @Version 2017/6/12
     */
    public function index()
    {
        $this->conDb = 'Page';
        $index_where = [];
        $param       = $this->request->param();
        if (isset($param['name'])) {
            $index_where['name|theme'] = array('like', '%' . (string)$param['name'] . '%');
        }
        $lists = Pageapi::getlist($this->conDb, $index_where, $this->desc);
        $this->assign("list",  $lists['list']);
        $this->assign("_total",  $lists['total']);
        $this->assign("page",  $lists['page']);
        $this->assign('meta_title', $this->conDb);
        return $this->fetch();
    }
    
}