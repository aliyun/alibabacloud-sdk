<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'instanceId' => 'InstanceId',
        'needDetailAttributes' => 'NeedDetailAttributes',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['InstanceId'] = $this->instanceId;
        $res['NeedDetailAttributes'] = $this->needDetailAttributes;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmInstanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['NeedDetailAttributes'])){
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
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
     * @description needDetailAttributes
     * @var bool
     */
    public $needDetailAttributes;

}
