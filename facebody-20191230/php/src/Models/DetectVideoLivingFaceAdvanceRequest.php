<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoLivingFaceAdvanceRequest extends Model {
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
    ];
    public function validate() {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoUrlObject'] = $this->videoUrlObject;
        return $res;
    }
    /**
     * @param array $map
     * @return DetectVideoLivingFaceAdvanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoUrlObject'])){
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        return $model;
    }
    /**
     * @description VideoUrlObject
     * @var Stream
     */
    public $videoUrlObject;

}
