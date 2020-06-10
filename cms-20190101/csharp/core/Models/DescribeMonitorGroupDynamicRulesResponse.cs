// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitorGroupDynamicRulesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("Resource")]
        [Validation(Required=true)]
        public DescribeMonitorGroupDynamicRulesResponseResource Resource { get; set; }
        public class DescribeMonitorGroupDynamicRulesResponseResource : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeMonitorGroupDynamicRulesResponseResourceResource> Resource { get; set; }
            public class DescribeMonitorGroupDynamicRulesResponseResourceResource : TeaModel {
                    public long GroupId { get; set; }
                    public string Category { get; set; }
                    public string FilterRelation { get; set; }
                    public DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters Filters { get; set; }
                    public class DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters : TeaModel {
                        [NameInMap("Filter")]
                        [Validation(Required=true)]
                        public List<DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter> Filter { get; set; }
                        public class DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter : TeaModel {
                            [NameInMap("Function")]
                            [Validation(Required=true)]
                            public string Function { get; set; }

                            [NameInMap("Name")]
                            [Validation(Required=true)]
                            public string Name { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
            }
        };

    }

}
