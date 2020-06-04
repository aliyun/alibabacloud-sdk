<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse\certInfos;

class DescribeVodDomainCertificateInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'certInfos' => 'CertInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('certInfos', $this->certInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['CertInfos'] = null !== $this->certInfos ? $this->certInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainCertificateInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['CertInfos'])){
            $model->certInfos = certInfos::fromMap($map['CertInfos']);
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
     * @var certInfos
     */
    public $certInfos;

}
