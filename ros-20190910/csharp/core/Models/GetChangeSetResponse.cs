// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetChangeSetResponse : TeaModel {
        [NameInMap("ChangeSetId")]
        [Validation(Required=true)]
        public string ChangeSetId { get; set; }

        [NameInMap("ChangeSetName")]
        [Validation(Required=true)]
        public string ChangeSetName { get; set; }

        [NameInMap("ChangeSetType")]
        [Validation(Required=true)]
        public string ChangeSetType { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("DisableRollback")]
        [Validation(Required=true)]
        public bool? DisableRollback { get; set; }

        [NameInMap("ExecutionStatus")]
        [Validation(Required=true)]
        public string ExecutionStatus { get; set; }

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

        [NameInMap("TemplateBody")]
        [Validation(Required=true)]
        public string TemplateBody { get; set; }

        [NameInMap("TimeoutInMinutes")]
        [Validation(Required=true)]
        public int? TimeoutInMinutes { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=true)]
        public List<GetChangeSetResponseParameters> Parameters { get; set; }
        public class GetChangeSetResponseParameters : TeaModel {
            [NameInMap("ParameterKey")]
            [Validation(Required=true)]
            public string ParameterKey { get; set; }

            [NameInMap("ParameterValue")]
            [Validation(Required=true)]
            public string ParameterValue { get; set; }

        }

        [NameInMap("Changes")]
        [Validation(Required=true)]
        public List<Dictionary<string, object>> Changes { get; set; }

    }

}
