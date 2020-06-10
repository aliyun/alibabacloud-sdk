<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordStatisticsRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description startDate
     *
     * @var string
     */
    public $startDate;

    /**
     * @description endDate
     *
     * @var string
     */
    public $endDate;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description rr
     *
     * @var string
     */
    public $rr;
    protected $_name = [
        'lang'       => 'Lang',
        'startDate'  => 'StartDate',
        'endDate'    => 'EndDate',
        'domainName' => 'DomainName',
        'rr'         => 'Rr',
    ];

    public function validate()
    {
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('rr', $this->rr, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }

        return $model;
    }
}
