<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategiesRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['InstanceId'] = $this->instanceId;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmAccessStrategiesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}
