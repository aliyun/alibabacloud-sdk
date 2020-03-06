// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageaudit.models;

import com.aliyun.tea.*;

public class Config extends TeaModel {
    @NameInMap("accessKeyId")
    public String accessKeyId;

    @NameInMap("accessKeySecret")
    public String accessKeySecret;

    @NameInMap("type")
    public String type;

    @NameInMap("securityToken")
    public String securityToken;

    @NameInMap("endpoint")
    @Validation(required = true)
    public String endpoint;

    @NameInMap("protocol")
    public String protocol;

    @NameInMap("regionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("read timeout")
    public Integer readTimeout;

    @NameInMap("connect timeout")
    public Integer connectTimeout;

    @NameInMap("http proxy")
    public String httpProxy;

    @NameInMap("https proxy")
    public String httpsProxy;

    @NameInMap("socks5 proxy")
    public String socks5Proxy;

    @NameInMap("socks5 NetWork")
    public String socks5NetWork;

    @NameInMap("no proxy")
    public String noProxy;

    @NameInMap("userAgent")
    public String userAgent;

    @NameInMap("maxIdleConns")
    public Integer maxIdleConns;

    public static Config build(java.util.Map<String, ?> map) throws Exception {
        Config self = new Config();
        return TeaModel.build(map, self);
    }

}
