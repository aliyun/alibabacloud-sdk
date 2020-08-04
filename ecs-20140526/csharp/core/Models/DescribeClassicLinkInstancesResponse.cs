// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeClassicLinkInstancesResponse : TeaModel {
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

        [NameInMap("Links")]
        [Validation(Required=true)]
        public DescribeClassicLinkInstancesResponseLinks Links { get; set; }
        public class DescribeClassicLinkInstancesResponseLinks : TeaModel {
            [NameInMap("Link")]
            [Validation(Required=true)]
            public List<DescribeClassicLinkInstancesResponseLinksLink> Link { get; set; }
            public class DescribeClassicLinkInstancesResponseLinksLink : TeaModel {
                    public string InstanceId { get; set; }
                    public string VpcId { get; set; }
            }
        };

    }

}
