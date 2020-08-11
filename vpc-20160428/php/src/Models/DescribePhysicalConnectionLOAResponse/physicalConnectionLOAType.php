<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse\physicalConnectionLOAType\PMInfo;
use AlibabaCloud\Tea\Model;

class physicalConnectionLOAType extends Model
{
    /**
     * @description description: The instance ID of the physical connection interface. ;
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description description: The name of the company that requires the leased line. ;
     *
     * @var string
     */
    public $companyName;

    /**
     * @description description: The company name that you set when you registered your account.;
     *
     * @var string
     */
    public $companyLocalizedName;

    /**
     * @description description: The type of the physical connection.Valid values:* MSTP* Other * SDH* MPLSVPN * FIBRE;
     *
     * @var string
     */
    public $lineType;

    /**
     * @description description: The number of leased line.;
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description description: The label numbers of the cables at the installation site.;
     *
     * @var string
     */
    public $lineLabel;

    /**
     * @description description: The time when the the data center cable installation technician or representative will go to the installation site.;
     *
     * @var string
     */
    public $constructionTime;

    /**
     * @description description: The status of the physical connection interface. ;
     *
     * @var string
     */
    public $status;

    /**
     * @description description: The URL to use to download the LOA file.;
     *
     * @var string
     */
    public $loaUrl;

    /**
     * @description description: The name of the data center cable installation company. ;
     *
     * @var string
     */
    public $SI;

    /**
     * @description description: The information about the data center cable installation technician or representative.
     *
     * @var PMInfo
     */
    public $PMInfo;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'companyName'          => 'CompanyName',
        'companyLocalizedName' => 'CompanyLocalizedName',
        'lineType'             => 'LineType',
        'lineCode'             => 'LineCode',
        'lineLabel'            => 'LineLabel',
        'constructionTime'     => 'ConstructionTime',
        'status'               => 'Status',
        'loaUrl'               => 'LoaUrl',
        'SI'                   => 'SI',
        'PMInfo'               => 'PMInfo',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('companyName', $this->companyName, true);
        Model::validateRequired('companyLocalizedName', $this->companyLocalizedName, true);
        Model::validateRequired('lineType', $this->lineType, true);
        Model::validateRequired('lineCode', $this->lineCode, true);
        Model::validateRequired('lineLabel', $this->lineLabel, true);
        Model::validateRequired('constructionTime', $this->constructionTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('loaUrl', $this->loaUrl, true);
        Model::validateRequired('SI', $this->SI, true);
        Model::validateRequired('PMInfo', $this->PMInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->companyLocalizedName) {
            $res['CompanyLocalizedName'] = $this->companyLocalizedName;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }
        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->SI) {
            $res['SI'] = $this->SI;
        }
        if (null !== $this->PMInfo) {
            $res['PMInfo'] = null !== $this->PMInfo ? $this->PMInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionLOAType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['CompanyLocalizedName'])) {
            $model->companyLocalizedName = $map['CompanyLocalizedName'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }
        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['SI'])) {
            $model->SI = $map['SI'];
        }
        if (isset($map['PMInfo'])) {
            $model->PMInfo = PMInfo::fromMap($map['PMInfo']);
        }

        return $model;
    }
}
