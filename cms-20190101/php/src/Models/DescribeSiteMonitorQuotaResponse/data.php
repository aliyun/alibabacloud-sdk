<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description idcQuota
     *
     * @var int
     */
    public $siteMonitorIdcQuota;

    /**
     * @description operatorQuota
     *
     * @var int
     */
    public $siteMonitorOperatorQuotaQuota;

    /**
     * @description taskQuota
     *
     * @var int
     */
    public $siteMonitorTaskQuota;

    /**
     * @description taskQuotaUsed
     *
     * @var int
     */
    public $siteMonitorQuotaTaskUsed;

    /**
     * @description taskVersion
     *
     * @var string
     */
    public $siteMonitorVersion;
    protected $_name = [
        'siteMonitorIdcQuota'           => 'SiteMonitorIdcQuota',
        'siteMonitorOperatorQuotaQuota' => 'SiteMonitorOperatorQuotaQuota',
        'siteMonitorTaskQuota'          => 'SiteMonitorTaskQuota',
        'siteMonitorQuotaTaskUsed'      => 'SiteMonitorQuotaTaskUsed',
        'siteMonitorVersion'            => 'SiteMonitorVersion',
    ];

    public function validate()
    {
        Model::validateRequired('siteMonitorIdcQuota', $this->siteMonitorIdcQuota, true);
        Model::validateRequired('siteMonitorOperatorQuotaQuota', $this->siteMonitorOperatorQuotaQuota, true);
        Model::validateRequired('siteMonitorTaskQuota', $this->siteMonitorTaskQuota, true);
        Model::validateRequired('siteMonitorQuotaTaskUsed', $this->siteMonitorQuotaTaskUsed, true);
        Model::validateRequired('siteMonitorVersion', $this->siteMonitorVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteMonitorIdcQuota) {
            $res['SiteMonitorIdcQuota'] = $this->siteMonitorIdcQuota;
        }
        if (null !== $this->siteMonitorOperatorQuotaQuota) {
            $res['SiteMonitorOperatorQuotaQuota'] = $this->siteMonitorOperatorQuotaQuota;
        }
        if (null !== $this->siteMonitorTaskQuota) {
            $res['SiteMonitorTaskQuota'] = $this->siteMonitorTaskQuota;
        }
        if (null !== $this->siteMonitorQuotaTaskUsed) {
            $res['SiteMonitorQuotaTaskUsed'] = $this->siteMonitorQuotaTaskUsed;
        }
        if (null !== $this->siteMonitorVersion) {
            $res['SiteMonitorVersion'] = $this->siteMonitorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteMonitorIdcQuota'])) {
            $model->siteMonitorIdcQuota = $map['SiteMonitorIdcQuota'];
        }
        if (isset($map['SiteMonitorOperatorQuotaQuota'])) {
            $model->siteMonitorOperatorQuotaQuota = $map['SiteMonitorOperatorQuotaQuota'];
        }
        if (isset($map['SiteMonitorTaskQuota'])) {
            $model->siteMonitorTaskQuota = $map['SiteMonitorTaskQuota'];
        }
        if (isset($map['SiteMonitorQuotaTaskUsed'])) {
            $model->siteMonitorQuotaTaskUsed = $map['SiteMonitorQuotaTaskUsed'];
        }
        if (isset($map['SiteMonitorVersion'])) {
            $model->siteMonitorVersion = $map['SiteMonitorVersion'];
        }

        return $model;
    }
}
