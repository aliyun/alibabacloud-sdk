<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponse;

use AlibabaCloud\Tea\Model;

class vmMetaInfo extends Model
{
    /**
     * @var string
     */
    public $rootCertPath;

    /**
     * @var string
     */
    public $rootCertContent;

    /**
     * @var string
     */
    public $keyPath;

    /**
     * @var string
     */
    public $keyContent;

    /**
     * @var string
     */
    public $certChainPath;

    /**
     * @var string
     */
    public $certChainContent;

    /**
     * @var string
     */
    public $envoyEnvPath;

    /**
     * @var string
     */
    public $envoyEnvContent;

    /**
     * @var string
     */
    public $hostsPath;

    /**
     * @var string
     */
    public $hostsContent;
    protected $_name = [
        'rootCertPath'     => 'RootCertPath',
        'rootCertContent'  => 'RootCertContent',
        'keyPath'          => 'KeyPath',
        'keyContent'       => 'KeyContent',
        'certChainPath'    => 'CertChainPath',
        'certChainContent' => 'CertChainContent',
        'envoyEnvPath'     => 'EnvoyEnvPath',
        'envoyEnvContent'  => 'EnvoyEnvContent',
        'hostsPath'        => 'HostsPath',
        'hostsContent'     => 'HostsContent',
    ];

    public function validate()
    {
        Model::validateRequired('rootCertPath', $this->rootCertPath, true);
        Model::validateRequired('rootCertContent', $this->rootCertContent, true);
        Model::validateRequired('keyPath', $this->keyPath, true);
        Model::validateRequired('keyContent', $this->keyContent, true);
        Model::validateRequired('certChainPath', $this->certChainPath, true);
        Model::validateRequired('certChainContent', $this->certChainContent, true);
        Model::validateRequired('envoyEnvPath', $this->envoyEnvPath, true);
        Model::validateRequired('envoyEnvContent', $this->envoyEnvContent, true);
        Model::validateRequired('hostsPath', $this->hostsPath, true);
        Model::validateRequired('hostsContent', $this->hostsContent, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rootCertPath) {
            $res['RootCertPath'] = $this->rootCertPath;
        }
        if (null !== $this->rootCertContent) {
            $res['RootCertContent'] = $this->rootCertContent;
        }
        if (null !== $this->keyPath) {
            $res['KeyPath'] = $this->keyPath;
        }
        if (null !== $this->keyContent) {
            $res['KeyContent'] = $this->keyContent;
        }
        if (null !== $this->certChainPath) {
            $res['CertChainPath'] = $this->certChainPath;
        }
        if (null !== $this->certChainContent) {
            $res['CertChainContent'] = $this->certChainContent;
        }
        if (null !== $this->envoyEnvPath) {
            $res['EnvoyEnvPath'] = $this->envoyEnvPath;
        }
        if (null !== $this->envoyEnvContent) {
            $res['EnvoyEnvContent'] = $this->envoyEnvContent;
        }
        if (null !== $this->hostsPath) {
            $res['HostsPath'] = $this->hostsPath;
        }
        if (null !== $this->hostsContent) {
            $res['HostsContent'] = $this->hostsContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vmMetaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RootCertPath'])) {
            $model->rootCertPath = $map['RootCertPath'];
        }
        if (isset($map['RootCertContent'])) {
            $model->rootCertContent = $map['RootCertContent'];
        }
        if (isset($map['KeyPath'])) {
            $model->keyPath = $map['KeyPath'];
        }
        if (isset($map['KeyContent'])) {
            $model->keyContent = $map['KeyContent'];
        }
        if (isset($map['CertChainPath'])) {
            $model->certChainPath = $map['CertChainPath'];
        }
        if (isset($map['CertChainContent'])) {
            $model->certChainContent = $map['CertChainContent'];
        }
        if (isset($map['EnvoyEnvPath'])) {
            $model->envoyEnvPath = $map['EnvoyEnvPath'];
        }
        if (isset($map['EnvoyEnvContent'])) {
            $model->envoyEnvContent = $map['EnvoyEnvContent'];
        }
        if (isset($map['HostsPath'])) {
            $model->hostsPath = $map['HostsPath'];
        }
        if (isset($map['HostsContent'])) {
            $model->hostsContent = $map['HostsContent'];
        }

        return $model;
    }
}
