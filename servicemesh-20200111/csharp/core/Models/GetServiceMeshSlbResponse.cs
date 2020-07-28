// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class GetServiceMeshSlbResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public List<GetServiceMeshSlbResponseData> Data { get; set; }
        public class GetServiceMeshSlbResponseData : TeaModel {
            [NameInMap("LoadBalancerId")]
            [Validation(Required=true)]
            public string LoadBalancerId { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("ServerHealthStatus")]
            [Validation(Required=true)]
            public string ServerHealthStatus { get; set; }

        }

    }

}
