// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class GetPolicyVersionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PolicyVersion")]
        [Validation(Required=true)]
        public GetPolicyVersionResponsePolicyVersion PolicyVersion { get; set; }
        public class GetPolicyVersionResponsePolicyVersion : TeaModel {
            [NameInMap("VersionId")]
            [Validation(Required=true)]
            public string VersionId { get; set; }
            [NameInMap("IsDefaultVersion")]
            [Validation(Required=true)]
            public bool? IsDefaultVersion { get; set; }
            [NameInMap("PolicyDocument")]
            [Validation(Required=true)]
            public string PolicyDocument { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
        };

    }

}
