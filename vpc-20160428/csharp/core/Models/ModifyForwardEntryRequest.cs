// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyForwardEntryRequest : TeaModel {
        [NameInMap("ForwardTableId")]
        [Validation(Required=true)]
        public string ForwardTableId { get; set; }

        [NameInMap("ForwardEntryId")]
        [Validation(Required=true)]
        public string ForwardEntryId { get; set; }

        [NameInMap("ExternalIp")]
        [Validation(Required=false)]
        public string ExternalIp { get; set; }

        [NameInMap("ExternalPort")]
        [Validation(Required=false)]
        public string ExternalPort { get; set; }

        [NameInMap("InternalIp")]
        [Validation(Required=false)]
        public string InternalIp { get; set; }

        [NameInMap("InternalPort")]
        [Validation(Required=false)]
        public string InternalPort { get; set; }

        [NameInMap("IpProtocol")]
        [Validation(Required=false)]
        public string IpProtocol { get; set; }

        [NameInMap("ForwardEntryName")]
        [Validation(Required=false)]
        public string ForwardEntryName { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("PortBreak")]
        [Validation(Required=false)]
        public bool? PortBreak { get; set; }

    }

}
