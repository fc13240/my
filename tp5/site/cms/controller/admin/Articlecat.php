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
// | Index  Version 1.0  2016/6/6
// +----------------------------------------------------------------------
namespace app\cms\controller\admin;

use app\admin\controller\Admin;
use app\cms\service\Articlecat as Articlecatapi;

class Articlecat extends Admin
{
    
    /**
     * @Mark:继承
     * @Author: fancs
     * @Version 2017/6/6
     */
    public function _initialize()
    {
        $this->conDb        = 'Articlecat';
        parent::_initialize(); // TODO: Change the autogenerated stub
    }
    
    /**
     * @Mark:单页分类列表页
     * @Author: fancs
     * @Version 2017/6/6
     */
    public function index()
    {
        $index_map  = '';
        $param    = $this->request->param();
    
        if(isset($param['name']))
        {
            $index_map['name|title|keywords|cat_type'] =  ['like','%'.trim($param['name']).'%'];
        }
        
        $index_where["langid"]              = $this->index_where;
        
        $lists = Articlecatapi::getlist($this->conDb, $index_map, $this->desc);
        $this->assign('list', $lists['list']);
        $this->assign('_total', $lists['total']);
        $this->assign('page', $lists['page']);
        $this->assign ("meta_title", lang($this->conDb));
        return $this->fetch();
    }
    
    /**
     * @Mark:添加分类
     * @return mixed
     * @Author: fancs
     * @Version 2017/6/7
     */
    public function add()
    {
        $pid     = $this->request->has('ids') ? $this->request->param('ids') : 0;
        $catlist =  \app\cms\model\Articlecat::all(function($query){
            $query->order('sort', 'desc');
        });
        
        $this->assign("catlist", sortdata($catlist));
        $this->assign("data", null);
        $this->assign("pid", $pid);
        $this->assign("meta_title", lang('Addnew Category'));
        return $this->fetch('edit');
    }
    
    /**
     * @Mark:编辑分类
     * @return mixed
     * @Author: fancs
     * @Version 2017/6/7
     */
    public function edit()
    {
        $id      = $this->request->has('ids') ? $this->request->param('ids') : $this->error(lang('Error_id'));
        $rs      =  \app\cms\model\Articlecat::get($id);
        $catlist =  \app\cms\model\Articlecat::all();
        $this->assign("data", $rs);
        $this->assign("pid", null);
        $this->assign("catlist", sortdata($catlist));
        $this->assign("meta_title", lang('Edit Category'));
        return $this->fetch();
    }
}