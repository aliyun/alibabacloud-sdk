<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template;

use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\containers;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\volumes;
use AlibabaCloud\SDK\ECI\V20180808\Models\spec\dnsConfig;
use AlibabaCloud\SDK\ECI\V20180808\Models\spec\securityContext;
use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description restartPolicy
     *
     * @var string
     */
    public $restartPolicy;

    /**
     * @description dnsPolicy
     *
     * @var string
     */
    public $dnsPolicy;

    /**
     * @description volumes
     *
     * @var array
     */
    public $volumes;

    /**
     * @description initContainers
     *
     * @var array
     */
    public $initContainers;

    /**
     * @description containers
     *
     * @var array
     */
    public $containers;

    /**
     * @description dnsConfig
     *
     * @var spec.dnsConfig
     */
    public $dnsConfig;

    /**
     * @description podSecurityContext
     *
     * @var spec.securityContext
     */
    public $securityContext;
    protected $_name = [
        'restartPolicy'   => 'RestartPolicy',
        'dnsPolicy'       => 'DnsPolicy',
        'volumes'         => 'Volumes',
        'initContainers'  => 'InitContainers',
        'containers'      => 'Containers',
        'dnsConfig'       => 'DnsConfig',
        'securityContext' => 'SecurityContext',
    ];

    public function validate()
    {
        Model::validateRequired('restartPolicy', $this->restartPolicy, true);
        Model::validateRequired('dnsPolicy', $this->dnsPolicy, true);
        Model::validateRequired('volumes', $this->volumes, true);
        Model::validateRequired('initContainers', $this->initContainers, true);
        Model::validateRequired('containers', $this->containers, true);
        Model::validateRequired('dnsConfig', $this->dnsConfig, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['RestartPolicy'] = $this->restartPolicy;
        $res['DnsPolicy']     = $this->dnsPolicy;
        $res['Volumes']       = [];
        if (null !== $this->volumes && \is_array($this->volumes)) {
            $n = 0;
            foreach ($this->volumes as $item) {
                $res['Volumes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['InitContainers'] = [];
        if (null !== $this->initContainers && \is_array($this->initContainers)) {
            $n = 0;
            foreach ($this->initContainers as $item) {
                $res['InitContainers'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Containers'] = [];
        if (null !== $this->containers && \is_array($this->containers)) {
            $n = 0;
            foreach ($this->containers as $item) {
                $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DnsConfig']       = null !== $this->dnsConfig ? $this->dnsConfig->toMap() : null;
        $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['DnsPolicy'])) {
            $model->dnsPolicy = $map['DnsPolicy'];
        }
        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n              = 0;
                foreach ($map['Volumes'] as $item) {
                    $model->volumes[$n++] = null !== $item ? volumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InitContainers'])) {
            if (!empty($map['InitContainers'])) {
                $model->initContainers = [];
                $n                     = 0;
                foreach ($map['InitContainers'] as $item) {
                    $model->initContainers[$n++] = null !== $item ? initContainers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = dnsConfig::fromMap($map['DnsConfig']);
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }

        return $model;
    }
}
