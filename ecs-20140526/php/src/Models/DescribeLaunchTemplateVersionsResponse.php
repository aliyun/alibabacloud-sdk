<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets;
use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplateVersionsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var launchTemplateVersionSets
     */
    public $launchTemplateVersionSets;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'launchTemplateVersionSets' => 'LaunchTemplateVersionSets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('launchTemplateVersionSets', $this->launchTemplateVersionSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->launchTemplateVersionSets) {
            $res['LaunchTemplateVersionSets'] = null !== $this->launchTemplateVersionSets ? $this->launchTemplateVersionSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplateVersionsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['LaunchTemplateVersionSets'])) {
            $model->launchTemplateVersionSets = launchTemplateVersionSets::fromMap($map['LaunchTemplateVersionSets']);
        }

        return $model;
    }
}
