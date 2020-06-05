// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListPoliciesForGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Policies")]
        [Validation(Required=true)]
        public ListPoliciesForGroupResponsePolicies Policies { get; set; }
        public class ListPoliciesForGroupResponsePolicies : TeaModel {
            [NameInMap("Policy")]
            [Validation(Required=true)]
            public List<ListPoliciesForGroupResponsePoliciesPolicy> Policy { get; set; }
            public class ListPoliciesForGroupResponsePoliciesPolicy : TeaModel {
                    public string PolicyName { get; set; }
                    public string PolicyType { get; set; }
                    public string Description { get; set; }
                    public string DefaultVersion { get; set; }
                    public string AttachDate { get; set; }
            }
        };

    }

}
