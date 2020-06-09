<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteDomainGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'groupName' => 'GroupName',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupName', $this->groupName, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['GroupName'] = $this->groupName;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteDomainGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.groupName
     * @var string
     */
    public $groupName;

}
