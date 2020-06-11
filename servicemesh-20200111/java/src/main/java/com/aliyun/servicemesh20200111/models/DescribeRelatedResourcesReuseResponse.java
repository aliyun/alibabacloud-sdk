// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111.models;

import com.aliyun.tea.*;

public class DescribeRelatedResourcesReuseResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("ReuseInfo")
    @Validation(required = true)
    public java.util.List<java.util.Map<String, ?>> reuseInfo;

    public static DescribeRelatedResourcesReuseResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeRelatedResourcesReuseResponse self = new DescribeRelatedResourcesReuseResponse();
        return TeaModel.build(map, self);
    }

}
