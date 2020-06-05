// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListPoliciesForUserResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Policies")]
        [Validation(Required=true)]
        public ListPoliciesForUserResponsePolicies Policies { get; set; }
        public class ListPoliciesForUserResponsePolicies : TeaModel {
            [NameInMap("Policy")]
            [Validation(Required=true)]
            public List<ListPoliciesForUserResponsePoliciesPolicy> Policy { get; set; }
            public class ListPoliciesForUserResponsePoliciesPolicy : TeaModel {
                    public string PolicyName { get; set; }
                    public string PolicyType { get; set; }
                    public string Description { get; set; }
                    public string DefaultVersion { get; set; }
                    public string AttachDate { get; set; }
            }
        };

    }

}
