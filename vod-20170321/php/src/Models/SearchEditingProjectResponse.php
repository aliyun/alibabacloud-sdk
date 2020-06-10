<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse\projectList;
use AlibabaCloud\Tea\Model;

class SearchEditingProjectResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     *
     * @var int
     */
    public $total;

    /**
     * @description data.projectDOList
     *
     * @var projectList
     */
    public $projectList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'projectList' => 'ProjectList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('projectList', $this->projectList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->projectList) {
            $res['ProjectList'] = null !== $this->projectList ? $this->projectList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEditingProjectResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ProjectList'])) {
            $model->projectList = projectList::fromMap($map['ProjectList']);
        }

        return $model;
    }
}
