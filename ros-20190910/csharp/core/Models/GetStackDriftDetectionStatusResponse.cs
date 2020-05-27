// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackDriftDetectionStatusResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DriftDetectionId")]
        [Validation(Required=true)]
        public string DriftDetectionId { get; set; }

        [NameInMap("DriftDetectionTime")]
        [Validation(Required=true)]
        public string DriftDetectionTime { get; set; }

        [NameInMap("DriftDetectionStatus")]
        [Validation(Required=true)]
        public string DriftDetectionStatus { get; set; }

        [NameInMap("DriftDetectionStatusReason")]
        [Validation(Required=true)]
        public string DriftDetectionStatusReason { get; set; }

        [NameInMap("StackDriftStatus")]
        [Validation(Required=true)]
        public string StackDriftStatus { get; set; }

        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("DriftedStackResourceCount")]
        [Validation(Required=true)]
        public int? DriftedStackResourceCount { get; set; }

    }

}
