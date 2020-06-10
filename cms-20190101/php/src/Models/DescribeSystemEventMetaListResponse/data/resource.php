<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventMetaListResponse\data;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description product
     *
     * @var string
     */
    public $product;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description nameDesc
     *
     * @var string
     */
    public $nameDesc;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description statusDesc
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description eventType
     *
     * @var string
     */
    public $eventType;
    protected $_name = [
        'product'    => 'Product',
        'name'       => 'Name',
        'nameDesc'   => 'NameDesc',
        'level'      => 'Level',
        'status'     => 'Status',
        'statusDesc' => 'StatusDesc',
        'eventType'  => 'EventType',
    ];

    public function validate()
    {
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('nameDesc', $this->nameDesc, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusDesc', $this->statusDesc, true);
        Model::validateRequired('eventType', $this->eventType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameDesc) {
            $res['NameDesc'] = $this->nameDesc;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameDesc'])) {
            $model->nameDesc = $map['NameDesc'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
