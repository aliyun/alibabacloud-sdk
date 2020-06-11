// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111.models;

import com.aliyun.tea.*;

public class DescribeRelatedResourcesReuseRequest extends TeaModel {
    @NameInMap("ServiceMeshId")
    @Validation(required = true)
    public String serviceMeshId;

    public static DescribeRelatedResourcesReuseRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeRelatedResourcesReuseRequest self = new DescribeRelatedResourcesReuseRequest();
        return TeaModel.build(map, self);
    }

}
