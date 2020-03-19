// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci.models;

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

    public static class ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Value")
        @Validation(required = true)
        public String value;

        public static ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions build(java.util.Map<String, ?> map) throws Exception {
            ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions self = new ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions();
            return TeaModel.build(map, self);
        }

    }

    public static class UpdateContainerGroupRequestDnsConfigOption extends TeaModel {
        @NameInMap("Name")
        public String name;

        @NameInMap("Value")
        public String value;

        public static UpdateContainerGroupRequestDnsConfigOption build(java.util.Map<String, ?> map) throws Exception {
            UpdateContainerGroupRequestDnsConfigOption self = new UpdateContainerGroupRequestDnsConfigOption();
            return TeaModel.build(map, self);
        }

    }

    public static class CreateContainerGroupRequestDnsConfigOption extends TeaModel {
        @NameInMap("Name")
        public String name;

        @NameInMap("Value")
        public String value;

        public static CreateContainerGroupRequestDnsConfigOption build(java.util.Map<String, ?> map) throws Exception {
            CreateContainerGroupRequestDnsConfigOption self = new CreateContainerGroupRequestDnsConfigOption();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Value")
        @Validation(required = true)
        public String value;

        public static DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions build(java.util.Map<String, ?> map) throws Exception {
            DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions self = new DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions();
            return TeaModel.build(map, self);
        }

    }

}
