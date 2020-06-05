// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListPolicyVersionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PolicyVersions")]
        [Validation(Required=true)]
        public ListPolicyVersionsResponsePolicyVersions PolicyVersions { get; set; }
        public class ListPolicyVersionsResponsePolicyVersions : TeaModel {
            [NameInMap("PolicyVersion")]
            [Validation(Required=true)]
            public List<ListPolicyVersionsResponsePolicyVersionsPolicyVersion> PolicyVersion { get; set; }
            public class ListPolicyVersionsResponsePolicyVersionsPolicyVersion : TeaModel {
                    public string VersionId { get; set; }
                    public bool? IsDefaultVersion { get; set; }
                    public string PolicyDocument { get; set; }
                    public string CreateDate { get; set; }
            }
        };

    }

}
