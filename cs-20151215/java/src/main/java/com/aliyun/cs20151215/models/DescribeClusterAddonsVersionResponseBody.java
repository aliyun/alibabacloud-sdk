// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeClusterAddonsVersionResponseBody extends TeaModel {
    @NameInMap("template")
    @Validation(required = true)
    public String template;

    @NameInMap("ready_to_upgrade")
    @Validation(required = true)
    public String readyToUpgrade;

    @NameInMap("next_version")
    @Validation(required = true)
    public String nextVersion;

    @NameInMap("can_upgrade")
    @Validation(required = true)
    public Boolean canUpgrade;

    @NameInMap("component_name")
    @Validation(required = true)
    public String componentName;

    @NameInMap("version")
    @Validation(required = true)
    public String version;

    @NameInMap("changed")
    @Validation(required = true)
    public String changed;

    @NameInMap("message")
    @Validation(required = true)
    public String message;

    @NameInMap("policy")
    @Validation(required = true)
    public String policy;

    @NameInMap("force")
    @Validation(required = true)
    public Boolean force;

    @NameInMap("required")
    @Validation(required = true)
    public Boolean required;

    @NameInMap("exist")
    @Validation(required = true)
    public Boolean exist;

    public static DescribeClusterAddonsVersionResponseBody build(java.util.Map<String, ?> map) throws Exception {
        DescribeClusterAddonsVersionResponseBody self = new DescribeClusterAddonsVersionResponseBody();
        return TeaModel.build(map, self);
    }

}
