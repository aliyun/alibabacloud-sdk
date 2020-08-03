<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateSummaryResponse\resourceIdentifierSummaries;
use AlibabaCloud\Tea\Model;

class GetTemplateSummaryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var array
     */
    public $metadata;

    /**
     * @var string
     */
    public $version;

    /**
     * @var array
     */
    public $resourceIdentifierSummaries;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @var array
     */
    public $resourceTypes;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'description'                 => 'Description',
        'metadata'                    => 'Metadata',
        'version'                     => 'Version',
        'resourceIdentifierSummaries' => 'ResourceIdentifierSummaries',
        'parameters'                  => 'Parameters',
        'resourceTypes'               => 'ResourceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('metadata', $this->metadata, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('resourceIdentifierSummaries', $this->resourceIdentifierSummaries, true);
        Model::validateRequired('parameters', $this->parameters, true);
        Model::validateRequired('resourceTypes', $this->resourceTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->resourceIdentifierSummaries) {
            $res['ResourceIdentifierSummaries'] = [];
            if (null !== $this->resourceIdentifierSummaries && \is_array($this->resourceIdentifierSummaries)) {
                $n = 0;
                foreach ($this->resourceIdentifierSummaries as $item) {
                    $res['ResourceIdentifierSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateSummaryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ResourceIdentifierSummaries'])) {
            if (!empty($map['ResourceIdentifierSummaries'])) {
                $model->resourceIdentifierSummaries = [];
                $n                                  = 0;
                foreach ($map['ResourceIdentifierSummaries'] as $item) {
                    $model->resourceIdentifierSummaries[$n++] = null !== $item ? resourceIdentifierSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }

        return $model;
    }
}
