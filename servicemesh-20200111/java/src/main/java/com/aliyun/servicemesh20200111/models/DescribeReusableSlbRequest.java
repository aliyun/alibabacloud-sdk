// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111.models;

import com.aliyun.tea.*;

public class DescribeReusableSlbRequest extends TeaModel {
    @NameInMap("K8sClusterId")
    @Validation(required = true)
    public String k8sClusterId;

    @NameInMap("NetworkType")
    @Validation(required = true)
    public String networkType;

    public static DescribeReusableSlbRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeReusableSlbRequest self = new DescribeReusableSlbRequest();
        return TeaModel.build(map, self);
    }

}
