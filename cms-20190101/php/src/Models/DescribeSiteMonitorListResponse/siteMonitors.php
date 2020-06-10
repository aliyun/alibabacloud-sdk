<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponse\siteMonitors\siteMonitor;
use AlibabaCloud\Tea\Model;

class siteMonitors extends Model
{
    /**
     * @description SiteMonitor
     *
     * @var array
     */
    public $siteMonitor;
    protected $_name = [
        'siteMonitor' => 'SiteMonitor',
    ];

    public function validate()
    {
        Model::validateRequired('siteMonitor', $this->siteMonitor, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteMonitor) {
            $res['SiteMonitor'] = [];
            if (null !== $this->siteMonitor && \is_array($this->siteMonitor)) {
                $n = 0;
                foreach ($this->siteMonitor as $item) {
                    $res['SiteMonitor'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteMonitors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteMonitor'])) {
            if (!empty($map['SiteMonitor'])) {
                $model->siteMonitor = [];
                $n                  = 0;
                foreach ($map['SiteMonitor'] as $item) {
                    $model->siteMonitor[$n++] = null !== $item ? siteMonitor::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
