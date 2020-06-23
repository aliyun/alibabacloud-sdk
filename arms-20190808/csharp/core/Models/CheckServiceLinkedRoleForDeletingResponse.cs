// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class CheckServiceLinkedRoleForDeletingResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Deletable")]
        [Validation(Required=true)]
        public bool? Deletable { get; set; }

        [NameInMap("RoleUsages")]
        [Validation(Required=true)]
        public List<CheckServiceLinkedRoleForDeletingResponseRoleUsages> RoleUsages { get; set; }
        public class CheckServiceLinkedRoleForDeletingResponseRoleUsages : TeaModel {
            [NameInMap("Region")]
            [Validation(Required=true)]
            public string Region { get; set; }

            [NameInMap("Resources")]
            [Validation(Required=true)]
            public List<string> Resources { get; set; }

        }

    }

}
