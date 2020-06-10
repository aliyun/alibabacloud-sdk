<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse\AIJobList;
use AlibabaCloud\Tea\Model;

class SubmitAIJobResponse extends Model
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
    protected $_name = [
        'requestId' => 'RequestId',
        'AIJobList' => 'AIJobList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIJobList', $this->AIJobList, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIJobResponse
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

        return $model;
    }
}
