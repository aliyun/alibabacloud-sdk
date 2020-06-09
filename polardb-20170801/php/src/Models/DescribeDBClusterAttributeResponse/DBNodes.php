<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model {
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
        'zoneId' => 'ZoneId',
        'DBNodeStatus' => 'DBNodeStatus',
        'creationTime' => 'CreationTime',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeRole' => 'DBNodeRole',
        'maxIOPS' => 'MaxIOPS',
        'maxConnections' => 'MaxConnections',
        'failoverPriority' => 'FailoverPriority',
    ];
    public function validate() {
        Model::validateRequired('DBNodeId', $this->DBNodeId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('DBNodeStatus', $this->DBNodeStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('DBNodeClass', $this->DBNodeClass, true);
        Model::validateRequired('DBNodeRole', $this->DBNodeRole, true);
        Model::validateRequired('maxIOPS', $this->maxIOPS, true);
        Model::validateRequired('maxConnections', $this->maxConnections, true);
        Model::validateRequired('failoverPriority', $this->failoverPriority, true);
    }
    public function toMap() {
        $res = [];
        $res['DBNodeId'] = $this->DBNodeId;
        $res['ZoneId'] = $this->zoneId;
        $res['DBNodeStatus'] = $this->DBNodeStatus;
        $res['CreationTime'] = $this->creationTime;
        $res['DBNodeClass'] = $this->DBNodeClass;
        $res['DBNodeRole'] = $this->DBNodeRole;
        $res['MaxIOPS'] = $this->maxIOPS;
        $res['MaxConnections'] = $this->maxConnections;
        $res['FailoverPriority'] = $this->failoverPriority;
        return $res;
    }
    /**
     * @param array $map
     * @return DBNodes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBNodeId'])){
            $model->DBNodeId = $map['DBNodeId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['DBNodeStatus'])){
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['DBNodeClass'])){
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if(isset($map['DBNodeRole'])){
            $model->DBNodeRole = $map['DBNodeRole'];
        }
        if(isset($map['MaxIOPS'])){
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if(isset($map['MaxConnections'])){
            $model->maxConnections = $map['MaxConnections'];
        }
        if(isset($map['FailoverPriority'])){
            $model->failoverPriority = $map['FailoverPriority'];
        }
        return $model;
    }
    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBNodeId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description dbInstanceStatus
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @description dbInstanceCreateTime
     * @var string
     */
    public $creationTime;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description dbInstanceUsedType
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description maxIOPS
     * @var integer
     */
    public $maxIOPS;

    /**
     * @description maxConnections
     * @var integer
     */
    public $maxConnections;

    /**
     * @description failoverPriority
     * @var integer
     */
    public $failoverPriority;

}
