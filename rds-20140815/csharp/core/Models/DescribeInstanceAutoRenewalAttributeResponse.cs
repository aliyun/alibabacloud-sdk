// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeInstanceAutoRenewalAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeInstanceAutoRenewalAttributeResponseItems Items { get; set; }
        public class DescribeInstanceAutoRenewalAttributeResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeInstanceAutoRenewalAttributeResponseItemsItem> Item { get; set; }
            public class DescribeInstanceAutoRenewalAttributeResponseItemsItem : TeaModel {
                    public string DBInstanceId { get; set; }
                    public string RegionId { get; set; }
                    public int? Duration { get; set; }
                    public string Status { get; set; }
                    public string AutoRenew { get; set; }
            }
        };

    }

}
