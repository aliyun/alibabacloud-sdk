<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponse\URLUploadInfoList;

class GetURLUploadInfosResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'URLUploadInfoList' => 'URLUploadInfoList',
        'nonExists' => 'NonExists',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('URLUploadInfoList', $this->URLUploadInfoList, true);
        Model::validateRequired('nonExists', $this->nonExists, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['URLUploadInfoList'] = [];
        if(null !== $this->URLUploadInfoList && is_array($this->URLUploadInfoList)){
            $n = 0;
            foreach($this->URLUploadInfoList as $item){
                $res['URLUploadInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['NonExists'] = [];
        if(null !== $this->nonExists){
            $res['NonExists'] = $this->nonExists;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetURLUploadInfosResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['URLUploadInfoList'])){
            if(!empty($map['URLUploadInfoList'])){
                $model->URLUploadInfoList = [];
                $n = 0;
                foreach($map['URLUploadInfoList'] as $item) {
                    $model->URLUploadInfoList[$n++] = null !== $item ? URLUploadInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['NonExists'])){
            if(!empty($map['NonExists'])){
                $model->nonExists = [];
                $model->nonExists = $map['NonExists'];
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
     * @description data.urlUploadInfoList
     * @var array
     */
    public $URLUploadInfoList;

    /**
     * @description data.nonExists
     * @var array
     */
    public $nonExists;

}
