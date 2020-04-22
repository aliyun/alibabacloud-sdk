<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\DetectVideoShotAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\DetectVideoShotRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\DetectVideoShotResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GenerateVideoCoverAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GenerateVideoCoverRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GenerateVideoCoverResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GetAsyncJobResultResponse;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Videorecog
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
     * @return DetectVideoShotResponse
     */
    public function detectVideoShot(DetectVideoShotRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectVideoShotResponse::fromMap($this->doRequest('DetectVideoShot', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShotAdvance(DetectVideoShotAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'videorecog',
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
            'content'     => $request->videoUrlObject,
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
        $detectVideoShotreq = new DetectVideoShotRequest([]);
        RpcUtils::convert($request, $detectVideoShotreq);
        $detectVideoShotreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectVideoShot($detectVideoShotreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCover(GenerateVideoCoverRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GenerateVideoCoverResponse::fromMap($this->doRequest('GenerateVideoCover', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCoverAdvance(GenerateVideoCoverAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'videorecog',
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
            'content'     => $request->videoUrlObject,
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
        $generateVideoCoverreq = new GenerateVideoCoverRequest([]);
        RpcUtils::convert($request, $generateVideoCoverreq);
        $generateVideoCoverreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->generateVideoCover($generateVideoCoverreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult(GetAsyncJobResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
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
