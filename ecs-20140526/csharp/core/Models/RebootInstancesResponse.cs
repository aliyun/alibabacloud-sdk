// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class RebootInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceResponses")]
        [Validation(Required=true)]
        public RebootInstancesResponseInstanceResponses InstanceResponses { get; set; }
        public class RebootInstancesResponseInstanceResponses : TeaModel {
            [NameInMap("InstanceResponse")]
            [Validation(Required=true)]
            public List<RebootInstancesResponseInstanceResponsesInstanceResponse> InstanceResponse { get; set; }
            public class RebootInstancesResponseInstanceResponsesInstanceResponse : TeaModel {
                    public string InstanceId { get; set; }
                    public string PreviousStatus { get; set; }
                    public string CurrentStatus { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
            }
        };

    }

}
