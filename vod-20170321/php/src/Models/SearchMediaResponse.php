<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList;

class SearchMediaResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'scrollToken' => 'ScrollToken',
        'total' => 'Total',
        'mediaList' => 'MediaList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('scrollToken', $this->scrollToken, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('mediaList', $this->mediaList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ScrollToken'] = $this->scrollToken;
        $res['Total'] = $this->total;
        $res['MediaList'] = [];
        if(null !== $this->mediaList && is_array($this->mediaList)){
            $n = 0;
            foreach($this->mediaList as $item){
                $res['MediaList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchMediaResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ScrollToken'])){
            $model->scrollToken = $map['ScrollToken'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['MediaList'])){
            if(!empty($map['MediaList'])){
                $model->mediaList = [];
                $n = 0;
                foreach($map['MediaList'] as $item) {
                    $model->mediaList[$n++] = null !== $item ? mediaList::fromMap($item) : $item;
                }
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
     * @description data.scrollToken
     * @var string
     */
    public $scrollToken;

    /**
     * @description data.total
     * @var integer
     */
    public $total;

    /**
     * @description data.mediaDTOList
     * @var array
     */
    public $mediaList;

}
