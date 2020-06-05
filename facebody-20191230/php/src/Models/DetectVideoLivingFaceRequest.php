<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVideoLivingFaceRequest extends Model {
    protected $_name = [
        'videoUrl' => 'VideoUrl',
    ];
    public function validate() {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoUrl'] = $this->videoUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return DetectVideoLivingFaceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoUrl'])){
            $model->videoUrl = $map['VideoUrl'];
        }
        return $model;
    }
    /**
     * @description videoUrl
     * @var string
     */
    public $videoUrl;

}
