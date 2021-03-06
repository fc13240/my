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
        'name'        => 'Mytools',
        'title'       => '常用工具',
        'icon'        => '',
        'icon_color'  => '',
        'image'       => 'mytools.png',
        'description' => '常用工具：加密解密，字典，站长工具，安全工具',
        'author'   	  => 'Runtuer',
        'website'     => 'http://www.runtuer.com',
        'version'     => '1.0.0',
        'upgrade'     => '/cmfup/ver.php',     //升级地址
        'depends' => array(
            'Admin'   => '1.0.0',
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
        'Mytools'  => array('','l', 'mytools/admin.encrypt/index', 'mytools.png', '', 1, 1),
          'Deencrypt'=> array('Mytools','l', 'mytools/admin.encrypt/index', '', '', 0, 1),
          'Encrypt'  => array('Deencrypt','r', 'mytools/admin.encrypt/index', 'lock-icon', '', 1, 1,
              array(
                  'Addnew' => array(0, 'mytools/admin.encrypt/add', '', 630, 455, 1, '', ''),
                  'Delete' => array(1, 'mytools/admin.encrypt/delete', '', '', '', '', '', 'ids'),
                  'Enable' => array(3, 'mytools/admin.encrypt/enable', '', '', '', '', '', 'ids'),
                  'Disable'=> array(4, 'mytools/admin.encrypt/disable', '', '', '', '', '', 'ids'),
                  'Edit'   => array(-1, 'mytools/admin.encrypt/edit', '', 630, 455, 1, '', ''),
              )
          ),
          'Decrypt'  => array('Deencrypt','r', 'mytools/admin.decrypt/index', 'unlock-icon', '', 1, 1,
              array(
                  'Addnew' => array(0, 'mytools/admin.decrypt/add', '', 630, 455, 1, '', ''),
                  'Delete' => array(1, 'mytools/admin.decrypt/delete', '', '', '', '', '', 'ids'),
                  'Enable' => array(3, 'mytools/admin.decrypt/enable', '', '', '', '', '', 'ids'),
                  'Disable'=> array(4, 'mytools/admin.decrypt/disable', '', '', '', '', '', 'ids'),
                  'Edit'   => array(-1, 'mytools/admin.decrypt/edit', '', 630, 455, 1, '', ''),
              )
          ),
          'Webmastersys'=> array('Mytools','l', 'mytools/admin.index/index', '','',1, 1),
            'Webmaster' => array('Webmaster','r','mytools/admin.index/index', '','',0, 1,
                array(
                    'Addnew' => array(0, 'mytools/admin.index/add', '', 630, 455, 1, '', ''),
                    'Delete' => array(1, 'mytools/admin.index/delete', '', '', '', '', '', 'ids'),
                    'Sort'   => array(2, 'mytools/admin.index/sort', '', '', '', '', '', 'sorts'),
                    'Enable' => array(3, 'mytools/admin.index/enable', '', '', '', '', '', 'ids'),
                    'Disable'=> array(4, 'mytools/admin.index/disable', '', '', '', '', '', 'ids'),
                    'Edit'   => array(-1, 'mytools/admin.index/edit', '', 630, 455, 1, '', ''),
                ),
            ),
    )
);