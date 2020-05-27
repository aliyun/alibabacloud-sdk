// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetStackResponse : TeaModel {
        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("DisableRollback")]
        [Validation(Required=true)]
        public bool? DisableRollback { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("StackName")]
        [Validation(Required=true)]
        public string StackName { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("StatusReason")]
        [Validation(Required=true)]
        public string StatusReason { get; set; }

        [NameInMap("TemplateDescription")]
        [Validation(Required=true)]
        public string TemplateDescription { get; set; }

        [NameInMap("TimeoutInMinutes")]
        [Validation(Required=true)]
        public int? TimeoutInMinutes { get; set; }

        [NameInMap("UpdateTime")]
        [Validation(Required=true)]
        public string UpdateTime { get; set; }

        [NameInMap("ParentStackId")]
        [Validation(Required=true)]
        public string ParentStackId { get; set; }

        [NameInMap("StackDriftStatus")]
        [Validation(Required=true)]
        public string StackDriftStatus { get; set; }

        [NameInMap("DriftDetectionTime")]
        [Validation(Required=true)]
        public string DriftDetectionTime { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=true)]
        public string RamRoleName { get; set; }

        [NameInMap("DeletionProtection")]
        [Validation(Required=true)]
        public string DeletionProtection { get; set; }

        [NameInMap("RootStackId")]
        [Validation(Required=true)]
        public string RootStackId { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=true)]
        public List<GetStackResponseParameters> Parameters { get; set; }
        public class GetStackResponseParameters : TeaModel {
            [NameInMap("ParameterKey")]
            [Validation(Required=true)]
            public string ParameterKey { get; set; }

            [NameInMap("ParameterValue")]
            [Validation(Required=true)]
            public string ParameterValue { get; set; }

        }

        [NameInMap("Outputs")]
        [Validation(Required=true)]
        public List<Dictionary<string, object>> Outputs { get; set; }

        [NameInMap("NotificationURLs")]
        [Validation(Required=true)]
        public List<string> NotificationURLs { get; set; }

    }

}
