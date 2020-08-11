// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AllocateEipAddressProResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AllocationId")]
        [Validation(Required=true)]
        public string AllocationId { get; set; }

        [NameInMap("EipAddress")]
        [Validation(Required=true)]
        public string EipAddress { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public long OrderId { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

    }

}
