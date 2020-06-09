// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAccessGroupsResponse extends TeaModel {
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

    @NameInMap("AccessGroups")
    @Validation(required = true)
    public DescribeAccessGroupsResponseAccessGroups accessGroups;

    public static DescribeAccessGroupsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeAccessGroupsResponse self = new DescribeAccessGroupsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeAccessGroupsResponseAccessGroupsAccessGroup extends TeaModel {
        @NameInMap("AccessGroupName")
        @Validation(required = true)
        public String accessGroupName;

        @NameInMap("AccessGroupType")
        @Validation(required = true)
        public String accessGroupType;

        @NameInMap("RuleCount")
        @Validation(required = true)
        public Integer ruleCount;

        @NameInMap("MountTargetCount")
        @Validation(required = true)
        public Integer mountTargetCount;

        @NameInMap("Description")
        @Validation(required = true)
        public String description;

        @NameInMap("CreateTime")
        @Validation(required = true)
        public String createTime;

        public static DescribeAccessGroupsResponseAccessGroupsAccessGroup build(java.util.Map<String, ?> map) throws Exception {
            DescribeAccessGroupsResponseAccessGroupsAccessGroup self = new DescribeAccessGroupsResponseAccessGroupsAccessGroup();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeAccessGroupsResponseAccessGroups extends TeaModel {
        @NameInMap("AccessGroup")
        @Validation(required = true)
        public java.util.List<DescribeAccessGroupsResponseAccessGroupsAccessGroup> accessGroup;

        public static DescribeAccessGroupsResponseAccessGroups build(java.util.Map<String, ?> map) throws Exception {
            DescribeAccessGroupsResponseAccessGroups self = new DescribeAccessGroupsResponseAccessGroups();
            return TeaModel.build(map, self);
        }

    }

}
