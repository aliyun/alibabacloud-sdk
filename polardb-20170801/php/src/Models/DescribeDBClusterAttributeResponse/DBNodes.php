<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description dbInstanceStatus
     *
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @description dbInstanceCreateTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description dbInstanceClass
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description dbInstanceUsedType
     *
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description maxIOPS
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description maxConnections
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description failoverPriority
     *
     * @var int
     */
    public $failoverPriority;
    protected $_name = [
        'DBNodeId'         => 'DBNodeId',
        'zoneId'           => 'ZoneId',
        'DBNodeStatus'     => 'DBNodeStatus',
        'creationTime'     => 'CreationTime',
        'DBNodeClass'      => 'DBNodeClass',
        'DBNodeRole'       => 'DBNodeRole',
        'maxIOPS'          => 'MaxIOPS',
        'maxConnections'   => 'MaxConnections',
        'failoverPriority' => 'FailoverPriority',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBNodeStatus) {
            $res['DBNodeStatus'] = $this->DBNodeStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->failoverPriority) {
            $res['FailoverPriority'] = $this->failoverPriority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBNodeStatus'])) {
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['FailoverPriority'])) {
            $model->failoverPriority = $map['FailoverPriority'];
        }

        return $model;
    }
}
