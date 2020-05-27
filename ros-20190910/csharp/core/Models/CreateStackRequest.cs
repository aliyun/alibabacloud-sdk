// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class CreateStackRequest : TeaModel {
        [NameInMap("DisableRollback")]
        [Validation(Required=false)]
        public bool? DisableRollback { get; set; }

        [NameInMap("TemplateBody")]
        [Validation(Required=false)]
        public string TemplateBody { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=false)]
        public List<CreateStackRequestParameters> Parameters { get; set; }
        public class CreateStackRequestParameters : TeaModel {
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

        [NameInMap("TimeoutInMinutes")]
        [Validation(Required=false)]
        public long TimeoutInMinutes { get; set; }

        [NameInMap("StackPolicyBody")]
        [Validation(Required=false)]
        public string StackPolicyBody { get; set; }

        [NameInMap("StackName")]
        [Validation(Required=true)]
        public string StackName { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("TemplateURL")]
        [Validation(Required=false)]
        public string TemplateURL { get; set; }

        [NameInMap("NotificationURLs")]
        [Validation(Required=false)]
        public List<string> NotificationURLs { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=false)]
        public string RamRoleName { get; set; }

        [NameInMap("DeletionProtection")]
        [Validation(Required=false)]
        public string DeletionProtection { get; set; }

    }

}
