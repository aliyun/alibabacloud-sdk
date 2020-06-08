<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatabaseRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBName' => 'DBName',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBName', $this->DBName, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBName'] = $this->DBName;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteDatabaseRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
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
     * @description dbName
     * @var string
     */
    public $DBName;

}
