<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'taskId' => 'TaskId',
        'batchType' => 'BatchType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['TaskId'] = $this->taskId;
        $res['BatchType'] = $this->batchType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBatchResultCountRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['BatchType'])){
            $model->batchType = $map['BatchType'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description taskId
     * @var integer
     */
    public $taskId;

    /**
     * @description batchType
     * @var string
     */
    public $batchType;

}
