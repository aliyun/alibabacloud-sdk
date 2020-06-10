<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals;
use AlibabaCloud\Tea\Model;

class DescribePlayUserTotalResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.list
     *
     * @var userPlayStatisTotals
     */
    public $userPlayStatisTotals;
    protected $_name = [
        'requestId'            => 'RequestId',
        'userPlayStatisTotals' => 'UserPlayStatisTotals',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('userPlayStatisTotals', $this->userPlayStatisTotals, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userPlayStatisTotals) {
            $res['UserPlayStatisTotals'] = null !== $this->userPlayStatisTotals ? $this->userPlayStatisTotals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayUserTotalResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserPlayStatisTotals'])) {
            $model->userPlayStatisTotals = userPlayStatisTotals::fromMap($map['UserPlayStatisTotals']);
        }

        return $model;
    }
}
