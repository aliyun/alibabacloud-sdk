<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponse\userPlayStatisAvgs;

class DescribePlayUserAvgResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'userPlayStatisAvgs' => 'UserPlayStatisAvgs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('userPlayStatisAvgs', $this->userPlayStatisAvgs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UserPlayStatisAvgs'] = null !== $this->userPlayStatisAvgs ? $this->userPlayStatisAvgs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePlayUserAvgResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UserPlayStatisAvgs'])){
            $model->userPlayStatisAvgs = userPlayStatisAvgs::fromMap($map['UserPlayStatisAvgs']);
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
     * @var userPlayStatisAvgs
     */
    public $userPlayStatisAvgs;

}
