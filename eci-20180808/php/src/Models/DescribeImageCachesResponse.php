<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse\imageCaches;

class DescribeImageCachesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'imageCaches' => 'ImageCaches',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('imageCaches', $this->imageCaches, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ImageCaches'] = [];
        if(null !== $this->imageCaches && is_array($this->imageCaches)){
            $n = 0;
            foreach($this->imageCaches as $item){
                $res['ImageCaches'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeImageCachesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ImageCaches'])){
            if(!empty($map['ImageCaches'])){
                $model->imageCaches = [];
                $n = 0;
                foreach($map['ImageCaches'] as $item) {
                    $model->imageCaches[$n++] = null !== $item ? imageCaches::fromMap($item) : $item;
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
     * @description data
     * @var array
     */
    public $imageCaches;

}
