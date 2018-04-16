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
// | b2b2c.config.php  Version 1.0  2016/3/14
// +----------------------------------------------------------------------

return array(
    // 模块信息
    'info' => array(
        'name'        => 'Financial',
        'title'       => '系统财务管理',
        'icon'        => '',
        'icon_color'  => '',
        'image'       => 'order.png',
        'description' => '系统财务管理',
        'author'   	  => 'Runtuer',
        'website'     => 'http://www.runtuer.com',
        'version'     => '1.0.0',
        'upgrade'     => '/cmfup/ver.php',     //升级地址
        'depends' => array(
            'Admin'   => '1.0.0',
            'Cms'    => '1.0.0',
        ),
        //依赖扩展
        'extend' => array(

        ),
    ),

    // 用户中心导航
    'user_nav' => array(
        
    ),

    // 模块配置
    'config' => array(
        
    ),

    // 后台菜单及权限节点配置
    'admin_menu' => array(
        /**
        '节点名' =>array('父节点'， '位置', 'url'， 'css class', 'data-showbar="1" data-width="700" data-height="620"', 排序, 是否权限控制),
        位置：l:左路，r：右，h：隐藏
        是否权限控制 ：1，是，0：否
         **/
        'Financial'    => array('','l', 'finance/admin.refund/index', 'order.png', '', 1, 1),
        'Refundorder'  => array('Financial','l', 'financial/admin.refund/index', '', '', 1, 1),
        'Refundpays'=>array('Refundorder','r','financial/admin.refund/index','reback-icon', '', 0, 1,
            array(
                'Whole'  => array(0, 'financial/admin.refund/index', 'add-new', '', '', '', '', ''),
                'Export' => array(1, 'financial/admin.refund/export','',440, 280, 1,'','ids'),
                'View'   => array(-1, 'financial/admin.refund/view', '', 440, 300, '', '', ''),
                'Edit'   => array(-1, 'financial/admin.refund/edit', '', 440, 300, '', '', ''),
            ),
        ),
    ),
);