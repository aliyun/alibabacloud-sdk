// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class PreviewStackResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Stack")]
        [Validation(Required=true)]
        public PreviewStackResponseStack Stack { get; set; }
        public class PreviewStackResponseStack : TeaModel {
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("DisableRollback")]
            [Validation(Required=true)]
            public bool? DisableRollback { get; set; }
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }
            [NameInMap("StackName")]
            [Validation(Required=true)]
            public string StackName { get; set; }
            [NameInMap("StackPolicyBody")]
            [Validation(Required=true)]
            public Dictionary<string, string> StackPolicyBody { get; set; }
            [NameInMap("TemplateDescription")]
            [Validation(Required=true)]
            public string TemplateDescription { get; set; }
            [NameInMap("TimeoutInMinutes")]
            [Validation(Required=true)]
            public int? TimeoutInMinutes { get; set; }
            [NameInMap("Parameters")]
            [Validation(Required=true)]
            public List<PreviewStackResponseStackParameters> Parameters { get; set; }
            public class PreviewStackResponseStackParameters : TeaModel {
                    public string ParameterKey { get; set; }
                    public string ParameterValue { get; set; }
            }
            [NameInMap("Resources")]
            [Validation(Required=true)]
            public List<PreviewStackResponseStackResources> Resources { get; set; }
            public class PreviewStackResponseStackResources : TeaModel {
                    public string Description { get; set; }
                    public string LogicalResourceId { get; set; }
                    public Dictionary<string, string> Properties { get; set; }
                    public string ResourceType { get; set; }
                    public Dictionary<string, string> Stack { get; set; }
                    public List<string> RequiredBy { get; set; }
            }
        };

    }

}
