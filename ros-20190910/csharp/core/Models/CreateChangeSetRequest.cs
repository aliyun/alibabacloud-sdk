// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class CreateChangeSetRequest : TeaModel {
        [NameInMap("StackId")]
        [Validation(Required=false)]
        public string StackId { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=false)]
        public List<CreateChangeSetRequestParameters> Parameters { get; set; }
        public class CreateChangeSetRequestParameters : TeaModel {
            [NameInMap("ParameterValue")]
            [Validation(Required=true)]
            public string ParameterValue { get; set; }

            [NameInMap("ParameterKey")]
            [Validation(Required=true)]
            public string ParameterKey { get; set; }

        }

        [NameInMap("StackPolicyURL")]
        [Validation(Required=false)]
        public string StackPolicyURL { get; set; }

        [NameInMap("StackPolicyBody")]
        [Validation(Required=false)]
        public string StackPolicyBody { get; set; }

        [NameInMap("StackName")]
        [Validation(Required=false)]
        public string StackName { get; set; }

        [NameInMap("UsePreviousParameters")]
        [Validation(Required=false)]
        public bool? UsePreviousParameters { get; set; }

        [NameInMap("ChangeSetType")]
        [Validation(Required=false)]
        public string ChangeSetType { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("TemplateURL")]
        [Validation(Required=false)]
        public string TemplateURL { get; set; }

        [NameInMap("StackPolicyDuringUpdateURL")]
        [Validation(Required=false)]
        public string StackPolicyDuringUpdateURL { get; set; }

        [NameInMap("TemplateBody")]
        [Validation(Required=false)]
        public string TemplateBody { get; set; }

        [NameInMap("TimeoutInMinutes")]
        [Validation(Required=false)]
        public long TimeoutInMinutes { get; set; }

        [NameInMap("DisableRollback")]
        [Validation(Required=false)]
        public bool? DisableRollback { get; set; }

        [NameInMap("ChangeSetName")]
        [Validation(Required=true)]
        public string ChangeSetName { get; set; }

        [NameInMap("StackPolicyDuringUpdateBody")]
        [Validation(Required=false)]
        public string StackPolicyDuringUpdateBody { get; set; }

        [NameInMap("NotificationURLs")]
        [Validation(Required=false)]
        public List<string> NotificationURLs { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=false)]
        public string RamRoleName { get; set; }

        [NameInMap("ReplacementOption")]
        [Validation(Required=false)]
        public string ReplacementOption { get; set; }

        [NameInMap("ResourcesToImport")]
        [Validation(Required=false)]
        public List<CreateChangeSetRequestResourcesToImport> ResourcesToImport { get; set; }
        public class CreateChangeSetRequestResourcesToImport : TeaModel {
            [NameInMap("LogicalResourceId")]
            [Validation(Required=true)]
            public string LogicalResourceId { get; set; }

            [NameInMap("ResourceType")]
            [Validation(Required=true)]
            public string ResourceType { get; set; }

            [NameInMap("ResourceIdentifier")]
            [Validation(Required=true)]
            public string ResourceIdentifier { get; set; }

        }

    }

}
