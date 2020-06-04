<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponse\nonExistImageIds;

class UpdateImageInfosResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nonExistImageIds' => 'NonExistImageIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistImageIds', $this->nonExistImageIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NonExistImageIds'] = null !== $this->nonExistImageIds ? $this->nonExistImageIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateImageInfosResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['NonExistImageIds'])){
            $model->nonExistImageIds = nonExistImageIds::fromMap($map['NonExistImageIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.nonExistImageIds
     * @var nonExistImageIds
     */
    public $nonExistImageIds;

}
