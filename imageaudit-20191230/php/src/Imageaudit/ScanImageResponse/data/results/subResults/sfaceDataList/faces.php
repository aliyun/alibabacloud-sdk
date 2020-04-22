<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results\subResults\sfaceDataList;

use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description rate
     *
     * @var float
     */
    public $rate;

    /**
     * @description id
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'name' => 'Name',
        'rate' => 'Rate',
        'id'   => 'Id',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('id', $this->id, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Name'] = $this->name;
        $res['Rate'] = $this->rate;
        $res['Id']   = $this->id;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
