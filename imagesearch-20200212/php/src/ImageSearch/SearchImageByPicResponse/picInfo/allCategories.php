<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByPicResponse\picInfo;

use AlibabaCloud\Tea\Model;

class allCategories extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;
    /**
     * @description name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Id']   = $this->id;
        $res['Name'] = $this->name;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
