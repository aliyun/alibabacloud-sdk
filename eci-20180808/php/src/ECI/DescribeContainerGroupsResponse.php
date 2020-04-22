<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.nextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description data.totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data.data
     *
     * @var array
     */
    public $containerGroups;
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextToken'       => 'NextToken',
        'totalCount'      => 'TotalCount',
        'containerGroups' => 'ContainerGroups',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('containerGroups', $this->containerGroups, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['RequestId']       = $this->requestId;
        $res['NextToken']       = $this->nextToken;
        $res['TotalCount']      = $this->totalCount;
        $res['ContainerGroups'] = [];
        if (null !== $this->containerGroups && \is_array($this->containerGroups)) {
            $n = 0;
            foreach ($this->containerGroups as $item) {
                $res['ContainerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ContainerGroups'])) {
            if (!empty($map['ContainerGroups'])) {
                $model->containerGroups = [];
                $n                      = 0;
                foreach ($map['ContainerGroups'] as $item) {
                    $model->containerGroups[$n++] = null !== $item ? DescribeContainerGroupsResponse\containerGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
