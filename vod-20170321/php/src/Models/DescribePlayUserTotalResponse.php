<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals;

class DescribePlayUserTotalResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'userPlayStatisTotals' => 'UserPlayStatisTotals',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('userPlayStatisTotals', $this->userPlayStatisTotals, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UserPlayStatisTotals'] = null !== $this->userPlayStatisTotals ? $this->userPlayStatisTotals->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePlayUserTotalResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UserPlayStatisTotals'])){
            $model->userPlayStatisTotals = userPlayStatisTotals::fromMap($map['UserPlayStatisTotals']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.list
     * @var userPlayStatisTotals
     */
    public $userPlayStatisTotals;

}
