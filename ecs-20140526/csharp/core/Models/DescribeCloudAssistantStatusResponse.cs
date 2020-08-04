// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeCloudAssistantStatusResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceCloudAssistantStatusSet")]
        [Validation(Required=true)]
        public DescribeCloudAssistantStatusResponseInstanceCloudAssistantStatusSet InstanceCloudAssistantStatusSet { get; set; }
        public class DescribeCloudAssistantStatusResponseInstanceCloudAssistantStatusSet : TeaModel {
            [NameInMap("InstanceCloudAssistantStatus")]
            [Validation(Required=true)]
            public List<DescribeCloudAssistantStatusResponseInstanceCloudAssistantStatusSetInstanceCloudAssistantStatus> InstanceCloudAssistantStatus { get; set; }
            public class DescribeCloudAssistantStatusResponseInstanceCloudAssistantStatusSetInstanceCloudAssistantStatus : TeaModel {
                    public string InstanceId { get; set; }
                    public string CloudAssistantStatus { get; set; }
                    public string CloudAssistantVersion { get; set; }
            }
        };

    }

}
