<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results\subResults;

use AlibabaCloud\Tea\Model;

class sfaceDataList extends Model
{
    /**
     * @description x
     *
     * @var float
     */
    public $x;
    /**
     * @description y
     *
     * @var float
     */
    public $y;
    /**
     * @description width
     *
     * @var float
     */
    public $width;
    /**
     * @description heihght
     *
     * @var float
     */
    public $height;
    /**
     * @description faces
     *
     * @var array
     */
    public $faces;
    protected $_name = [
        'x'      => 'X',
        'y'      => 'Y',
        'width'  => 'Width',
        'height' => 'Height',
        'faces'  => 'Faces',
    ];

    public function validate()
    {
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('faces', $this->faces, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['X']      = $this->x;
        $res['Y']      = $this->y;
        $res['Width']  = $this->width;
        $res['Height'] = $this->height;
        $res['Faces']  = [];
        if (null !== $this->faces && \is_array($this->faces)) {
            $n = 0;
            foreach ($this->faces as $item) {
                $res['Faces'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sfaceDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\sfaceDataList\faces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
