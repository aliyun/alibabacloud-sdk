<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\VerifyFaceMaskResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var int
     */
    public $mask;

    /**
     * @var int
     */
    public $maskRef;

    /**
     * @var array
     */
    public $rectangle;

    /**
     * @var array
     */
    public $rectangleRef;

    /**
     * @var array
     */
    public $thresholds;
    protected $_name = [
        'confidence'   => 'Confidence',
        'mask'         => 'Mask',
        'maskRef'      => 'MaskRef',
        'rectangle'    => 'Rectangle',
        'rectangleRef' => 'RectangleRef',
        'thresholds'   => 'Thresholds',
    ];

    public function validate()
    {
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('mask', $this->mask, true);
        Model::validateRequired('maskRef', $this->maskRef, true);
        Model::validateRequired('rectangle', $this->rectangle, true);
        Model::validateRequired('rectangleRef', $this->rectangleRef, true);
        Model::validateRequired('thresholds', $this->thresholds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->maskRef) {
            $res['MaskRef'] = $this->maskRef;
        }
        if (null !== $this->rectangle) {
            $res['Rectangle'] = [];
            if (null !== $this->rectangle) {
                $res['Rectangle'] = $this->rectangle;
            }
        }
        if (null !== $this->rectangleRef) {
            $res['RectangleRef'] = [];
            if (null !== $this->rectangleRef) {
                $res['RectangleRef'] = $this->rectangleRef;
            }
        }
        if (null !== $this->thresholds) {
            $res['Thresholds'] = [];
            if (null !== $this->thresholds) {
                $res['Thresholds'] = $this->thresholds;
            }
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['MaskRef'])) {
            $model->maskRef = $map['MaskRef'];
        }
        if (isset($map['Rectangle'])) {
            if (!empty($map['Rectangle'])) {
                $model->rectangle = [];
                $model->rectangle = $map['Rectangle'];
            }
        }
        if (isset($map['RectangleRef'])) {
            if (!empty($map['RectangleRef'])) {
                $model->rectangleRef = [];
                $model->rectangleRef = $map['RectangleRef'];
            }
        }
        if (isset($map['Thresholds'])) {
            if (!empty($map['Thresholds'])) {
                $model->thresholds = [];
                $model->thresholds = $map['Thresholds'];
            }
        }

        return $model;
    }
}
