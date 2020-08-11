// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class AllocateEipSegmentAddressResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EipSegmentInstanceId")]
        [Validation(Required=true)]
        public string EipSegmentInstanceId { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public long OrderId { get; set; }

    }

}
