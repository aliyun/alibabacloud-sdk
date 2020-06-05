// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class CreatePolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Policy")]
        [Validation(Required=true)]
        public CreatePolicyResponsePolicy Policy { get; set; }
        public class CreatePolicyResponsePolicy : TeaModel {
            [NameInMap("PolicyName")]
            [Validation(Required=true)]
            public string PolicyName { get; set; }
            [NameInMap("PolicyType")]
            [Validation(Required=true)]
            public string PolicyType { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("DefaultVersion")]
            [Validation(Required=true)]
            public string DefaultVersion { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
        };

    }

}
