<?php
// +----------------------------------------------------------------------
// | ETshop [ Rapid development framework for Cross border Mall ]
// +----------------------------------------------------------------------
// 版权所有 @ 深圳市润土信息技术有限公司 禁止任何企业和个人对程序代码以任何形式任何目的再发布。
// +----------------------------------------------------------------------
// | Copyright (c) 2015~2017 http://www.runtuer.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: theseaer <theseaer@qq.com>  Version 1.0  2016/3/12
// +----------------------------------------------------------------------

return [
    //应用初始化标签位
    'app_init'=> [
        '\\app\\common\\libs\\Hook'      //自动注册hook
    ],
    
    //应用开始标签位
    'app_begin'=> [
    
    ],
    
    //模块初始化标签位
    'module_init'=> [
        'app\\common\\behavior\\Regconf',  //初始化参数
    ],
    
    //控制器开始标签位
    'action_begin'=> [
        
    ],
    
    //视图输出过滤标签位
    'view_filter' => [
        
    ],
    
    //应用结束标签位
    'app_end' => [
    
    ],
    
    //日志write方法标签位
    'log_write' => [
    
    ],
    
    //输出结束标签位
    'response_end' => [
    
    ],
];