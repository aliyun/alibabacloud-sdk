// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.RPC;
using AlibabaCloud.Imageseg.Models;

namespace AlibabaCloud.Imageseg
{
    public class Client : RPCClient
    {

        public Client(Config config): base(config.ToMap())
        { }

        public Dictionary<string, object> _request(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("imageseg", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public async Task<Dictionary<string, object>> _requestAsync(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2019-12-30"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("imageseg", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public SegmentFaceResponse SegmentFace(SegmentFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentFaceResponse>(_request("SegmentFace", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<SegmentFaceResponse> SegmentFaceAsync(SegmentFaceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentFaceResponse>(await _requestAsync("SegmentFace", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public SegmentFaceResponse SegmentFaceAdvance(SegmentFaceAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SegmentFaceRequest segmentFacereq = new SegmentFaceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentFacereq);
            segmentFacereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentFaceResponse segmentFaceResp = SegmentFace(segmentFacereq, runtime);
            return segmentFaceResp;
        }

        public async Task<SegmentFaceResponse> SegmentFaceAdvanceAsync(SegmentFaceAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SegmentFaceRequest segmentFacereq = new SegmentFaceRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentFacereq);
            segmentFacereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentFaceResponse segmentFaceResp = await SegmentFaceAsync(segmentFacereq, runtime);
            return segmentFaceResp;
        }

        public SegmentHairResponse SegmentHair(SegmentHairRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentHairResponse>(_request("SegmentHair", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<SegmentHairResponse> SegmentHairAsync(SegmentHairRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentHairResponse>(await _requestAsync("SegmentHair", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public SegmentHairResponse SegmentHairAdvance(SegmentHairAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SegmentHairRequest segmentHairreq = new SegmentHairRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentHairreq);
            segmentHairreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentHairResponse segmentHairResp = SegmentHair(segmentHairreq, runtime);
            return segmentHairResp;
        }

        public async Task<SegmentHairResponse> SegmentHairAdvanceAsync(SegmentHairAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SegmentHairRequest segmentHairreq = new SegmentHairRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentHairreq);
            segmentHairreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentHairResponse segmentHairResp = await SegmentHairAsync(segmentHairreq, runtime);
            return segmentHairResp;
        }

        public SegmentHeadResponse SegmentHead(SegmentHeadRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentHeadResponse>(_request("SegmentHead", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<SegmentHeadResponse> SegmentHeadAsync(SegmentHeadRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentHeadResponse>(await _requestAsync("SegmentHead", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public SegmentHeadResponse SegmentHeadAdvance(SegmentHeadAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SegmentHeadRequest segmentHeadreq = new SegmentHeadRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentHeadreq);
            segmentHeadreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentHeadResponse segmentHeadResp = SegmentHead(segmentHeadreq, runtime);
            return segmentHeadResp;
        }

        public async Task<SegmentHeadResponse> SegmentHeadAdvanceAsync(SegmentHeadAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SegmentHeadRequest segmentHeadreq = new SegmentHeadRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentHeadreq);
            segmentHeadreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentHeadResponse segmentHeadResp = await SegmentHeadAsync(segmentHeadreq, runtime);
            return segmentHeadResp;
        }

        public SegmentCommonImageResponse SegmentCommonImage(SegmentCommonImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentCommonImageResponse>(_request("SegmentCommonImage", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<SegmentCommonImageResponse> SegmentCommonImageAsync(SegmentCommonImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentCommonImageResponse>(await _requestAsync("SegmentCommonImage", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public SegmentCommonImageResponse SegmentCommonImageAdvance(SegmentCommonImageAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SegmentCommonImageRequest segmentCommonImagereq = new SegmentCommonImageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentCommonImagereq);
            segmentCommonImagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentCommonImageResponse segmentCommonImageResp = SegmentCommonImage(segmentCommonImagereq, runtime);
            return segmentCommonImageResp;
        }

        public async Task<SegmentCommonImageResponse> SegmentCommonImageAdvanceAsync(SegmentCommonImageAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SegmentCommonImageRequest segmentCommonImagereq = new SegmentCommonImageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentCommonImagereq);
            segmentCommonImagereq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentCommonImageResponse segmentCommonImageResp = await SegmentCommonImageAsync(segmentCommonImagereq, runtime);
            return segmentCommonImageResp;
        }

        public SegmentBodyResponse SegmentBody(SegmentBodyRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentBodyResponse>(_request("SegmentBody", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<SegmentBodyResponse> SegmentBodyAsync(SegmentBodyRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentBodyResponse>(await _requestAsync("SegmentBody", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public SegmentBodyResponse SegmentBodyAdvance(SegmentBodyAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SegmentBodyRequest segmentBodyreq = new SegmentBodyRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentBodyreq);
            segmentBodyreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentBodyResponse segmentBodyResp = SegmentBody(segmentBodyreq, runtime);
            return segmentBodyResp;
        }

        public async Task<SegmentBodyResponse> SegmentBodyAdvanceAsync(SegmentBodyAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SegmentBodyRequest segmentBodyreq = new SegmentBodyRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentBodyreq);
            segmentBodyreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentBodyResponse segmentBodyResp = await SegmentBodyAsync(segmentBodyreq, runtime);
            return segmentBodyResp;
        }

        public SegmentCommodityResponse SegmentCommodity(SegmentCommodityRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentCommodityResponse>(_request("SegmentCommodity", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public async Task<SegmentCommodityResponse> SegmentCommodityAsync(SegmentCommodityRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SegmentCommodityResponse>(await _requestAsync("SegmentCommodity", "HTTPS", "GET", request.ToMap(), runtime));
        }

        public SegmentCommodityResponse SegmentCommodityAdvance(SegmentCommodityAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SegmentCommodityRequest segmentCommodityreq = new SegmentCommodityRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentCommodityreq);
            segmentCommodityreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentCommodityResponse segmentCommodityResp = SegmentCommodity(segmentCommodityreq, runtime);
            return segmentCommodityResp;
        }

        public async Task<SegmentCommodityResponse> SegmentCommodityAdvanceAsync(SegmentCommodityAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "imageseg",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            string str = AlibabaCloud.Commons.Common.ReadAsString(request.ImageURLObject);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = str,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SegmentCommodityRequest segmentCommodityreq = new SegmentCommodityRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, segmentCommodityreq);
            segmentCommodityreq.ImageURL = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SegmentCommodityResponse segmentCommodityResp = await SegmentCommodityAsync(segmentCommodityreq, runtime);
            return segmentCommodityResp;
        }

    }
}
