<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreateGroupResponse\group;

class CreateGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'group' => 'Group',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('group', $this->group, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Group'])){
            $model->group = group::fromMap($map['Group']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description Group
     * @var group
     */
    public $group;

}
