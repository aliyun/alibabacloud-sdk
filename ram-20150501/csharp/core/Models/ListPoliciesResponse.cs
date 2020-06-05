// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListPoliciesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IsTruncated")]
        [Validation(Required=true)]
        public bool? IsTruncated { get; set; }

        [NameInMap("Marker")]
        [Validation(Required=true)]
        public string Marker { get; set; }

        [NameInMap("Policies")]
        [Validation(Required=true)]
        public ListPoliciesResponsePolicies Policies { get; set; }
        public class ListPoliciesResponsePolicies : TeaModel {
            [NameInMap("Policy")]
            [Validation(Required=true)]
            public List<ListPoliciesResponsePoliciesPolicy> Policy { get; set; }
            public class ListPoliciesResponsePoliciesPolicy : TeaModel {
                    public string PolicyName { get; set; }
                    public string PolicyType { get; set; }
                    public string Description { get; set; }
                    public string DefaultVersion { get; set; }
                    public string CreateDate { get; set; }
                    public string UpdateDate { get; set; }
                    public int? AttachmentCount { get; set; }
            }
        };

    }

}
