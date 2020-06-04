<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteVodSpecificConfigRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'domainName' => 'DomainName',
        'configId' => 'ConfigId',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('configId', $this->configId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['DomainName'] = $this->domainName;
        $res['ConfigId'] = $this->configId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteVodSpecificConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['ConfigId'])){
            $model->configId = $map['ConfigId'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description configId
     * @var string
     */
    public $configId;

}
