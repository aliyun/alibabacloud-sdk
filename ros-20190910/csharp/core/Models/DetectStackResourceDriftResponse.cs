// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class DetectStackResourceDriftResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DriftDetectionTime")]
        [Validation(Required=true)]
        public string DriftDetectionTime { get; set; }

        [NameInMap("ResourceDriftStatus")]
        [Validation(Required=true)]
        public string ResourceDriftStatus { get; set; }

        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("PhysicalResourceId")]
        [Validation(Required=true)]
        public string PhysicalResourceId { get; set; }

        [NameInMap("LogicalResourceId")]
        [Validation(Required=true)]
        public string LogicalResourceId { get; set; }

        [NameInMap("ActualProperties")]
        [Validation(Required=true)]
        public string ActualProperties { get; set; }

        [NameInMap("ExpectedProperties")]
        [Validation(Required=true)]
        public string ExpectedProperties { get; set; }

        [NameInMap("PropertyDifferences")]
        [Validation(Required=true)]
        public List<DetectStackResourceDriftResponsePropertyDifferences> PropertyDifferences { get; set; }
        public class DetectStackResourceDriftResponsePropertyDifferences : TeaModel {
            [NameInMap("PropertyPath")]
            [Validation(Required=true)]
            public string PropertyPath { get; set; }

            [NameInMap("ActualValue")]
            [Validation(Required=true)]
            public string ActualValue { get; set; }

            [NameInMap("ExpectedValue")]
            [Validation(Required=true)]
            public string ExpectedValue { get; set; }

            [NameInMap("DifferenceType")]
            [Validation(Required=true)]
            public string DifferenceType { get; set; }

        }

    }

}
