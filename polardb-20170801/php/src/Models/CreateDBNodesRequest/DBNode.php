<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model {
    protected $_name = [
        'targetClass' => 'TargetClass',
        'zoneId' => 'ZoneId',
    ];
    public function validate() {
        Model::validateRequired('targetClass', $this->targetClass, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
    }
    public function toMap() {
        $res = [];
        $res['TargetClass'] = $this->targetClass;
        $res['ZoneId'] = $this->zoneId;
        return $res;
    }
    /**
     * @param array $map
     * @return DBNode
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TargetClass'])){
            $model->targetClass = $map['TargetClass'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        return $model;
    }
    /**
     * @description dbNodeClass
     * @var string
     */
    public $targetClass;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

}
