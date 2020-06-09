<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'confidence' => 'Confidence',
        'thresholds' => 'Thresholds',
        'rectAList' => 'RectAList',
        'rectBList' => 'RectBList',
    ];
    public function validate() {
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('thresholds', $this->thresholds, true);
        Model::validateRequired('rectAList', $this->rectAList, true);
        Model::validateRequired('rectBList', $this->rectBList, true);
    }
    public function toMap() {
        $res = [];
        $res['Confidence'] = $this->confidence;
        $res['Thresholds'] = [];
        if(null !== $this->thresholds){
            $res['Thresholds'] = $this->thresholds;
        }
        $res['RectAList'] = [];
        if(null !== $this->rectAList){
            $res['RectAList'] = $this->rectAList;
        }
        $res['RectBList'] = [];
        if(null !== $this->rectBList){
            $res['RectBList'] = $this->rectBList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Confidence'])){
            $model->confidence = $map['Confidence'];
        }
        if(isset($map['Thresholds'])){
            if(!empty($map['Thresholds'])){
                $model->thresholds = [];
                $model->thresholds = $map['Thresholds'];
            }
        }
        if(isset($map['RectAList'])){
            if(!empty($map['RectAList'])){
                $model->rectAList = [];
                $model->rectAList = $map['RectAList'];
            }
        }
        if(isset($map['RectBList'])){
            if(!empty($map['RectBList'])){
                $model->rectBList = [];
                $model->rectBList = $map['RectBList'];
            }
        }
        return $model;
    }
    /**
     * @description confidence
     * @var float
     */
    public $confidence;

    /**
     * @description thresholds
     * @var array
     */
    public $thresholds;

    /**
     * @description rectAList
     * @var array
     */
    public $rectAList;

    /**
     * @description rectBList
     * @var array
     */
    public $rectBList;

}
