// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class CreatePolicyVersionRequest : TeaModel {
        [NameInMap("PolicyName")]
        [Validation(Required=false)]
        public string PolicyName { get; set; }

        [NameInMap("PolicyDocument")]
        [Validation(Required=false)]
        public string PolicyDocument { get; set; }

        [NameInMap("SetAsDefault")]
        [Validation(Required=false)]
        public bool? SetAsDefault { get; set; }

        [NameInMap("RotateStrategy")]
        [Validation(Required=false)]
        public string RotateStrategy { get; set; }

    }

}
