<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponse\securityIpList;

class ListAuditSecurityIpResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'securityIpList' => 'SecurityIpList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('securityIpList', $this->securityIpList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SecurityIpList'] = [];
        if(null !== $this->securityIpList && is_array($this->securityIpList)){
            $n = 0;
            foreach($this->securityIpList as $item){
                $res['SecurityIpList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListAuditSecurityIpResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SecurityIpList'])){
            if(!empty($map['SecurityIpList'])){
                $model->securityIpList = [];
                $n = 0;
                foreach($map['SecurityIpList'] as $item) {
                    $model->securityIpList[$n++] = null !== $item ? securityIpList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.auditSecurityGroupDTOS
     * @var array
     */
    public $securityIpList;

}
