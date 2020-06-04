<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponse;

use AlibabaCloud\Tea\Model;

class nonExistImageIds extends Model {
    protected $_name = [
        'imageId' => 'ImageId',
    ];
    public function validate() {
        Model::validateRequired('imageId', $this->imageId, true);
    }
    public function toMap() {
        $res = [];
        $res['ImageId'] = [];
        if(null !== $this->imageId){
            $res['ImageId'] = $this->imageId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return nonExistImageIds
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImageId'])){
            if(!empty($map['ImageId'])){
                $model->imageId = [];
                $model->imageId = $map['ImageId'];
            }
        }
        return $model;
    }
    /**
     * @description ImageId
     * @var array
     */
    public $imageId;

}
