// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class AllocateEipAddressResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AllocationId")]
        [Validation(Required=true)]
        public string AllocationId { get; set; }

        [NameInMap("EipAddress")]
        [Validation(Required=true)]
        public string EipAddress { get; set; }

    }

}
