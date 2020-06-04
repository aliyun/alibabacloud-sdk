<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails;

class DescribeVodDomainLogResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainLogDetails' => 'DomainLogDetails',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainLogDetails', $this->domainLogDetails, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainLogDetails'] = null !== $this->domainLogDetails ? $this->domainLogDetails->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainLogResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainLogDetails'])){
            $model->domainLogDetails = domainLogDetails::fromMap($map['DomainLogDetails']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.content
     * @var domainLogDetails
     */
    public $domainLogDetails;

}
