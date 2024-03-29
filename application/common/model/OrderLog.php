<?php

namespace app\common\model;

use think\Model;


class OrderLog extends Model
{

    

    

    // 表名
    protected $name = 'order_log';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];
    

    







    public function order()
    {
        return $this->belongsTo('Order', 'order_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
