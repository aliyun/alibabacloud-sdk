<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse\physicalConnectionLOAType\PMInfo;

use AlibabaCloud\Tea\Model;

class PMInfo extends Model
{
    /**
     * @description description: The name of the data center cable installation technician or representative. ;
     *
     * @var string
     */
    public $PMName;

    /**
     * @description description: The contact information of the data center cable installation technician or representative. ;
     *
     * @var string
     */
    public $PMContactInfo;

    /**
     * @description description: The type of certificate or licence held by the data center cable installation technician or representative. ;
     *
     * @var string
     */
    public $PMCertificateType;

    /**
     * @description description: The certificate or licence number of the data center cable installation technician or representative.;
     *
     * @var string
     */
    public $PMCertificateNo;

    /**
     * @description description: The gender of the data center cable installation technician or representative.;
     *
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
