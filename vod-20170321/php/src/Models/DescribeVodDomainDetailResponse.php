<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse\domainDetail;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse\domainDetail\sources;

class DescribeVodDomainDetailResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainDetail' => 'DomainDetail',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainDetail', $this->domainDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainDetail'] = null !== $this->domainDetail ? $this->domainDetail->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainDetailResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainDetail'])){
            $model->domainDetail = domainDetail::fromMap($map['DomainDetail']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var domainDetail
     */
    public $domainDetail;

}
