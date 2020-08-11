// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreatePhysicalConnectionRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("AccessPointId")]
        [Validation(Required=true)]
        public string AccessPointId { get; set; }

        [NameInMap("Type")]
        [Validation(Required=false)]
        public string Type { get; set; }

        [NameInMap("LineOperator")]
        [Validation(Required=true)]
        public string LineOperator { get; set; }

        [NameInMap("bandwidth")]
        [Validation(Required=false)]
        public int? Bandwidth { get; set; }

        [NameInMap("PeerLocation")]
        [Validation(Required=true)]
        public string PeerLocation { get; set; }

        [NameInMap("PortType")]
        [Validation(Required=false)]
        public string PortType { get; set; }

        [NameInMap("RedundantPhysicalConnectionId")]
        [Validation(Required=false)]
        public string RedundantPhysicalConnectionId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("CircuitCode")]
        [Validation(Required=false)]
        public string CircuitCode { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

    }

}
