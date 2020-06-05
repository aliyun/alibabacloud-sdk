// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class CreateGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Group")]
        [Validation(Required=true)]
        public CreateGroupResponseGroup Group { get; set; }
        public class CreateGroupResponseGroup : TeaModel {
            [NameInMap("GroupName")]
            [Validation(Required=true)]
            public string GroupName { get; set; }
            [NameInMap("Comments")]
            [Validation(Required=true)]
            public string Comments { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
        };

    }

}
