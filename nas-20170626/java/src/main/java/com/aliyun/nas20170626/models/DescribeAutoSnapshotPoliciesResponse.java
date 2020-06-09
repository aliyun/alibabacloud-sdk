// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAutoSnapshotPoliciesResponse extends TeaModel {
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

    @NameInMap("AutoSnapshotPolicies")
    @Validation(required = true)
    public DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies autoSnapshotPolicies;

    public static DescribeAutoSnapshotPoliciesResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeAutoSnapshotPoliciesResponse self = new DescribeAutoSnapshotPoliciesResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy extends TeaModel {
        @NameInMap("AutoSnapshotPolicyId")
        @Validation(required = true)
        public String autoSnapshotPolicyId;

        @NameInMap("AutoSnapshotPolicyName")
        @Validation(required = true)
        public String autoSnapshotPolicyName;

        @NameInMap("CreateTime")
        @Validation(required = true)
        public String createTime;

        @NameInMap("FileSystemNums")
        @Validation(required = true)
        public Integer fileSystemNums;

        @NameInMap("RegionId")
        @Validation(required = true)
        public String regionId;

        @NameInMap("RepeatWeekdays")
        @Validation(required = true)
        public String repeatWeekdays;

        @NameInMap("RetentionDays")
        @Validation(required = true)
        public Integer retentionDays;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        @NameInMap("TimePoints")
        @Validation(required = true)
        public String timePoints;

        public static DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy build(java.util.Map<String, ?> map) throws Exception {
            DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy self = new DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies extends TeaModel {
        @NameInMap("AutoSnapshotPolicy")
        @Validation(required = true)
        public java.util.List<DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy> autoSnapshotPolicy;

        public static DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies build(java.util.Map<String, ?> map) throws Exception {
            DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies self = new DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies();
            return TeaModel.build(map, self);
        }

    }

}
