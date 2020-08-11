// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeGrantRulesToCenResponse : TeaModel {
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

        [NameInMap("CenGrantRules")]
        [Validation(Required=true)]
        public DescribeGrantRulesToCenResponseCenGrantRules CenGrantRules { get; set; }
        public class DescribeGrantRulesToCenResponseCenGrantRules : TeaModel {
            [NameInMap("CbnGrantRule")]
            [Validation(Required=true)]
            public List<DescribeGrantRulesToCenResponseCenGrantRulesCbnGrantRule> CbnGrantRule { get; set; }
            public class DescribeGrantRulesToCenResponseCenGrantRulesCbnGrantRule : TeaModel {
                    public string CenInstanceId { get; set; }
                    public long CenOwnerId { get; set; }
                    public string CreationTime { get; set; }
            }
        };

    }

}
