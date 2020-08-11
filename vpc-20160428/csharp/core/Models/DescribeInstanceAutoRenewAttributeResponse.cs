// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeInstanceAutoRenewAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public string PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public string PageNumber { get; set; }

        [NameInMap("InstanceRenewAttributes")]
        [Validation(Required=true)]
        public DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes InstanceRenewAttributes { get; set; }
        public class DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes : TeaModel {
            [NameInMap("InstanceRenewAttribute")]
            [Validation(Required=true)]
            public List<DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute> InstanceRenewAttribute { get; set; }
            public class DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute : TeaModel {
                    public string InstanceId { get; set; }
                    public string RenewalStatus { get; set; }
                    public int? Duration { get; set; }
                    public string PricingCycle { get; set; }
            }
        };

    }

}
