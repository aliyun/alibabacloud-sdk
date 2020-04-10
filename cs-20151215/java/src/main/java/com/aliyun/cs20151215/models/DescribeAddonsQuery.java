// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeAddonsQuery extends TeaModel {
    @NameInMap("region")
    @Validation(required = true)
    public String region;

    public static DescribeAddonsQuery build(java.util.Map<String, ?> map) throws Exception {
        DescribeAddonsQuery self = new DescribeAddonsQuery();
        return TeaModel.build(map, self);
    }

}
