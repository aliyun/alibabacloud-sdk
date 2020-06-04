<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse\domainConfigs;

class DescribeVodDomainConfigsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainConfigs' => 'DomainConfigs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainConfigs', $this->domainConfigs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainConfigs'] = null !== $this->domainConfigs ? $this->domainConfigs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainConfigsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainConfigs'])){
            $model->domainConfigs = domainConfigs::fromMap($map['DomainConfigs']);
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
     * @var domainConfigs
     */
    public $domainConfigs;

}
