<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponse\data\results\subResults;

use AlibabaCloud\Tea\Model;

class logoDataList extends Model
{
    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

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
     * @description Width
     *
     * @var float
     */
    public $width;

    /**
     * @description Height
     *
     * @var float
     */
    public $height;
    protected $_name = [
        'type'   => 'Type',
        'name'   => 'Name',
        'x'      => 'X',
        'y'      => 'Y',
        'width'  => 'Width',
        'height' => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Type']   = $this->type;
        $res['Name']   = $this->name;
        $res['X']      = $this->x;
        $res['Y']      = $this->y;
        $res['Width']  = $this->width;
        $res['Height'] = $this->height;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
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

        return $model;
    }
}
