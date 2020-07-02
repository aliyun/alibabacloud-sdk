<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description NewProbability
     *
     * @var string
     */
    public $newProbability;

    /**
     * @description NormalProbability
     *
     * @var string
     */
    public $normalProbability;

    /**
     * @description OtherProbability
     *
     * @var string
     */
    public $otherProbability;

    /**
     * @description LesionRatio
     *
     * @var string
     */
    public $lesionRatio;

    /**
     * @description Mask
     *
     * @var string
     */
    public $mask;
    protected $_name = [
        'newProbability'    => 'NewProbability',
        'normalProbability' => 'NormalProbability',
        'otherProbability'  => 'OtherProbability',
        'lesionRatio'       => 'LesionRatio',
        'mask'              => 'Mask',
    ];

    public function validate()
    {
        Model::validateRequired('newProbability', $this->newProbability, true);
        Model::validateRequired('normalProbability', $this->normalProbability, true);
        Model::validateRequired('otherProbability', $this->otherProbability, true);
        Model::validateRequired('lesionRatio', $this->lesionRatio, true);
        Model::validateRequired('mask', $this->mask, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newProbability) {
            $res['NewProbability'] = $this->newProbability;
        }
        if (null !== $this->normalProbability) {
            $res['NormalProbability'] = $this->normalProbability;
        }
        if (null !== $this->otherProbability) {
            $res['OtherProbability'] = $this->otherProbability;
        }
        if (null !== $this->lesionRatio) {
            $res['LesionRatio'] = $this->lesionRatio;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewProbability'])) {
            $model->newProbability = $map['NewProbability'];
        }
        if (isset($map['NormalProbability'])) {
            $model->normalProbability = $map['NormalProbability'];
        }
        if (isset($map['OtherProbability'])) {
            $model->otherProbability = $map['OtherProbability'];
        }
        if (isset($map['LesionRatio'])) {
            $model->lesionRatio = $map['LesionRatio'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        return $model;
    }
}
