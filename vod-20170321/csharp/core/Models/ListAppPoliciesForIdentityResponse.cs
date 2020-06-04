// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListAppPoliciesForIdentityResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AppPolicyList")]
        [Validation(Required=true)]
        public List<ListAppPoliciesForIdentityResponseAppPolicyList> AppPolicyList { get; set; }
        public class ListAppPoliciesForIdentityResponseAppPolicyList : TeaModel {
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("PolicyName")]
            [Validation(Required=true)]
            public string PolicyName { get; set; }

            [NameInMap("PolicyType")]
            [Validation(Required=true)]
            public string PolicyType { get; set; }

            [NameInMap("PolicyValue")]
            [Validation(Required=true)]
            public string PolicyValue { get; set; }

            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }

            [NameInMap("ModificationTime")]
            [Validation(Required=true)]
            public string ModificationTime { get; set; }

        }

    }

}
