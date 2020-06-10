<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description minX
     *
     * @var int
     */
    public $minX;

    /**
     * @description minY
     *
     * @var int
     */
    public $minY;

    /**
     * @description maxX
     *
     * @var int
     */
    public $maxX;

    /**
     * @description maxY
     *
     * @var int
     */
    public $maxY;

    /**
     * @description score
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'minX'  => 'MinX',
        'minY'  => 'MinY',
        'maxX'  => 'MaxX',
        'maxY'  => 'MaxY',
        'score' => 'Score',
    ];

    public function validate()
    {
        Model::validateRequired('minX', $this->minX, true);
        Model::validateRequired('minY', $this->minY, true);
        Model::validateRequired('maxX', $this->maxX, true);
        Model::validateRequired('maxY', $this->maxY, true);
        Model::validateRequired('score', $this->score, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minX) {
            $res['MinX'] = $this->minX;
        }
        if (null !== $this->minY) {
            $res['MinY'] = $this->minY;
        }
        if (null !== $this->maxX) {
            $res['MaxX'] = $this->maxX;
        }
        if (null !== $this->maxY) {
            $res['MaxY'] = $this->maxY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MinX'])) {
            $model->minX = $map['MinX'];
        }
        if (isset($map['MinY'])) {
            $model->minY = $map['MinY'];
        }
        if (isset($map['MaxX'])) {
            $model->maxX = $map['MaxX'];
        }
        if (isset($map['MaxY'])) {
            $model->maxY = $map['MaxY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
