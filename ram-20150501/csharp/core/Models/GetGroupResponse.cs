// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class GetGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Group")]
        [Validation(Required=true)]
        public GetGroupResponseGroup Group { get; set; }
        public class GetGroupResponseGroup : TeaModel {
            [NameInMap("GroupName")]
            [Validation(Required=true)]
            public string GroupName { get; set; }
            [NameInMap("Comments")]
            [Validation(Required=true)]
            public string Comments { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
            [NameInMap("UpdateDate")]
            [Validation(Required=true)]
            public string UpdateDate { get; set; }
        };

    }

}
