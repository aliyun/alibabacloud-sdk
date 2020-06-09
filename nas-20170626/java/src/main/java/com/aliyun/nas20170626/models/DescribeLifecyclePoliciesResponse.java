// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeLifecyclePoliciesResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("TotalCount")
    @Validation(required = true)
    public Integer totalCount;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("LifecyclePolicies")
    @Validation(required = true)
    public java.util.List<DescribeLifecyclePoliciesResponseLifecyclePolicies> lifecyclePolicies;

    public static DescribeLifecyclePoliciesResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeLifecyclePoliciesResponse self = new DescribeLifecyclePoliciesResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeLifecyclePoliciesResponseLifecyclePolicies extends TeaModel {
        @NameInMap("FileSystemId")
        @Validation(required = true)
        public String fileSystemId;

        @NameInMap("LifecyclePolicyName")
        @Validation(required = true)
        public String lifecyclePolicyName;

        @NameInMap("Path")
        @Validation(required = true)
        public String path;

        @NameInMap("LifecycleRuleName")
        @Validation(required = true)
        public String lifecycleRuleName;

        @NameInMap("StorageType")
        @Validation(required = true)
        public String storageType;

        @NameInMap("CreateTime")
        @Validation(required = true)
        public String createTime;

        public static DescribeLifecyclePoliciesResponseLifecyclePolicies build(java.util.Map<String, ?> map) throws Exception {
            DescribeLifecyclePoliciesResponseLifecyclePolicies self = new DescribeLifecyclePoliciesResponseLifecyclePolicies();
            return TeaModel.build(map, self);
        }

    }

}
