<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponse;

use AlibabaCloud\Tea\Model;

class resourceIdentifierSummaries extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var array
     */
    public $logicalResourceIds;

    /**
     * @var array
     */
    public $resourceIdentifiers;
    protected $_name = [
        'resourceType'        => 'ResourceType',
        'logicalResourceIds'  => 'LogicalResourceIds',
        'resourceIdentifiers' => 'ResourceIdentifiers',
    ];

    public function validate()
    {
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('logicalResourceIds', $this->logicalResourceIds, true);
        Model::validateRequired('resourceIdentifiers', $this->resourceIdentifiers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->logicalResourceIds) {
            $res['LogicalResourceIds'] = $this->logicalResourceIds;
        }
        if (null !== $this->resourceIdentifiers) {
            $res['ResourceIdentifiers'] = $this->resourceIdentifiers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceIdentifierSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['LogicalResourceIds'])) {
            if (!empty($map['LogicalResourceIds'])) {
                $model->logicalResourceIds = $map['LogicalResourceIds'];
            }
        }
        if (isset($map['ResourceIdentifiers'])) {
            if (!empty($map['ResourceIdentifiers'])) {
                $model->resourceIdentifiers = $map['ResourceIdentifiers'];
            }
        }

        return $model;
    }
}
