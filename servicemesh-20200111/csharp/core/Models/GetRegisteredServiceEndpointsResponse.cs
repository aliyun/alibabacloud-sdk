// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class GetRegisteredServiceEndpointsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ServiceEndpoints")]
        [Validation(Required=true)]
        public List<GetRegisteredServiceEndpointsResponseServiceEndpoints> ServiceEndpoints { get; set; }
        public class GetRegisteredServiceEndpointsResponseServiceEndpoints : TeaModel {
            [NameInMap("Address")]
            [Validation(Required=true)]
            public string Address { get; set; }

            [NameInMap("ClusterId")]
            [Validation(Required=true)]
            public string ClusterId { get; set; }

        }

    }

}
