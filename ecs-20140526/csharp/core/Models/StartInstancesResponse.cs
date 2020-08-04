// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class StartInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceResponses")]
        [Validation(Required=true)]
        public StartInstancesResponseInstanceResponses InstanceResponses { get; set; }
        public class StartInstancesResponseInstanceResponses : TeaModel {
            [NameInMap("InstanceResponse")]
            [Validation(Required=true)]
            public List<StartInstancesResponseInstanceResponsesInstanceResponse> InstanceResponse { get; set; }
            public class StartInstancesResponseInstanceResponsesInstanceResponse : TeaModel {
                    public string InstanceId { get; set; }
                    public string PreviousStatus { get; set; }
                    public string CurrentStatus { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
            }
        };

    }

}
