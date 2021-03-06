<?php
// +----------------------------------------------------------------------
// | ETshop [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// 版权所有 @ 深圳市润土信息技术有限公司 禁止任何企业和个人对程序代码以任何形式任何目的再发布。
// ----------------------------------------------------------------------
// | Copyright (c) 2015~2017 http://www.runtuer.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: theseaer <theseaer@qq.com>
// +----------------------------------------------------------------------
// | Jiguang.php  Version 2016/7/31 极光推送
// +----------------------------------------------------------------------
namespace pushapp;

use app\common\libs\Push;

class Jiguang extends Push
{
    /**
     * @Mark:扩展配置信息
     * @Author: theseaer <theseaer@qq.com>
     * @Version 2016/9/15
     */
    public static function setup(){
        return array(
            'subjection'    => 'pushapp',    //隶属
            'code'          => 'Jiguang',     // 扩展器名称名
            'name'          => lang('Jiguang_pushapp'), // 扩展器名称翻译名
            'description'   => lang('Jiguang_pushapp_desc'), // 扩展器名称翻译描述
            'version'       => '1.0',                                    //版本
            'author'        => 'Runtuer',                                //作者
            'website'       => 'http://www.runtuer.com',                 //出处
            'upgrade'     => '/cmfup/ver2.php',                            //升级位置
            //基本配置项
            'config'        => array(),
            //特殊配置项目，可自行定义
            'special'       => array(
                'logo'      => 'jiguang.png',
                'appofficial'  => 'https://www.jiguang.cn',       //官方
                'country'   => ['zh-cn'],   //适用国家
            ),
        );
    }

    public function _initialize(){

    }
    
    /**
     * @Mark:推送消息，使之进入列队
     * @Author: theseaer <theseaer@qq.com>
     * @Version 2016/7/31
     */
    public function send()
    {
        // TODO: Implement send() method.
    }
}