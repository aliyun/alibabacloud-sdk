<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServicePublishedApisRequest extends Model
{
    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description apiNameKeyword
     *
     * @var string
     */
    public $apiNameKeyword;

    /**
     * @description apiPathKeyword
     *
     * @var string
     */
    public $apiPathKeyword;

    /**
     * @description creator
     *
     * @var string
     */
    public $creatorId;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'projectId'      => 'ProjectId',
        'tenantId'       => 'TenantId',
        'apiNameKeyword' => 'ApiNameKeyword',
        'apiPathKeyword' => 'ApiPathKeyword',
        'creatorId'      => 'CreatorId',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->apiNameKeyword) {
            $res['ApiNameKeyword'] = $this->apiNameKeyword;
        }
        if (null !== $this->apiPathKeyword) {
            $res['ApiPathKeyword'] = $this->apiPathKeyword;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServicePublishedApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ApiNameKeyword'])) {
            $model->apiNameKeyword = $map['ApiNameKeyword'];
        }
        if (isset($map['ApiPathKeyword'])) {
            $model->apiPathKeyword = $map['ApiPathKeyword'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        return $model;
    }
}
