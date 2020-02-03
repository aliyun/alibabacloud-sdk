// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageseg;

import com.aliyun.tea.*;
import com.aliyun.imageseg.models.*;
import com.aliyuncs.pop.RPCClient;

public class Client extends RPCClient {
    public Client(Config config) throws Exception {
        super(TeaModel.buildMap(config));
    }

    public java.util.Map<String, Object> _request(String action, String protocol, String method, java.util.Map<String, Object> request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        java.util.Map<String, Object> runtime_ = TeaConverter.buildMap(
            new TeaPair("timeouted", "retry"),
            new TeaPair("readTimeout", com.aliyun.common.Common.defaultNumber(runtime.readTimeout, _readTimeout)),
            new TeaPair("connectTimeout", com.aliyun.common.Common.defaultNumber(runtime.connectTimeout, _connectTimeout)),
            new TeaPair("httpProxy", com.aliyun.common.Common._default(runtime.httpProxy, _httpProxy)),
            new TeaPair("httpsProxy", com.aliyun.common.Common._default(runtime.httpsProxy, _httpsProxy)),
            new TeaPair("noProxy", com.aliyun.common.Common._default(runtime.noProxy, _noProxy)),
            new TeaPair("maxIdleConns", com.aliyun.common.Common.defaultNumber(runtime.maxIdleConns, _maxIdleConns)),
            new TeaPair("retry", TeaConverter.buildMap(
                new TeaPair("retryable", runtime.autoretry),
                new TeaPair("maxAttempts", com.aliyun.common.Common.defaultNumber(runtime.maxAttempts, 3))
            )),
            new TeaPair("backoff", TeaConverter.buildMap(
                new TeaPair("policy", com.aliyun.common.Common._default(runtime.backoffPolicy, "no")),
                new TeaPair("period", com.aliyun.common.Common.defaultNumber(runtime.backoffPeriod, 1))
            )),
            new TeaPair("ignoreSSL", runtime.ignoreSSL)
        );

        TeaRequest _lastRequest = null;
        long _now = System.currentTimeMillis();
        int _retryTimes = 0;
        while (Tea.allowRetry((java.util.Map<String, Object>) runtime_.get("retry"), _retryTimes, _now)) {
            if (_retryTimes > 0) {
                int backoffTime = Tea.getBackoffTime(runtime_.get("backoff"), _retryTimes);
                if (backoffTime > 0) {
                    Tea.sleep(backoffTime);
                }
            }
            _retryTimes = _retryTimes + 1;
            try {
                TeaRequest request_ = new TeaRequest();
                request_.protocol = com.aliyun.common.Common._default(_protocol, protocol);
                request_.method = method;
                request_.pathname = "/";
                request_.query = com.aliyun.common.Common.query(TeaConverter.merge(Object.class,
                    TeaConverter.buildMap(
                        new TeaPair("Action", action),
                        new TeaPair("Format", "json"),
                        new TeaPair("RegionId", _regionId),
                        new TeaPair("Timestamp", com.aliyun.common.Common.getTimestamp()),
                        new TeaPair("Version", "2019-12-30"),
                        new TeaPair("SignatureMethod", "HMAC-SHA1"),
                        new TeaPair("SignatureVersion", "1.0"),
                        new TeaPair("SignatureNonce", com.aliyun.common.Common.getNonce()),
                        new TeaPair("AccessKeyId", _getAccessKeyId())
                    ),
                    request
                ));
                request_.headers = TeaConverter.buildMap(
                    new TeaPair("host", com.aliyun.common.Common.getHost("imageseg", _regionId, _endpoint)),
                    new TeaPair("user-agent", com.aliyun.common.Common.getUserAgent(_userAgent))
                );
                request_.query.put("Signature", com.aliyun.common.Common.getSignature(request_, _getAccessKeySecret()));
                _lastRequest = request_;
                TeaResponse response_ = Tea.doAction(request_, runtime_);

                java.util.Map<String, Object> body = com.aliyun.common.Common.json(response_);
                if (com.aliyun.common.Common.hasError(body)) {
                    throw new TeaException(TeaConverter.buildMap(
                        new TeaPair("message", body.get("Message")),
                        new TeaPair("data", body),
                        new TeaPair("code", body.get("Code"))
                    ));
                }

                return body;
            } catch (Exception e) {
                if (Tea.isRetryable(e)) {
                    continue;
                }
                throw e;
            }
        }

        throw new TeaUnretryableException(_lastRequest);
    }

    public SegmentFaceResponse segmentFace(SegmentFaceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("SegmentFace", "HTTPS", "GET", TeaModel.buildMap(request), runtime), new SegmentFaceResponse());
    }

    public SegmentFaceResponse segmentFaceAdvance(SegmentFaceAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "imageseg"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        SegmentFaceRequest segmentFacereq = new SegmentFaceRequest();
        com.aliyun.common.Common.convert(request, segmentFacereq);
        segmentFacereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        SegmentFaceResponse segmentFaceResp = this.segmentFace(segmentFacereq, runtime);
        return segmentFaceResp;
    }

    public SegmentHairResponse segmentHair(SegmentHairRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("SegmentHair", "HTTPS", "GET", TeaModel.buildMap(request), runtime), new SegmentHairResponse());
    }

    public SegmentHairResponse segmentHairAdvance(SegmentHairAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "imageseg"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        SegmentHairRequest segmentHairreq = new SegmentHairRequest();
        com.aliyun.common.Common.convert(request, segmentHairreq);
        segmentHairreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        SegmentHairResponse segmentHairResp = this.segmentHair(segmentHairreq, runtime);
        return segmentHairResp;
    }

    public SegmentHeadResponse segmentHead(SegmentHeadRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("SegmentHead", "HTTPS", "GET", TeaModel.buildMap(request), runtime), new SegmentHeadResponse());
    }

    public SegmentHeadResponse segmentHeadAdvance(SegmentHeadAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "imageseg"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        SegmentHeadRequest segmentHeadreq = new SegmentHeadRequest();
        com.aliyun.common.Common.convert(request, segmentHeadreq);
        segmentHeadreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        SegmentHeadResponse segmentHeadResp = this.segmentHead(segmentHeadreq, runtime);
        return segmentHeadResp;
    }

    public SegmentCommonImageResponse segmentCommonImage(SegmentCommonImageRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("SegmentCommonImage", "HTTPS", "GET", TeaModel.buildMap(request), runtime), new SegmentCommonImageResponse());
    }

    public SegmentCommonImageResponse segmentCommonImageAdvance(SegmentCommonImageAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "imageseg"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        SegmentCommonImageRequest segmentCommonImagereq = new SegmentCommonImageRequest();
        com.aliyun.common.Common.convert(request, segmentCommonImagereq);
        segmentCommonImagereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        SegmentCommonImageResponse segmentCommonImageResp = this.segmentCommonImage(segmentCommonImagereq, runtime);
        return segmentCommonImageResp;
    }

    public SegmentBodyResponse segmentBody(SegmentBodyRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("SegmentBody", "HTTPS", "GET", TeaModel.buildMap(request), runtime), new SegmentBodyResponse());
    }

    public SegmentBodyResponse segmentBodyAdvance(SegmentBodyAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "imageseg"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        SegmentBodyRequest segmentBodyreq = new SegmentBodyRequest();
        com.aliyun.common.Common.convert(request, segmentBodyreq);
        segmentBodyreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        SegmentBodyResponse segmentBodyResp = this.segmentBody(segmentBodyreq, runtime);
        return segmentBodyResp;
    }

    public SegmentCommodityResponse segmentCommodity(SegmentCommodityRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("SegmentCommodity", "HTTPS", "GET", TeaModel.buildMap(request), runtime), new SegmentCommodityResponse());
    }

    public SegmentCommodityResponse segmentCommodityAdvance(SegmentCommodityAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "imageseg"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        SegmentCommodityRequest segmentCommodityreq = new SegmentCommodityRequest();
        com.aliyun.common.Common.convert(request, segmentCommodityreq);
        segmentCommodityreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        SegmentCommodityResponse segmentCommodityResp = this.segmentCommodity(segmentCommodityreq, runtime);
        return segmentCommodityResp;
    }
}
