<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\extra\DBInstanceId;
use AlibabaCloud\Tea\Model;

class extra extends Model
{
    /**
     * @description replicaGroupID
     *
     * @var string
     */
    public $replicaGroupID;

    /**
     * @description replicaGroupStatus
     *
     * @var string
     */
    public $replicaGroupStatus;

    /**
     * @description activeReplicaDBInstanceID
     *
     * @var string
     */
    public $activeReplicaDBInstanceID;

    /**
     * @description xRegionReplicas
     *
     * @var DBInstanceId
     */
    public $DBInstanceId;
    protected $_name = [
        'replicaGroupID'            => 'ReplicaGroupID',
        'replicaGroupStatus'        => 'ReplicaGroupStatus',
        'activeReplicaDBInstanceID' => 'ActiveReplicaDBInstanceID',
        'DBInstanceId'              => 'DBInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('replicaGroupID', $this->replicaGroupID, true);
        Model::validateRequired('replicaGroupStatus', $this->replicaGroupStatus, true);
        Model::validateRequired('activeReplicaDBInstanceID', $this->activeReplicaDBInstanceID, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicaGroupID) {
            $res['ReplicaGroupID'] = $this->replicaGroupID;
        }
        if (null !== $this->replicaGroupStatus) {
            $res['ReplicaGroupStatus'] = $this->replicaGroupStatus;
        }
        if (null !== $this->activeReplicaDBInstanceID) {
            $res['ActiveReplicaDBInstanceID'] = $this->activeReplicaDBInstanceID;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = null !== $this->DBInstanceId ? $this->DBInstanceId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extra
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicaGroupID'])) {
            $model->replicaGroupID = $map['ReplicaGroupID'];
        }
        if (isset($map['ReplicaGroupStatus'])) {
            $model->replicaGroupStatus = $map['ReplicaGroupStatus'];
        }
        if (isset($map['ActiveReplicaDBInstanceID'])) {
            $model->activeReplicaDBInstanceID = $map['ActiveReplicaDBInstanceID'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = DBInstanceId::fromMap($map['DBInstanceId']);
        }

        return $model;
    }
}
