// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateNatGatewayResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NatGatewayId")]
        [Validation(Required=true)]
        public string NatGatewayId { get; set; }

        [NameInMap("ForwardTableIds")]
        [Validation(Required=true)]
        public CreateNatGatewayResponseForwardTableIds ForwardTableIds { get; set; }
        public class CreateNatGatewayResponseForwardTableIds : TeaModel {
            [NameInMap("ForwardTableId")]
            [Validation(Required=true)]
            public List<string> ForwardTableId { get; set; }
        };

        [NameInMap("BandwidthPackageIds")]
        [Validation(Required=true)]
        public CreateNatGatewayResponseBandwidthPackageIds BandwidthPackageIds { get; set; }
        public class CreateNatGatewayResponseBandwidthPackageIds : TeaModel {
            [NameInMap("BandwidthPackageId")]
            [Validation(Required=true)]
            public List<string> BandwidthPackageId { get; set; }
        };

    }

}
