<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceProxyConfigurationResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transparentSwitchConfiguration' => 'TransparentSwitchConfiguration',
        'persistentConnectionsConfiguration' => 'PersistentConnectionsConfiguration',
        'attacksProtectionConfiguration' => 'AttacksProtectionConfiguration',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transparentSwitchConfiguration', $this->transparentSwitchConfiguration, true);
        Model::validateRequired('persistentConnectionsConfiguration', $this->persistentConnectionsConfiguration, true);
        Model::validateRequired('attacksProtectionConfiguration', $this->attacksProtectionConfiguration, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TransparentSwitchConfiguration'] = $this->transparentSwitchConfiguration;
        $res['PersistentConnectionsConfiguration'] = $this->persistentConnectionsConfiguration;
        $res['AttacksProtectionConfiguration'] = $this->attacksProtectionConfiguration;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstanceProxyConfigurationResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TransparentSwitchConfiguration'])){
            $model->transparentSwitchConfiguration = $map['TransparentSwitchConfiguration'];
        }
        if(isset($map['PersistentConnectionsConfiguration'])){
            $model->persistentConnectionsConfiguration = $map['PersistentConnectionsConfiguration'];
        }
        if(isset($map['AttacksProtectionConfiguration'])){
            $model->attacksProtectionConfiguration = $map['AttacksProtectionConfiguration'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.transparentSwitchConfiguration
     * @var string
     */
    public $transparentSwitchConfiguration;

    /**
     * @description data.persistentConnectionsConfiguration
     * @var string
     */
    public $persistentConnectionsConfiguration;

    /**
     * @description data.attacksProtectionConfiguration
     * @var string
     */
    public $attacksProtectionConfiguration;

}
