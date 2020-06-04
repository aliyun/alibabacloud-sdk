<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponse\appInfoList;

class GetAppInfosResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'appInfoList' => 'AppInfoList',
        'nonExistAppIds' => 'NonExistAppIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appInfoList', $this->appInfoList, true);
        Model::validateRequired('nonExistAppIds', $this->nonExistAppIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AppInfoList'] = [];
        if(null !== $this->appInfoList && is_array($this->appInfoList)){
            $n = 0;
            foreach($this->appInfoList as $item){
                $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['NonExistAppIds'] = [];
        if(null !== $this->nonExistAppIds){
            $res['NonExistAppIds'] = $this->nonExistAppIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetAppInfosResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AppInfoList'])){
            if(!empty($map['AppInfoList'])){
                $model->appInfoList = [];
                $n = 0;
                foreach($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['NonExistAppIds'])){
            if(!empty($map['NonExistAppIds'])){
                $model->nonExistAppIds = [];
                $model->nonExistAppIds = $map['NonExistAppIds'];
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
     * @description data.appInfoList
     * @var array
     */
    public $appInfoList;

    /**
     * @description data.nonExists
     * @var array
     */
    public $nonExistAppIds;

}
