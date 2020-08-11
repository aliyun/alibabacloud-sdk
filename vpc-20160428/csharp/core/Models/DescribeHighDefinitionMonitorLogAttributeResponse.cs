// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeHighDefinitionMonitorLogAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=true)]
        public string InstanceType { get; set; }

        [NameInMap("LogProject")]
        [Validation(Required=true)]
        public string LogProject { get; set; }

        [NameInMap("LogStore")]
        [Validation(Required=true)]
        public string LogStore { get; set; }

    }

}
