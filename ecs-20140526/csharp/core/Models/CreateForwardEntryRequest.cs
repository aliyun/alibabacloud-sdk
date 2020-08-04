// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateForwardEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ForwardTableId")]
        [Validation(Required=true)]
        public string ForwardTableId { get; set; }

        [NameInMap("ExternalIp")]
        [Validation(Required=true)]
        public string ExternalIp { get; set; }

        [NameInMap("ExternalPort")]
        [Validation(Required=true)]
        public string ExternalPort { get; set; }

        [NameInMap("InternalIp")]
        [Validation(Required=true)]
        public string InternalIp { get; set; }

        [NameInMap("InternalPort")]
        [Validation(Required=true)]
        public string InternalPort { get; set; }

        [NameInMap("IpProtocol")]
        [Validation(Required=true)]
        public string IpProtocol { get; set; }

    }

}
