<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description domain
     *
     * @var string
     */
    public $domainName;

    /**
     * @description cert_name
     *
     * @var string
     */
    public $certName;

    /**
     * @description cert_domain
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @description cert_expire_time
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description cert_life
     *
     * @var string
     */
    public $certLife;

    /**
     * @description cert_org
     *
     * @var string
     */
    public $certOrg;

    /**
     * @description cert_type
     *
     * @var string
     */
    public $certType;

    /**
     * @description https
     *
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'domainName'              => 'DomainName',
        'certName'                => 'CertName',
        'certDomainName'          => 'CertDomainName',
        'certExpireTime'          => 'CertExpireTime',
        'certLife'                => 'CertLife',
        'certOrg'                 => 'CertOrg',
        'certType'                => 'CertType',
        'serverCertificateStatus' => 'ServerCertificateStatus',
        'status'                  => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certDomainName', $this->certDomainName, true);
        Model::validateRequired('certExpireTime', $this->certExpireTime, true);
        Model::validateRequired('certLife', $this->certLife, true);
        Model::validateRequired('certOrg', $this->certOrg, true);
        Model::validateRequired('certType', $this->certType, true);
        Model::validateRequired('serverCertificateStatus', $this->serverCertificateStatus, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certDomainName) {
            $res['CertDomainName'] = $this->certDomainName;
        }
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certLife) {
            $res['CertLife'] = $this->certLife;
        }
        if (null !== $this->certOrg) {
            $res['CertOrg'] = $this->certOrg;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertDomainName'])) {
            $model->certDomainName = $map['CertDomainName'];
        }
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertLife'])) {
            $model->certLife = $map['CertLife'];
        }
        if (isset($map['CertOrg'])) {
            $model->certOrg = $map['CertOrg'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
