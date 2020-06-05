<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponse\data\elements\faceRectangle;

class elements extends Model {
    protected $_name = [
        'expression' => 'Expression',
        'faceProbability' => 'FaceProbability',
        'faceRectangle' => 'FaceRectangle',
    ];
    public function validate() {
        Model::validateRequired('expression', $this->expression, true);
        Model::validateRequired('faceProbability', $this->faceProbability, true);
        Model::validateRequired('faceRectangle', $this->faceRectangle, true);
    }
    public function toMap() {
        $res = [];
        $res['Expression'] = $this->expression;
        $res['FaceProbability'] = $this->faceProbability;
        $res['FaceRectangle'] = null !== $this->faceRectangle ? $this->faceRectangle->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return elements
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Expression'])){
            $model->expression = $map['Expression'];
        }
        if(isset($map['FaceProbability'])){
            $model->faceProbability = $map['FaceProbability'];
        }
        if(isset($map['FaceRectangle'])){
            $model->faceRectangle = faceRectangle::fromMap($map['FaceRectangle']);
        }
        return $model;
    }
    /**
     * @description expression
     * @var string
     */
    public $expression;

    /**
     * @description faceProbability
     * @var float
     */
    public $faceProbability;

    /**
     * @description faceRectangle
     * @var faceRectangle
     */
    public $faceRectangle;

}
