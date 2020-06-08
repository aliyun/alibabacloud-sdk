<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\extra\DBInstanceId;

class extra extends Model {
    protected $_name = [
        'replicaGroupID' => 'ReplicaGroupID',
        'replicaGroupStatus' => 'ReplicaGroupStatus',
        'activeReplicaDBInstanceID' => 'ActiveReplicaDBInstanceID',
        'DBInstanceId' => 'DBInstanceId',
    ];
    public function validate() {
        Model::validateRequired('replicaGroupID', $this->replicaGroupID, true);
        Model::validateRequired('replicaGroupStatus', $this->replicaGroupStatus, true);
        Model::validateRequired('activeReplicaDBInstanceID', $this->activeReplicaDBInstanceID, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['ReplicaGroupID'] = $this->replicaGroupID;
        $res['ReplicaGroupStatus'] = $this->replicaGroupStatus;
        $res['ActiveReplicaDBInstanceID'] = $this->activeReplicaDBInstanceID;
        $res['DBInstanceId'] = null !== $this->DBInstanceId ? $this->DBInstanceId->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return extra
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ReplicaGroupID'])){
            $model->replicaGroupID = $map['ReplicaGroupID'];
        }
        if(isset($map['ReplicaGroupStatus'])){
            $model->replicaGroupStatus = $map['ReplicaGroupStatus'];
        }
        if(isset($map['ActiveReplicaDBInstanceID'])){
            $model->activeReplicaDBInstanceID = $map['ActiveReplicaDBInstanceID'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = DBInstanceId::fromMap($map['DBInstanceId']);
        }
        return $model;
    }
    /**
     * @description replicaGroupID
     * @var string
     */
    public $replicaGroupID;

    /**
     * @description replicaGroupStatus
     * @var string
     */
    public $replicaGroupStatus;

    /**
     * @description activeReplicaDBInstanceID
     * @var string
     */
    public $activeReplicaDBInstanceID;

    /**
     * @description xRegionReplicas
     * @var DBInstanceId
     */
    public $DBInstanceId;

}
