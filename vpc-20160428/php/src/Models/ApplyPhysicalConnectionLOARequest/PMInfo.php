<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOARequest;

use AlibabaCloud\Tea\Model;

class PMInfo extends Model
{
    /**
     * @var string
     */
    public $PMName;

    /**
     * @var string
     */
    public $PMContactInfo;

    /**
     * @var string
     */
    public $PMCertificateType;

    /**
     * @var string
     */
    public $PMCertificateNo;

    /**
     * @var string
     */
    public $PMGender;
    protected $_name = [
        'PMName'            => 'PMName',
        'PMContactInfo'     => 'PMContactInfo',
        'PMCertificateType' => 'PMCertificateType',
        'PMCertificateNo'   => 'PMCertificateNo',
        'PMGender'          => 'PMGender',
    ];

    public function validate()
    {
        Model::validateRequired('PMName', $this->PMName, true);
        Model::validateRequired('PMContactInfo', $this->PMContactInfo, true);
        Model::validateRequired('PMCertificateType', $this->PMCertificateType, true);
        Model::validateRequired('PMCertificateNo', $this->PMCertificateNo, true);
        Model::validateRequired('PMGender', $this->PMGender, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->PMName) {
            $res['PMName'] = $this->PMName;
        }
        if (null !== $this->PMContactInfo) {
            $res['PMContactInfo'] = $this->PMContactInfo;
        }
        if (null !== $this->PMCertificateType) {
            $res['PMCertificateType'] = $this->PMCertificateType;
        }
        if (null !== $this->PMCertificateNo) {
            $res['PMCertificateNo'] = $this->PMCertificateNo;
        }
        if (null !== $this->PMGender) {
            $res['PMGender'] = $this->PMGender;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PMInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PMName'])) {
            $model->PMName = $map['PMName'];
        }
        if (isset($map['PMContactInfo'])) {
            $model->PMContactInfo = $map['PMContactInfo'];
        }
        if (isset($map['PMCertificateType'])) {
            $model->PMCertificateType = $map['PMCertificateType'];
        }
        if (isset($map['PMCertificateNo'])) {
            $model->PMCertificateNo = $map['PMCertificateNo'];
        }
        if (isset($map['PMGender'])) {
            $model->PMGender = $map['PMGender'];
        }

        return $model;
    }
}
