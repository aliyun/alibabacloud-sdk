// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
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

        [NameInMap("SnatTableIds")]
        [Validation(Required=true)]
        public CreateNatGatewayResponseSnatTableIds SnatTableIds { get; set; }
        public class CreateNatGatewayResponseSnatTableIds : TeaModel {
            [NameInMap("SnatTableId")]
            [Validation(Required=true)]
            public List<string> SnatTableId { get; set; }
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
