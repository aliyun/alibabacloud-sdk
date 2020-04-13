<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\ClassifyCommodityAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\ClassifyCommodityRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\ClassifyCommodityResponse;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureAttributeAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureAttributeRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureAttributeResponse;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureSpuAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureSpuRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\RecognizeFurnitureSpuResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Goodstech
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeFurnitureAttributeResponse
     */
    public function recognizeFurnitureAttribute(RecognizeFurnitureAttributeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('RecognizeFurnitureAttribute', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime), new RecognizeFurnitureAttributeResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeFurnitureAttributeResponse
     */
    public function recognizeFurnitureAttributeAdvance(RecognizeFurnitureAttributeAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'goodstech',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeFurnitureAttributereq = new RecognizeFurnitureAttributeRequest([]);
        RpcUtils::convert($request, $recognizeFurnitureAttributereq);
        $recognizeFurnitureAttributereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeFurnitureAttribute($recognizeFurnitureAttributereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeFurnitureSpuResponse
     */
    public function recognizeFurnitureSpu(RecognizeFurnitureSpuRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('RecognizeFurnitureSpu', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime), new RecognizeFurnitureSpuResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeFurnitureSpuResponse
     */
    public function recognizeFurnitureSpuAdvance(RecognizeFurnitureSpuAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'goodstech',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeFurnitureSpureq = new RecognizeFurnitureSpuRequest([]);
        RpcUtils::convert($request, $recognizeFurnitureSpureq);
        $recognizeFurnitureSpureq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeFurnitureSpu($recognizeFurnitureSpureq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodity(ClassifyCommodityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('ClassifyCommodity', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime), new ClassifyCommodityResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodityAdvance(ClassifyCommodityAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'goodstech',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $classifyCommodityreq = new ClassifyCommodityRequest([]);
        RpcUtils::convert($request, $classifyCommodityreq);
        $classifyCommodityreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->classifyCommodity($classifyCommodityreq, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
