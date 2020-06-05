<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponse\groups;

class ListGroupsForUserResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'groups' => 'Groups',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groups', $this->groups, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListGroupsForUserResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Groups'])){
            $model->groups = groups::fromMap($map['Groups']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description Groups
     * @var groups
     */
    public $groups;

}
