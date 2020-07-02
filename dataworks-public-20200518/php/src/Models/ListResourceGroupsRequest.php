<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @description type
     *
     * @var int
     */
    public $resourceGroupType;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyword;
    protected $_name = [
        'resourceGroupType' => 'ResourceGroupType',
        'keyword'           => 'Keyword',
    ];

    public function validate()
    {
        Model::validateRequired('resourceGroupType', $this->resourceGroupType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        return $model;
    }
}
