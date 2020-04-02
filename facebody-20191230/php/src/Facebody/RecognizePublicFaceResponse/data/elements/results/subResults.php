<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceResponse\data\elements\results;

use AlibabaCloud\Tea\Model;

class subResults extends Model
{
    /**
     * @description h
     *
     * @var float
     */
    public $h;
    /**
     * @description w
     *
     * @var float
     */
    public $w;
    /**
     * @description x
     *
     * @var float
     */
    public $x;
    /**
     * @description h
     *
     * @var float
     */
    public $y;
    /**
     * @description faces
     *
     * @var array
     */
    public $faces;
    protected $_name = [
        'h'     => 'H',
        'w'     => 'W',
        'x'     => 'X',
        'y'     => 'Y',
        'faces' => 'Faces',
    ];

    public function validate()
    {
        Model::validateRequired('h', $this->h, true);
        Model::validateRequired('w', $this->w, true);
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('faces', $this->faces, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['H']     = $this->h;
        $res['W']     = $this->w;
        $res['X']     = $this->x;
        $res['Y']     = $this->y;
        $res['Faces'] = [];
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
     * @return subResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? RecognizePublicFaceResponse\data\elements\results\subResults\faces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
