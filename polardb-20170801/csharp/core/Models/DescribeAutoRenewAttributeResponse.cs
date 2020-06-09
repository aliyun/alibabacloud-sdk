// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeAutoRenewAttributeResponse : TeaModel {
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
        public DescribeAutoRenewAttributeResponseItems Items { get; set; }
        public class DescribeAutoRenewAttributeResponseItems : TeaModel {
            [NameInMap("AutoRenewAttribute")]
            [Validation(Required=true)]
            public List<DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute> AutoRenewAttribute { get; set; }
            public class DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute : TeaModel {
                    public string DBClusterId { get; set; }
                    public string RegionId { get; set; }
                    public bool? AutoRenewEnabled { get; set; }
                    public int? Duration { get; set; }
                    public string PeriodUnit { get; set; }
                    public string RenewalStatus { get; set; }
            }
        };

    }

}
