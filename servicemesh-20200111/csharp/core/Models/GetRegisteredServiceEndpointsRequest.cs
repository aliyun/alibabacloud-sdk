// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class GetRegisteredServiceEndpointsRequest : TeaModel {
        [NameInMap("ServiceMeshId")]
        [Validation(Required=true)]
        public string ServiceMeshId { get; set; }

        [NameInMap("Namespace")]
        [Validation(Required=true)]
        public string Namespace { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

    }

}
