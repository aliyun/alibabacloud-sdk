<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class GrantAccountPrivilegeRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'accountName' => 'AccountName',
        'DBName' => 'DBName',
        'accountPrivilege' => 'AccountPrivilege',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('accountPrivilege', $this->accountPrivilege, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['AccountName'] = $this->accountName;
        $res['DBName'] = $this->DBName;
        $res['AccountPrivilege'] = $this->accountPrivilege;
        return $res;
    }
    /**
     * @param array $map
     * @return GrantAccountPrivilegeRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['AccountPrivilege'])){
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description accountPrivilege
     * @var string
     */
    public $accountPrivilege;

}
