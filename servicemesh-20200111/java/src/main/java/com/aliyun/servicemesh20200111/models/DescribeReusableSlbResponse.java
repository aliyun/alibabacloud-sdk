// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111.models;

import com.aliyun.tea.*;

public class DescribeReusableSlbResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("ReusableSlbList")
    @Validation(required = true)
    public java.util.List<DescribeReusableSlbResponseReusableSlbList> reusableSlbList;

    public static DescribeReusableSlbResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeReusableSlbResponse self = new DescribeReusableSlbResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeReusableSlbResponseReusableSlbList extends TeaModel {
        @NameInMap("LoadBalancerId")
        @Validation(required = true)
        public String loadBalancerId;

        @NameInMap("LoadBalancerName")
        @Validation(required = true)
        public String loadBalancerName;

        public static DescribeReusableSlbResponseReusableSlbList build(java.util.Map<String, ?> map) throws Exception {
            DescribeReusableSlbResponseReusableSlbList self = new DescribeReusableSlbResponseReusableSlbList();
            return TeaModel.build(map, self);
        }

    }

}
