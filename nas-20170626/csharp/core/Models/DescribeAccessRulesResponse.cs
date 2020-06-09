// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAccessRulesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("AccessRules")]
        [Validation(Required=true)]
        public DescribeAccessRulesResponseAccessRules AccessRules { get; set; }
        public class DescribeAccessRulesResponseAccessRules : TeaModel {
            [NameInMap("AccessRule")]
            [Validation(Required=true)]
            public List<DescribeAccessRulesResponseAccessRulesAccessRule> AccessRule { get; set; }
            public class DescribeAccessRulesResponseAccessRulesAccessRule : TeaModel {
                    public string SourceCidrIp { get; set; }
                    public int? Priority { get; set; }
                    public string AccessRuleId { get; set; }
                    public string RWAccess { get; set; }
                    public string UserAccess { get; set; }
            }
        };

    }

}
