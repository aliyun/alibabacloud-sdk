<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\SearchBodyResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description deviceGbId
     *
     * @var string
     */
    public $gbId;

    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description leftTopX
     *
     * @var float
     */
    public $leftTopX;

    /**
     * @description leftTopY
     *
     * @var float
     */
    public $leftTopY;

    /**
     * @description rightBtmX
     *
     * @var float
     */
    public $rightBottomX;

    /**
     * @description rightBtmY
     *
     * @var float
     */
    public $rightBottomY;

    /**
     * @description score
     *
     * @var float
     */
    public $score;

    /**
     * @description targetImageUrl
     *
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'gbId'           => 'GbId',
        'imageUrl'       => 'ImageUrl',
        'leftTopX'       => 'LeftTopX',
        'leftTopY'       => 'LeftTopY',
        'rightBottomX'   => 'RightBottomX',
        'rightBottomY'   => 'RightBottomY',
        'score'          => 'Score',
        'targetImageUrl' => 'TargetImageUrl',
    ];

    public function validate()
    {
        Model::validateRequired('gbId', $this->gbId, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('targetImageUrl', $this->targetImageUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }

        return $model;
    }
}
