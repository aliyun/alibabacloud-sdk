<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyVRouterAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $VRouterName;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'regionId'    => 'RegionId',
        'VRouterId'   => 'VRouterId',
        'VRouterName' => 'VRouterName',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('VRouterId', $this->VRouterId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->VRouterName) {
            $res['VRouterName'] = $this->VRouterName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVRouterAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['VRouterName'])) {
            $model->VRouterName = $map['VRouterName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
