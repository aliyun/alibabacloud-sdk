// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreatePhysicalConnectionSetupOrderRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("AccessPointId")]
        [Validation(Required=true)]
        public string AccessPointId { get; set; }

        [NameInMap("LineOperator")]
        [Validation(Required=true)]
        public string LineOperator { get; set; }

        [NameInMap("PortType")]
        [Validation(Required=false)]
        public string PortType { get; set; }

        [NameInMap("RedundantPhysicalConnectionId")]
        [Validation(Required=false)]
        public string RedundantPhysicalConnectionId { get; set; }

        [NameInMap("AutoPay")]
        [Validation(Required=false)]
        public bool? AutoPay { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
