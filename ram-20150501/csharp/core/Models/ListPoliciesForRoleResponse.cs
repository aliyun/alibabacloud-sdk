// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListPoliciesForRoleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Policies")]
        [Validation(Required=true)]
        public ListPoliciesForRoleResponsePolicies Policies { get; set; }
        public class ListPoliciesForRoleResponsePolicies : TeaModel {
            [NameInMap("Policy")]
            [Validation(Required=true)]
            public List<ListPoliciesForRoleResponsePoliciesPolicy> Policy { get; set; }
            public class ListPoliciesForRoleResponsePoliciesPolicy : TeaModel {
                    public string PolicyName { get; set; }
                    public string PolicyType { get; set; }
                    public string Description { get; set; }
                    public string DefaultVersion { get; set; }
                    public string AttachDate { get; set; }
            }
        };

    }

}
