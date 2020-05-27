// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class UpdateStackRequest : TeaModel {
        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("StackPolicyDuringUpdateBody")]
        [Validation(Required=false)]
        public string StackPolicyDuringUpdateBody { get; set; }

        [NameInMap("TimeoutInMinutes")]
        [Validation(Required=false)]
        public long TimeoutInMinutes { get; set; }

        [NameInMap("TemplateBody")]
        [Validation(Required=false)]
        public string TemplateBody { get; set; }

        [NameInMap("Parameters")]
        [Validation(Required=false)]
        public List<UpdateStackRequestParameters> Parameters { get; set; }
        public class UpdateStackRequestParameters : TeaModel {
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

        [NameInMap("StackPolicyDuringUpdateURL")]
        [Validation(Required=false)]
        public string StackPolicyDuringUpdateURL { get; set; }

        [NameInMap("StackPolicyBody")]
        [Validation(Required=false)]
        public string StackPolicyBody { get; set; }

        [NameInMap("UsePreviousParameters")]
        [Validation(Required=false)]
        public bool? UsePreviousParameters { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("DisableRollback")]
        [Validation(Required=false)]
        public bool? DisableRollback { get; set; }

        [NameInMap("TemplateURL")]
        [Validation(Required=false)]
        public string TemplateURL { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=false)]
        public string RamRoleName { get; set; }

    }

}
