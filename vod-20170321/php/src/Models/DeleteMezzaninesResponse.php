<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nonExistVideoIds' => 'NonExistVideoIds',
        'unRemoveableVideoIds' => 'UnRemoveableVideoIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistVideoIds', $this->nonExistVideoIds, true);
        Model::validateRequired('unRemoveableVideoIds', $this->unRemoveableVideoIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NonExistVideoIds'] = [];
        if(null !== $this->nonExistVideoIds){
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        $res['UnRemoveableVideoIds'] = [];
        if(null !== $this->unRemoveableVideoIds){
            $res['UnRemoveableVideoIds'] = $this->unRemoveableVideoIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteMezzaninesResponse
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
        if(isset($map['UnRemoveableVideoIds'])){
            if(!empty($map['UnRemoveableVideoIds'])){
                $model->unRemoveableVideoIds = [];
                $model->unRemoveableVideoIds = $map['UnRemoveableVideoIds'];
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
     * @description data.unremoveableVideoIds
     * @var array
     */
    public $unRemoveableVideoIds;

}
