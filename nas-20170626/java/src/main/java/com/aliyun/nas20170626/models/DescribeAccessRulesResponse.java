// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAccessRulesResponse extends TeaModel {
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

    @NameInMap("AccessRules")
    @Validation(required = true)
    public DescribeAccessRulesResponseAccessRules accessRules;

    public static DescribeAccessRulesResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeAccessRulesResponse self = new DescribeAccessRulesResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeAccessRulesResponseAccessRulesAccessRule extends TeaModel {
        @NameInMap("SourceCidrIp")
        @Validation(required = true)
        public String sourceCidrIp;

        @NameInMap("Priority")
        @Validation(required = true)
        public Integer priority;

        @NameInMap("AccessRuleId")
        @Validation(required = true)
        public String accessRuleId;

        @NameInMap("RWAccess")
        @Validation(required = true)
        public String RWAccess;

        @NameInMap("UserAccess")
        @Validation(required = true)
        public String userAccess;

        public static DescribeAccessRulesResponseAccessRulesAccessRule build(java.util.Map<String, ?> map) throws Exception {
            DescribeAccessRulesResponseAccessRulesAccessRule self = new DescribeAccessRulesResponseAccessRulesAccessRule();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeAccessRulesResponseAccessRules extends TeaModel {
        @NameInMap("AccessRule")
        @Validation(required = true)
        public java.util.List<DescribeAccessRulesResponseAccessRulesAccessRule> accessRule;

        public static DescribeAccessRulesResponseAccessRules build(java.util.Map<String, ?> map) throws Exception {
            DescribeAccessRulesResponseAccessRules self = new DescribeAccessRulesResponseAccessRules();
            return TeaModel.build(map, self);
        }

    }

}
