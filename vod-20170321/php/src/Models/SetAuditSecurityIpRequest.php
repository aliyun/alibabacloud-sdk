<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetAuditSecurityIpRequest extends Model {
    protected $_name = [
        'securityGroupName' => 'SecurityGroupName',
        'ips' => 'Ips',
        'operateMode' => 'OperateMode',
    ];
    public function validate() {
        Model::validateRequired('ips', $this->ips, true);
    }
    public function toMap() {
        $res = [];
        $res['SecurityGroupName'] = $this->securityGroupName;
        $res['Ips'] = $this->ips;
        $res['OperateMode'] = $this->operateMode;
        return $res;
    }
    /**
     * @param array $map
     * @return SetAuditSecurityIpRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityGroupName'])){
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if(isset($map['Ips'])){
            $model->ips = $map['Ips'];
        }
        if(isset($map['OperateMode'])){
            $model->operateMode = $map['OperateMode'];
        }
        return $model;
    }
    /**
     * @description securityGroupName
     * @var string
     */
    public $securityGroupName;

    /**
     * @description ips
     * @var string
     */
    public $ips;

    /**
     * @description operateMode
     * @var string
     */
    public $operateMode;

}
