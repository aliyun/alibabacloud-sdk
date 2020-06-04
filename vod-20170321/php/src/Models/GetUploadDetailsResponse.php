<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponse\uploadDetails;

class GetUploadDetailsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadDetails' => 'UploadDetails',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('uploadDetails', $this->uploadDetails, true);
        Model::validateRequired('nonExistMediaIds', $this->nonExistMediaIds, true);
        Model::validateRequired('forbiddenMediaIds', $this->forbiddenMediaIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UploadDetails'] = [];
        if(null !== $this->uploadDetails && is_array($this->uploadDetails)){
            $n = 0;
            foreach($this->uploadDetails as $item){
                $res['UploadDetails'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['NonExistMediaIds'] = [];
        if(null !== $this->nonExistMediaIds){
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        $res['ForbiddenMediaIds'] = [];
        if(null !== $this->forbiddenMediaIds){
            $res['ForbiddenMediaIds'] = $this->forbiddenMediaIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetUploadDetailsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UploadDetails'])){
            if(!empty($map['UploadDetails'])){
                $model->uploadDetails = [];
                $n = 0;
                foreach($map['UploadDetails'] as $item) {
                    $model->uploadDetails[$n++] = null !== $item ? uploadDetails::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['NonExistMediaIds'])){
            if(!empty($map['NonExistMediaIds'])){
                $model->nonExistMediaIds = [];
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
            }
        }
        if(isset($map['ForbiddenMediaIds'])){
            if(!empty($map['ForbiddenMediaIds'])){
                $model->forbiddenMediaIds = [];
                $model->forbiddenMediaIds = $map['ForbiddenMediaIds'];
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
     * @description data.uploadDetails
     * @var array
     */
    public $uploadDetails;

    /**
     * @description data.nonExistMediaIds
     * @var array
     */
    public $nonExistMediaIds;

    /**
     * @description data.forbiddenMediaIds
     * @var array
     */
    public $forbiddenMediaIds;

}
