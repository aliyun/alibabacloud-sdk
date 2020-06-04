<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponse\appPolicyList;

class ListAppPoliciesForIdentityResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'appPolicyList' => 'AppPolicyList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appPolicyList', $this->appPolicyList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AppPolicyList'] = [];
        if(null !== $this->appPolicyList && is_array($this->appPolicyList)){
            $n = 0;
            foreach($this->appPolicyList as $item){
                $res['AppPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListAppPoliciesForIdentityResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AppPolicyList'])){
            if(!empty($map['AppPolicyList'])){
                $model->appPolicyList = [];
                $n = 0;
                foreach($map['AppPolicyList'] as $item) {
                    $model->appPolicyList[$n++] = null !== $item ? appPolicyList::fromMap($item) : $item;
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
     * @description data.appPolicyDTOS
     * @var array
     */
    public $appPolicyList;

}
