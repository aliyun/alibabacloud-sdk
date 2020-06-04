<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListAuditSecurityIpRequest extends Model {
    protected $_name = [
        'securityGroupName' => 'SecurityGroupName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['SecurityGroupName'] = $this->securityGroupName;
        return $res;
    }
    /**
     * @param array $map
     * @return ListAuditSecurityIpRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SecurityGroupName'])){
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        return $model;
    }
    /**
     * @description securityGroupName
     * @var string
     */
    public $securityGroupName;

}
