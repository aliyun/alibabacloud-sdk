<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\facebody\V20191230\Models\DetectVideoLivingFaceResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model {
    protected $_name = [
        'liveConfidence' => 'LiveConfidence',
        'faceConfidence' => 'FaceConfidence',
        'rect' => 'Rect',
    ];
    public function validate() {
        Model::validateRequired('liveConfidence', $this->liveConfidence, true);
        Model::validateRequired('faceConfidence', $this->faceConfidence, true);
        Model::validateRequired('rect', $this->rect, true);
    }
    public function toMap() {
        $res = [];
        $res['LiveConfidence'] = $this->liveConfidence;
        $res['FaceConfidence'] = $this->faceConfidence;
        $res['Rect'] = [];
        if(null !== $this->rect){
            $res['Rect'] = $this->rect;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return elements
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LiveConfidence'])){
            $model->liveConfidence = $map['LiveConfidence'];
        }
        if(isset($map['FaceConfidence'])){
            $model->faceConfidence = $map['FaceConfidence'];
        }
        if(isset($map['Rect'])){
            if(!empty($map['Rect'])){
                $model->rect = [];
                $model->rect = $map['Rect'];
            }
        }
        return $model;
    }
    /**
     * @description liveConfidence
     * @var float
     */
    public $liveConfidence;

    /**
     * @description faceConfidence
     * @var float
     */
    public $faceConfidence;

    /**
     * @description rect
     * @var array
     */
    public $rect;

}
