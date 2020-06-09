<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIpsRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'securityIps' => 'SecurityIps',
        'DBInstanceIPArrayName' => 'DBInstanceIPArrayName',
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'securityIPType' => 'SecurityIPType',
        'whitelistNetworkType' => 'WhitelistNetworkType',
        'modifyMode' => 'ModifyMode',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('securityIps', $this->securityIps, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['SecurityIps'] = $this->securityIps;
        $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        $res['SecurityIPType'] = $this->securityIPType;
        $res['WhitelistNetworkType'] = $this->whitelistNetworkType;
        $res['ModifyMode'] = $this->modifyMode;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifySecurityIpsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['SecurityIps'])){
            $model->securityIps = $map['SecurityIps'];
        }
        if(isset($map['DBInstanceIPArrayName'])){
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if(isset($map['DBInstanceIPArrayAttribute'])){
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }
        if(isset($map['SecurityIPType'])){
            $model->securityIPType = $map['SecurityIPType'];
        }
        if(isset($map['WhitelistNetworkType'])){
            $model->whitelistNetworkType = $map['WhitelistNetworkType'];
        }
        if(isset($map['ModifyMode'])){
            $model->modifyMode = $map['ModifyMode'];
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
     * @description securityIPList
     * @var string
     */
    public $securityIps;

    /**
     * @description groupName
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @description groupTag
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @description securityIPType
     * @var string
     */
    public $securityIPType;

    /**
     * @description whitelistNetType
     * @var string
     */
    public $whitelistNetworkType;

    /**
     * @description modifyMode
     * @var string
     */
    public $modifyMode;

}
