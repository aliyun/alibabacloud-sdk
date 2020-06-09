<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponse\logs\log;

class logs extends Model {
    protected $_name = [
        'log' => 'Log',
    ];
    public function validate() {
        Model::validateRequired('log', $this->log, true);
    }
    public function toMap() {
        $res = [];
        $res['Log'] = [];
        if(null !== $this->log && is_array($this->log)){
            $n = 0;
            foreach($this->log as $item){
                $res['Log'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return logs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Log'])){
            if(!empty($map['Log'])){
                $model->log = [];
                $n = 0;
                foreach($map['Log'] as $item) {
                    $model->log[$n++] = null !== $item ? log::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Log
     * @var array
     */
    public $log;

}
