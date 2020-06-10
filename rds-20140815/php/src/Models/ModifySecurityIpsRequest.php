<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIpsRequest extends Model
{
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description securityIPList
     *
     * @var string
     */
    public $securityIps;

    /**
     * @description groupName
     *
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @description groupTag
     *
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @description securityIPType
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @description whitelistNetType
     *
     * @var string
     */
    public $whitelistNetworkType;

    /**
     * @description modifyMode
     *
     * @var string
     */
    public $modifyMode;
    protected $_name = [
        'resourceOwnerId'            => 'ResourceOwnerId',
        'DBInstanceId'               => 'DBInstanceId',
        'securityIps'                => 'SecurityIps',
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'securityIPType'             => 'SecurityIPType',
        'whitelistNetworkType'       => 'WhitelistNetworkType',
        'modifyMode'                 => 'ModifyMode',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('securityIps', $this->securityIps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }
        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }
        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->whitelistNetworkType) {
            $res['WhitelistNetworkType'] = $this->whitelistNetworkType;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }
        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['WhitelistNetworkType'])) {
            $model->whitelistNetworkType = $map['WhitelistNetworkType'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }

        return $model;
    }
}
