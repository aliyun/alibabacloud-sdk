<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfosResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nonExistVideoIds' => 'NonExistVideoIds',
        'forbiddenVideoIds' => 'ForbiddenVideoIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistVideoIds', $this->nonExistVideoIds, true);
        Model::validateRequired('forbiddenVideoIds', $this->forbiddenVideoIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NonExistVideoIds'] = [];
        if(null !== $this->nonExistVideoIds){
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        $res['ForbiddenVideoIds'] = [];
        if(null !== $this->forbiddenVideoIds){
            $res['ForbiddenVideoIds'] = $this->forbiddenVideoIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateVideoInfosResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['NonExistVideoIds'])){
            if(!empty($map['NonExistVideoIds'])){
                $model->nonExistVideoIds = [];
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if(isset($map['ForbiddenVideoIds'])){
            if(!empty($map['ForbiddenVideoIds'])){
                $model->forbiddenVideoIds = [];
                $model->forbiddenVideoIds = $map['ForbiddenVideoIds'];
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
     * @description data.nonExistVideoIds
     * @var array
     */
    public $nonExistVideoIds;

    /**
     * @description data.forbiddenVideoIds
     * @var array
     */
    public $forbiddenVideoIds;

}
