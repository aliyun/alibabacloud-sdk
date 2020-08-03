<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateChangeSetRequest;

use AlibabaCloud\Tea\Model;

class resourcesToImport extends Model
{
    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceIdentifier;
    protected $_name = [
        'logicalResourceId'  => 'LogicalResourceId',
        'resourceType'       => 'ResourceType',
        'resourceIdentifier' => 'ResourceIdentifier',
    ];

    public function validate()
    {
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceIdentifier', $this->resourceIdentifier, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceIdentifier) {
            $res['ResourceIdentifier'] = $this->resourceIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesToImport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceIdentifier'])) {
            $model->resourceIdentifier = $map['ResourceIdentifier'];
        }

        return $model;
    }
}
