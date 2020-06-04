<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainCertificateInfoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'domainName' => 'DomainName',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['DomainName'] = $this->domainName;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainCertificateInfoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description domain
     * @var string
     */
    public $domainName;

}
