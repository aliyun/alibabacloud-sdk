<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse\customDomains;

use AlibabaCloud\Tea\Model;

class domainItem extends Model
{
    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description certificateId
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description certificateName
     *
     * @var string
     */
    public $certificateName;

    /**
     * @description domainNameResolution
     *
     * @var string
     */
    public $domainCNAMEStatus;

    /**
     * @description bindStatus
     *
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @description bindStageName
     *
     * @var string
     */
    public $bindStageName;

    /**
     * @description domainLegalStatus
     *
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @description domainWebSocketStatus
     *
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @description remark
     *
     * @var string
     */
    public $domainRemark;
    protected $_name = [
        'domainName'            => 'DomainName',
        'certificateId'         => 'CertificateId',
        'certificateName'       => 'CertificateName',
        'domainCNAMEStatus'     => 'DomainCNAMEStatus',
        'domainBindingStatus'   => 'DomainBindingStatus',
        'bindStageName'         => 'BindStageName',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'domainRemark'          => 'DomainRemark',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('certificateId', $this->certificateId, true);
        Model::validateRequired('certificateName', $this->certificateName, true);
        Model::validateRequired('domainCNAMEStatus', $this->domainCNAMEStatus, true);
        Model::validateRequired('domainBindingStatus', $this->domainBindingStatus, true);
        Model::validateRequired('bindStageName', $this->bindStageName, true);
        Model::validateRequired('domainLegalStatus', $this->domainLegalStatus, true);
        Model::validateRequired('domainWebSocketStatus', $this->domainWebSocketStatus, true);
        Model::validateRequired('domainRemark', $this->domainRemark, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domainCNAMEStatus) {
            $res['DomainCNAMEStatus'] = $this->domainCNAMEStatus;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['DomainCNAMEStatus'])) {
            $model->domainCNAMEStatus = $map['DomainCNAMEStatus'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }

        return $model;
    }
}
