<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponse\AIJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponse\nonExistAIJobIds;
use AlibabaCloud\Tea\Model;

class ListAIJobResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.jobDTOs
     *
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @description data.nonExistJobIds
     *
     * @var nonExistAIJobIds
     */
    public $nonExistAIJobIds;
    protected $_name = [
        'requestId'        => 'RequestId',
        'AIJobList'        => 'AIJobList',
        'nonExistAIJobIds' => 'NonExistAIJobIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIJobList', $this->AIJobList, true);
        Model::validateRequired('nonExistAIJobIds', $this->nonExistAIJobIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->AIJobList) {
            $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        }
        if (null !== $this->nonExistAIJobIds) {
            $res['NonExistAIJobIds'] = null !== $this->nonExistAIJobIds ? $this->nonExistAIJobIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAIJobResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AIJobList'])) {
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }
        if (isset($map['NonExistAIJobIds'])) {
            $model->nonExistAIJobIds = nonExistAIJobIds::fromMap($map['NonExistAIJobIds']);
        }

        return $model;
    }
}
