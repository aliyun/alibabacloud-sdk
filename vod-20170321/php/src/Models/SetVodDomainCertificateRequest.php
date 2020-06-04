<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetVodDomainCertificateRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'domainName' => 'DomainName',
        'certName' => 'CertName',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'SSLPri' => 'SSLPri',
        'region' => 'Region',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('SSLProtocol', $this->SSLProtocol, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['DomainName'] = $this->domainName;
        $res['CertName'] = $this->certName;
        $res['SSLProtocol'] = $this->SSLProtocol;
        $res['SSLPub'] = $this->SSLPub;
        $res['SSLPri'] = $this->SSLPri;
        $res['Region'] = $this->region;
        return $res;
    }
    /**
     * @param array $map
     * @return SetVodDomainCertificateRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['CertName'])){
            $model->certName = $map['CertName'];
        }
        if(isset($map['SSLProtocol'])){
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if(isset($map['SSLPub'])){
            $model->SSLPub = $map['SSLPub'];
        }
        if(isset($map['SSLPri'])){
            $model->SSLPri = $map['SSLPri'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description certName
     * @var string
     */
    public $certName;

    /**
     * @description sslProtocol
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description sslPub
     * @var string
     */
    public $SSLPub;

    /**
     * @description sslPri
     * @var string
     */
    public $SSLPri;

    /**
     * @description region
     * @var string
     */
    public $region;

}
