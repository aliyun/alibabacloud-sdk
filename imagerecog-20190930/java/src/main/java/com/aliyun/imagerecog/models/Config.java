// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imagerecog.models;

import com.aliyun.tea.*;

public class Config extends TeaModel {
    @NameInMap("accessKeyId")
    public String accessKeyId;

    @NameInMap("accessKeySecret")
    public String accessKeySecret;

    @NameInMap("type")
    @Validation(required = true)
    public String type;

    @NameInMap("securityToken")
    @Validation(required = true)
    public String securityToken;

    @NameInMap("endpoint")
    @Validation(required = true)
    public String endpoint;

    @NameInMap("protocol")
    @Validation(required = true)
    public String protocol;

    @NameInMap("regionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("userAgent")
    @Validation(required = true)
    public String userAgent;

    @NameInMap("readTimeout")
    @Validation(required = true)
    public Integer readTimeout;

    @NameInMap("connectTimeout")
    @Validation(required = true)
    public Integer connectTimeout;

    @NameInMap("localAddr")
    @Validation(required = true)
    public String localAddr;

    @NameInMap("httpProxy")
    @Validation(required = true)
    public String httpProxy;

    @NameInMap("httpsProxy")
    @Validation(required = true)
    public String httpsProxy;

    @NameInMap("noProxy")
    @Validation(required = true)
    public String noProxy;

    @NameInMap("socks5Proxy")
    @Validation(required = true)
    public String socks5Proxy;

    @NameInMap("socks5NetWork")
    @Validation(required = true)
    public String socks5NetWork;

    @NameInMap("maxIdleConns")
    @Validation(required = true)
    public Integer maxIdleConns;

    @NameInMap("endpointType")
    @Validation(required = true)
    public String endpointType;

    @NameInMap("openPlatformEndpoint")
    @Validation(required = true)
    public String openPlatformEndpoint;

    public static Config build(java.util.Map<String, ?> map) throws Exception {
        Config self = new Config();
        return TeaModel.build(map, self);
    }

}
