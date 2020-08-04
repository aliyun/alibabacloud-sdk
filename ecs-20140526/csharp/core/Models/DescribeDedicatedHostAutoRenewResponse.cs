// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDedicatedHostAutoRenewResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DedicatedHostRenewAttributes")]
        [Validation(Required=true)]
        public DescribeDedicatedHostAutoRenewResponseDedicatedHostRenewAttributes DedicatedHostRenewAttributes { get; set; }
        public class DescribeDedicatedHostAutoRenewResponseDedicatedHostRenewAttributes : TeaModel {
            [NameInMap("DedicatedHostRenewAttribute")]
            [Validation(Required=true)]
            public List<DescribeDedicatedHostAutoRenewResponseDedicatedHostRenewAttributesDedicatedHostRenewAttribute> DedicatedHostRenewAttribute { get; set; }
            public class DescribeDedicatedHostAutoRenewResponseDedicatedHostRenewAttributesDedicatedHostRenewAttribute : TeaModel {
                    public string DedicatedHostId { get; set; }
                    public bool? AutoRenewEnabled { get; set; }
                    public int? Duration { get; set; }
                    public string PeriodUnit { get; set; }
                    public string RenewalStatus { get; set; }
            }
        };

    }

}
