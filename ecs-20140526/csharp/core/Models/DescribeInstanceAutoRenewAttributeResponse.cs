// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceAutoRenewAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("InstanceRenewAttributes")]
        [Validation(Required=true)]
        public DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes InstanceRenewAttributes { get; set; }
        public class DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributes : TeaModel {
            [NameInMap("InstanceRenewAttribute")]
            [Validation(Required=true)]
            public List<DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute> InstanceRenewAttribute { get; set; }
            public class DescribeInstanceAutoRenewAttributeResponseInstanceRenewAttributesInstanceRenewAttribute : TeaModel {
                    public string InstanceId { get; set; }
                    public bool? AutoRenewEnabled { get; set; }
                    public int? Duration { get; set; }
                    public string PeriodUnit { get; set; }
                    public string RenewalStatus { get; set; }
            }
        };

    }

}
