// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIpv6EgressOnlyRulesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Ipv6EgressOnlyRules")]
        [Validation(Required=true)]
        public DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRules Ipv6EgressOnlyRules { get; set; }
        public class DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRules : TeaModel {
            [NameInMap("Ipv6EgressOnlyRule")]
            [Validation(Required=true)]
            public List<DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRulesIpv6EgressOnlyRule> Ipv6EgressOnlyRule { get; set; }
            public class DescribeIpv6EgressOnlyRulesResponseIpv6EgressOnlyRulesIpv6EgressOnlyRule : TeaModel {
                    public string Ipv6EgressOnlyRuleId { get; set; }
                    public string InstanceType { get; set; }
                    public string InstanceId { get; set; }
                    public string Status { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
