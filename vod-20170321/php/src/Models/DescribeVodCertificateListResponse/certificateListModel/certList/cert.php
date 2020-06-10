<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel\certList;

use AlibabaCloud\Tea\Model;

class cert extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $certName;

    /**
     * @description id
     *
     * @var int
     */
    public $certId;

    /**
     * @description fingerprint
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description common
     *
     * @var string
     */
    public $common;

    /**
     * @description issuer
     *
     * @var string
     */
    public $issuer;

    /**
     * @description lastTime
     *
     * @var int
     */
    public $lastTime;
    protected $_name = [
        'certName'    => 'CertName',
        'certId'      => 'CertId',
        'fingerprint' => 'Fingerprint',
        'common'      => 'Common',
        'issuer'      => 'Issuer',
        'lastTime'    => 'LastTime',
    ];

    public function validate()
    {
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certId', $this->certId, true);
        Model::validateRequired('fingerprint', $this->fingerprint, true);
        Model::validateRequired('common', $this->common, true);
        Model::validateRequired('issuer', $this->issuer, true);
        Model::validateRequired('lastTime', $this->lastTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        return $model;
    }
}
