<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateContainerGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'containerGroupId' => 'ContainerGroupId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ContainerGroupId'] = $this->containerGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateContainerGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ContainerGroupId'])){
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.containerGroupId
     * @var string
     */
    public $containerGroupId;

}
