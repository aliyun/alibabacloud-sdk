<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponse\attachInstanceRamRoleResults;
use AlibabaCloud\Tea\Model;

class AttachInstanceRamRoleResponse extends Model
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
    public $failCount;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var attachInstanceRamRoleResults
     */
    public $attachInstanceRamRoleResults;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
        'failCount'                    => 'FailCount',
        'ramRoleName'                  => 'RamRoleName',
        'attachInstanceRamRoleResults' => 'AttachInstanceRamRoleResults',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('failCount', $this->failCount, true);
        Model::validateRequired('ramRoleName', $this->ramRoleName, true);
        Model::validateRequired('attachInstanceRamRoleResults', $this->attachInstanceRamRoleResults, true);
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
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->attachInstanceRamRoleResults) {
            $res['AttachInstanceRamRoleResults'] = null !== $this->attachInstanceRamRoleResults ? $this->attachInstanceRamRoleResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachInstanceRamRoleResponse
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
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['AttachInstanceRamRoleResults'])) {
            $model->attachInstanceRamRoleResults = attachInstanceRamRoleResults::fromMap($map['AttachInstanceRamRoleResults']);
        }

        return $model;
    }
}
