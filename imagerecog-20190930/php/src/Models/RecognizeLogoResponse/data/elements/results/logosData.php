<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponse\data\elements\results;

use AlibabaCloud\Tea\Model;

class logosData extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

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
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
        'x'    => 'X',
        'y'    => 'Y',
        'h'    => 'H',
        'w'    => 'W',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('h', $this->h, true);
        Model::validateRequired('w', $this->w, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logosData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }

        return $model;
    }
}
