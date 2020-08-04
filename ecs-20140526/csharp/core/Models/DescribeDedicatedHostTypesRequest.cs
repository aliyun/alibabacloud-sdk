// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeDedicatedHostTypesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DedicatedHostType")]
        [Validation(Required=false)]
        public string DedicatedHostType { get; set; }

        [NameInMap("SupportedInstanceTypeFamily")]
        [Validation(Required=false)]
        public string SupportedInstanceTypeFamily { get; set; }

    }

}
